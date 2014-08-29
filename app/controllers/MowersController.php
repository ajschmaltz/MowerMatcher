<?php

use MowerMatcher\Mowers\MowerRepository;
use MowerMatcher\Mowers\PublishMowerCommand;
use MowerMatcher\Mowers\MarkMowerSoldCommand;
use MowerMatcher\Forms\PostMowerForm;

class MowersController extends BaseController {


  protected $mowerRepository;

  function __construct(MowerRepository $mowerRepository, PostMowerForm $postMowerForm)
  {
    $this->postMowerForm = $postMowerForm;
    $this->mowerRepository = $mowerRepository;
  }


  /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
    $mowers = $this->mowerRepository->getAllForUser(Auth::user());

		return View::make('mowers.index', compact('mowers'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
    return View::make('pages.sell');
	}


	/**
	 * Save a new mower
	 *
	 * @return Response
	 */
	public function store()
	{

    $input = Input::get();

    $input['userId'] = Auth::user()->id;

    $this->postMowerForm->validate($input);

    $this->execute(PublishMowerCommand::class, $input);

    Flash::message('Your mower has been published!');

    return Redirect::to('/');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$mower = $this->mowerRepository->getOne($id);

    return View::make('pages.mowers.id')->withMower($mower);
	}


	/**
	 * Show the form for editing the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

  public function markSold()
  {
    $input = Input::all();

    $this->execute(MarkMowerSoldCommand::class, $input);
  }


}
