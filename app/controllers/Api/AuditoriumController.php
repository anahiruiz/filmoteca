<?php namespace Api;

use Filmoteca\Repository\AuditoriumsRepository;

use Response;

class AuditoriumController extends ApiController
{
	public function __construct(AuditoriumsRepository $repository)
	{
		$this->repository = $repository;
	}

	public function all()
	{
		$resources = $this->repository->all();

		return Response::json($resources,200);
	}
}