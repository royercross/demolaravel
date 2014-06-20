<?php
/**
 * Created by PhpStorm.
 * User: royercross
 * Date: 19/06/14
 * Time: 11:45 AM
 */

namespace HireMe\Repositories;

use HireMe\Entities\Candidato;
use HireMe\Entities\Categoria;
use HireMe\Entities\User;

class CandidatoRepo extends BaseRepo{

        public function getModel(){
            return new Candidato;
        }

        public function newCandidato()
        {
            $user = new User();
            $user->tipo = 'candidato';

            return $user;
        }

        public function ultimosCandidatos($take = 10)
        {
            return Categoria::with([
                'candidatos' => function($q) use ($take){
                        $q->take($take);
                        $q->orderBy('created_at', 'DESC');
                    },
                'candidatos.user'])->get();
        }

} 