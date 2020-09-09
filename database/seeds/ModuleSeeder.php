<?php

use Illuminate\Database\Seeder;
use App\Models\User\Module;
use App\Models\User\Page;
use App\Models\User\Permission;
use App\Models\User\Role;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Module::create([
            'name' => "User Management",
            'slug' => 'user-management',
        ]);
        $school = Module::create([
            'name' => "School Setup",
            'slug' => 'school-setup',
        ]);
        $setting = Module::create([
            'name' => "Setting",
            'slug' => 'setting',
        ]);

        $user->roles()->attach(Role::where('slug', 'administrator')->first());

        // User Management Module
        $rolePage = new Page();
        $rolePage->name = 'Roles';
        $rolePage->slug = 'roles';
        $rolePage->can_access = 'roles.access';
        $rolePage->route_name = 'user-management.roles.index';
        $user->pages()->save($rolePage);

        $userPage = new Page();
        $userPage->name = 'Users';
        $userPage->slug = 'users';
        $userPage->can_access = 'users.access';
        $userPage->route_name = 'user-management.users.index';
        $user->pages()->save($userPage);

        $modulePage = new Page();
        $modulePage->name = 'Modules';
        $modulePage->slug = 'modules';
        $modulePage->can_access = 'modules.access';
        $modulePage->route_name = 'user-management.modules.index';
        $user->pages()->save($modulePage);

        $pagePage = new Page();
        $pagePage->name = 'Pages';
        $pagePage->slug = 'pages';
        $pagePage->can_access = 'pages.access';
        $pagePage->route_name = 'user-management.pages.index';
        $user->pages()->save($pagePage);

        $languagePage = new Page();
        $languagePage->name = 'Languages';
        $languagePage->slug = 'languages';
        $languagePage->can_access = 'languages.access';
        $languagePage->route_name = 'setting.languages.index';
        $setting->pages()->save($languagePage);

        // School Setup Module
//        $branchPage = new Page();
//        $branchPage->name = 'School Branches';
//        $branchPage->slug = 'schools';
//        $branchPage->can_access = 'schools.access';
//        $branchPage->route_name = 'school-setup.schools.index';
//        $school->pages()->save($branchPage);
//
//        $campusPage = new Page();
//        $campusPage->name = 'School Campuses';
//        $campusPage->slug = 'campuses';
//        $campusPage->can_access = 'campuses.access';
//        $campusPage->route_name = 'school-setup.campuses.index';
//        $school->pages()->save($campusPage);
//
//        $yearPage = new Page();
//        $yearPage->name = 'Academic Years';
//        $yearPage->slug = 'years';
//        $yearPage->can_access = 'years.access';
//        $yearPage->route_name = 'school-setup.years.index';
//        $school->pages()->save($yearPage);
//
//        $programPage = new Page();
//        $programPage->name = 'School Programs';
//        $programPage->slug = 'programs';
//        $programPage->can_access = 'programs.access';
//        $programPage->route_name = 'school-setup.programs.index';
//        $school->pages()->save($programPage);
//
//        $subProgramPage = new Page();
//        $subProgramPage->name = 'Sub-Programs';
//        $subProgramPage->slug = 'subprograms';
//        $subProgramPage->can_access = 'subprograms.access';
//        $subProgramPage->route_name = 'school-setup.sub-programs.index';
//        $school->pages()->save($subProgramPage);
//
//        $levelPage = new Page();
//        $levelPage->name = 'School Levels';
//        $levelPage->slug = 'levels';
//        $levelPage->can_access = 'levels.access';
//        $levelPage->route_name = 'school-setup.levels.index';
//        $school->pages()->save($levelPage);
//
//        $classPage = new Page();
//        $classPage->name = 'Classrooms';
//        $classPage->slug = 'classrooms';
//        $classPage->can_access = 'classrooms.access';
//        $classPage->route_name = 'school-setup.classrooms.index';
//        $school->pages()->save($classPage);


        $actions = ['access', 'view', 'create', 'update', 'delete'];

        $pages = Page::all();
        foreach ($pages as $page) {
            foreach ($actions as $action) {
                $permission = new Permission();
                $permission->name = ucfirst($action). ' ' .$page->name;
                $permission->slug = $page->slug. '.' .$action;
                $per = $page->permissions()->save($permission);

                if ($page->module_id == 1) {
                    Role::where('slug', 'administrator')->first()->permissions()->attach($per);
                }
                if ($page->module_id == 2) {
                    Role::where('slug', 'administrator')->first()->permissions()->attach($per);
                    Role::where('slug', 'academic')->first()->permissions()->attach($per);
                }
            }
        }
    }
}
