<?php

namespace App\Http\Controllers\UserManagement;

use App\Models\UserManagement\Page;
use App\Repositories\UserManagement\PageRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
	protected $pageRepository;

	public function __construct(PageRepository $pageRepository)
	{
		$this->pageRepository = $pageRepository;
	}

	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user-management.pages.index', [
        	'pages' => $this->pageRepository->paginate()
		]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserManagement\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        return view('user-management.pages.show', [
        	'page' => $page
		]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserManagement\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserManagement\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserManagement\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }
}
