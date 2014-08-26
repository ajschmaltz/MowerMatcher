<?php namespace MowerMatcher\Mowers;

use Laracasts\Commander\CommandHandler;

class MarkMowerSoldCommandHandler  implements CommandHandler {

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
    $this->mowerRepository->markSold($command->id);
  }
}