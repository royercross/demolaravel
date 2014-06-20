<?php namespace HireMe\Entities;

class Categoria extends \Eloquent {
	protected $fillable = [];

    public function candidatos(){
        return $this->hasMany('HireMe\Entities\Candidato');
    }

    public function getPaginateCandidatosAttribute()
    {
        return Candidato::where('categoria_id', $this->id)->paginate();
    }

}