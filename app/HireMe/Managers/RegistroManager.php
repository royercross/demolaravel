<?php namespace HireMe\Managers;


class RegistroManager extends BaseManager{

    public function getRules()
    {

        $rules = [
            'nombre_completo' => 'required',
            'email'           => 'required|email|unique:users,email',
            'password'        => 'required|confirmed',
            'password_confirmation' => 'required'
        ];

        return $rules;
    }

}