<?php

use MowerMatcher\Filters\CreateFilterCommand;
use MowerMatcher\Filters\FilterRepository;
use MowerMatcher\Mowers\MowerRepository;

class FiltersController extends \BaseController {

  private $mowerRepository;
  private $filterRepository;

  function __construct(FilterRepository $filterRepository, MowerRepository $mowerRepository)
  {
    $this->mowerRepository = $mowerRepository;
    $this->filterRepository = $filterRepository;
  }

	/**
	 * Display a listing of the resource.
	 * GET /filters
	 *
	 * @return Response
	 */
	public function index()
	{
    $filters = $this->filterRepository->getAllFiltersForUser(Auth::user());

    return View::make('filters.index')->withFilters($filters);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /filters/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /filters
	 *
	 * @return Response
	 */
	public function store()
	{
    $input = [
      'query' => http_build_query(Input::all()),
      'userId' => Auth::user()->id
    ];

    $this->execute(CreateFilterCommand::class, $input);
	}

	/**
	 * Display the specified resource.
	 * GET /filters/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
    $filter = $this->filterRepository->getFilter($id);
    parse_str($filter->query, $query);

    return $this->mowerRepository->getFilteredMowers($query);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /filters/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /filters/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /filters/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}