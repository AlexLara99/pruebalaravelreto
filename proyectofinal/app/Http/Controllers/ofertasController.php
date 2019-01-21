<?php

namespace App\Http\Controllers;

use App\oferta;
use App\Http\Controllers\Controller;
use DB;

class ofertasController extends Controller{

	

	

	

	public function getOfertas(){

		
		return view('ofertas');



		/*$ofertas = DB::table('oferta')->get();

         */
        // ,array('arrayOfertas' => $this->arrayOfertas)

	}



}
?>