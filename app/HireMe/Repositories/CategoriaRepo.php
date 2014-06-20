<?php
/**
 * Created by PhpStorm.
 * User: royercross
 * Date: 19/06/14
 * Time: 11:45 AM
 */

namespace HireMe\Repositories;

use HireMe\Entities\Categoria;
use HireMe\Entities\Candidato;

class CategoriaRepo extends BaseRepo{

    public function getModel(){
        return new Categoria;
    }

    public function getCandidatosDeCategoria($id,$take=10)
    {
        //return Categoria::find($id);

        return Candidato::where('categoria_id','=',$id)->with([
            'user' => function($q) use ($id, $take){
                }
        ])->get();


        //return Categoria::find($id)->candidatos;
        /*
        return Categoria::find($id)->candidatos->with([
            'candidatos' => function($q) use ($take){
                    //$q->take($take);
                    $q->orderBy('created_at', 'DESC');
                },
            'candidatos.user'])->get();
        */
    }
} 