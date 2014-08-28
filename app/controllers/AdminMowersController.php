<?php

use MowerMatcher\Users\UserRepository;

class AdminMowersController extends \BaseController {

  protected $userRepository;

  function __construct(UserRepository $userRepository)
  {
    $this->userRepository = $userRepository;
  }

	/**
	 * Display a listing of the resource.
	 * GET /adminmowers
	 *
	 * @return Response
	 */
	public function index()
	{
    $id = Auth::user()->id;
    $user = $this->userRepository->findById($id);
    return View::make('pages.my.mowers')->withUser($user);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /adminmowers/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /adminmowers
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /adminmowers/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /adminmowers/{id}/edit
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
	 * PUT /adminmowers/{id}
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
	 * DELETE /adminmowers/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}