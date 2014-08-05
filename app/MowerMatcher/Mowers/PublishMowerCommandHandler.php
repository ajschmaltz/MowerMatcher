<?php namespace MowerMatcher\Mowers;


use Laracasts\Commander\CommandHandler;

class PublishMowerCommandHandler implements CommandHandler {

  /**
   * @var
   */
  private $mowerRepository;

  function __construct(MowerRepository $mowerRepository)
  {
    $this->mowerRepository = $mowerRepository;
  }

  /**
   * Handle the command
   *
   * @param $command
   * @return mixed
   */
  public function handle($command)
  {
    $mower = Mower::publish(
      $command->body,
      $command->cutting_width,
      $command->engine_hours,
      $command->engine_make,
      $command->engine_model,
      $command->mower_make,
      $command->mower_model,
      $command->price,
      $command->style,
      $command->use,
      $command->year
    );

    $mower = $this->mowerRepository->save($mower, $command->userId);

    if($command->imageIds && $command->imageIds[0] != '[[ file.uid ]]')
    {
      $this->mowerRepository->attachImages($mower, $command->imageIds);
    }

  }
}