<?php

namespace App\Http\Middleware;

use App\Models\UserManagement\Module;
use App\Models\UserManagement\Permission;
use App\Models\UserManagement\Role;
use App\Models\UserManagement\User;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class AccessGate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
    	        $user = Auth::user();


        if(!app()->runningInConsole() && $user)
        {
            if ($user->isAdmin()) {
                $modules = Module::all();
                $permissions = Permission::all()->where('active', 1);
                foreach ($modules as $module) {
                    Gate::define($module->slug, function () {
                        return true;
                    });
                }
                foreach ($permissions as $permission) {
                    Gate::define($permission->slug, function () {
                        return true;
                    });
                }
            } else {
                $roleModules = Role::with('modules')->get();
                $modules = [];
                $permissions = [];

                foreach ($roleModules as $role) {
                    foreach ($role->modules as $module) {
                        $modules[$module->slug][] = $role->id;

                        $pagePermissions = DB::table('permissions')
                            ->join('permission_role', 'permissions.id', '=', 'permission_role.permission_id')
                            ->join('pages', 'permissions.page_id', '=', 'pages.id')
                            ->join('module_role', function($join) use ($module, $role) {
                                $join->on('pages.module_id', '=', 'module_role.module_id');
                                $join->on('module_role.module_id', '=', DB::raw("'". $module->id ."'"));
                                $join->on('module_role.role_id', '=', DB::raw("'". $role->id ."'"));
                            })->select('permissions.*')
                            ->whereNull('pages.deleted_at')
                            ->where('permissions.active', true)
                            ->get();
                        foreach ($pagePermissions as $pagePermission) {
                            $permissions[$pagePermission->slug][] = $role->id;
                        }
                    }
                }

                foreach ($modules as $slug => $roles) {
                    Gate::define($slug, function(User $user) use ($roles) {
                        return count(array_intersect($user->roles->pluck('id')->toArray(), $roles)) > 0;
                    }) ;
                }

                foreach ($permissions as $name => $roles) {
                    Gate::define($name, function(User $user) use ($roles) {
                        return count(array_intersect($user->roles->pluck('id')->toArray(), $roles)) > 0;
                    });
                }
            }

        }
        return $next($request);
    }
}
