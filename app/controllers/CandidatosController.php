<?php
/**
 * Created by PhpStorm.
 * User: royercross
 * Date: 19/06/14
 * Time: 11:40 AM
 */

use HireMe\Repositories\CategoriaRepo;
use HireMe\Repositories\CandidatoRepo;

class CandidatosController extends BaseController{

    protected $categoriaRepo;
    protected $candidatoRepo;

    public function __construct(CategoriaRepo $categoriaRepo, CandidatoRepo $candidatoRepo)
    {
        $this->categoriaRepo = $categoriaRepo;
        $this->candidatoRepo = $candidatoRepo;
    }

    public function categoria($slug, $id)
    {
        $categoria = $this->categoriaRepo->find($id);
        $candidatos = $this->categoriaRepo->getCandidatosDeCategoria($id,2);
        //dd(compact('categoria'));
        return View::make('candidatos/categoria', compact('categoria','candidatos'));
    }

    public function show($slug, $id)
    {
        $candidato = $this->candidatoRepo->find($id);
        //dd($candidato);
        return View::make('candidatos/show',compact('candidato'));
    }

} 