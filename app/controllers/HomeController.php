<?php

use HireMe\Repositories\CandidatoRepo;


class HomeController extends BaseController {
    protected $candidatoRepo;

    public function __construct(CandidatoRepo $candidatoRepo)
    {
        $this->candidatoRepo = $candidatoRepo;
    }

	public function index()
	{
        $ultimos_candidatos = $this->candidatoRepo->ultimosCandidatos();
		return View::make('home',compact('ultimos_candidatos'));
	}

}
