<?php namespace MowerMatcher\Filters;

use MowerMatcher\Filters\FilterRepository;
use Laracasts\Commander\CommandHandler;

class CreateFilterCommandHandler implements CommandHandler {

  /**
   * @var
   */
  private $filterRepository;

  function __construct(FilterRepository $filterRepository)
  {
    $this->filterRepository = $filterRepository;
  }

  /**
   * Handle the command
   *
   * @param $command
   * @return mixed
   */
  public function handle($command)
  {
    $filter = Filter::prepare($command->query);

    $this->filterRepository->save($filter, $command->userId);
  }
}