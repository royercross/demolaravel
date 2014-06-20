<?php namespace HireMe\Entities;

class Candidato extends \Eloquent {

	protected $fillable = [];
    protected $perPage = 5;

    public function user()
    {
        return $this->hasOne('HireMe\Entities\User','id','id');
    }

    public function categoria(){
        return $this->belongsTo('HireMe\Entities\Categoria');
    }

    public function getTipoTrabajoTituloAttribute()
    {
        return \Lang::get('utils.tipo_trabajo.'.$this->tipo_trabajo);
    }

}