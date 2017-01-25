<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConektaController extends Controller
{
    public function payment()
    {
        \Conekta\Conekta::setApiKey('key_FQ1PySRgfPeSzMbauF95rQ');
        try{
            $customer = \Conekta\Customer::create(
                array(
                    'name'  => "James",
                    'email' => "prueba@forces.gov",
                    'phone' => "55-5555-5555",
                    'cards' => array('tok_test_visa_4242'),
                    //'plan'  => "mensual_mxn"
                )
            );
            return $customer;
        }catch (Conekta_Error $e){
            //el cliente no pudo ser creado
            return $e->getMessage();
        }
    }
}
