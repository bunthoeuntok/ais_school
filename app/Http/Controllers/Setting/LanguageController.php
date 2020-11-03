<?php

namespace App\Http\Controllers\Setting;

use App\DataTables\Setting\LanguageDataTable;
use App\Models\Setting\Language;
use App\Http\Controllers\Controller;
use App\Repositories\Setting\LanguageRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LanguageController extends Controller
{
	protected $languageRepository;

	public function __construct(LanguageRepository $languageRepository)
	{
		$this->languageRepository = $languageRepository;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index()
    {
		return view('setting.languages.index', [
			'languages' => $this->languageRepository->paginate()
		]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('setting.languages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\System\Language  $language
     * @return Response
     */
    public function show(Language $language)
    {
        //
    }

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param Language $language
	 * @return Response
	 */
    public function edit(Language $language)
    {
		return view('setting.languages.edit', [
			'language' => $language
		]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\System\Language  $language
     * @return Response
     */
    public function update(Request $request, Language $language)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\System\Language  $language
     * @return Response
     */
    public function destroy(Language $language)
    {
        //
    }
}
