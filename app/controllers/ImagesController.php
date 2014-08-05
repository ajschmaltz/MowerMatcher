<?php

use Flow\Config;
use Flow\File;
use Laracasts\Commander\CommanderTrait;
use MowerMatcher\Images\SaveImageCommand;

class ImagesController extends \BaseController {

  use CommanderTrait;

  private $file;

  function __construct()
  {
    $this->file = new File(new Config(array('tempDir' => public_path())));
  }

	/**
	 * Display a listing of the resource.
	 * GET /images
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /images/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /images
	 *
	 * @return Response
	 */
	public function uploader_post()
	{
    $destination = public_path() . '/' . Input::get('flowFilename');
    if ($this->file->validateChunk()) {
      $this->file->saveChunk();
    } else {
      return Response::make('', 400);
    }
    if ($this->file->validateFile() && $this->file->save($destination)) {

      $input = array();
      $input['filename'] = Input::get('flowFilename');
      $input['userId'] = Auth::user()->id;

      return $this->execute(SaveImageCommand::class, $input);
    }
	}

  function uploader_get()
  {
    if (!$this->file->checkChunk()) {
      return Response::make('', 404);
    }
  }

	/**
	 * Display the specified resource.
	 * GET /images/{id}
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
	 * GET /images/{id}/edit
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
	 * PUT /images/{id}
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
	 * DELETE /images/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}