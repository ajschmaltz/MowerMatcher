<?php namespace MowerMatcher\Images;

use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;

class SaveImageCommandHandler implements CommandHandler {

  use DispatchableTrait;

  private $imageRepository;

  function __construct(ImageRepository $imageRepository)
  {
    $this->imageRepository = $imageRepository;
  }

  /**
   * Handle the command
   *
   * @param $command
   * @return mixed
   */
  public function handle($command)
  {
    $image = Image::post(
      $command->filename, $command->uid
    );

    return $this->imageRepository->save($image, $command->userId);

    $this->dispatchEventsFor($image);

  }
}