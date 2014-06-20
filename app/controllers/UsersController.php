<?php

use HireMe\Managers\RegistroManager;
use HireMe\Repositories\CandidatoRepo;

class UsersController extends BaseController{

    protected  $candidatoRepo;

    public function __construct(CandidatoRepo $candidateRepo)
    {
        $this->candidatoRepo = $candidateRepo;
    }

    public function registro()
    {
        return View::make('users/registro');
    }

    public function registrar()
    {
        $user = $this->candidatoRepo->newCandidato();

        $manager = new RegistroManager($user, Input::all());

        if($manager->save())
        {
            return Redirect::route('home');
        }

        return Redirect::back()->withInput()->withErrors($manager->getErrors());
    }

} 