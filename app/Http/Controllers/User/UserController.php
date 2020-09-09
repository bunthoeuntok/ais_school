<?php

namespace App\Http\Controllers\User;

use App\DataTables\User\UserDataTable;
use App\Http\Controllers\Controller;
use App\Models\User\User;
use App\Repositories\User\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
	protected $userRepository;

	public function __construct(UserRepository $userRepository)
	{
		$this->userRepository = $userRepository;
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @param Request $request
	 * @param UserDataTable $userDataTable
	 * @return Response
	 */
    public function index(Request $request, UserDataTable $userDataTable)
    {
        return $userDataTable->with('search', $request)->render('user-management.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('user-management.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

	/**
	 * Display the specified resource.
	 *
	 * @param User $user
	 * @return void
	 */
    public function show(User $user)
    {

    }

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param User $user
	 * @return Response
	 */
    public function edit(User $user)
    {
        return view('user-management.users.edit', [
        	'user' => $user
		]);
    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param Request $request
	 * @param User $user
	 * @return void
	 */
    public function update(Request $request, User $user)
    {
        $this->userRepository->update($request, $user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
