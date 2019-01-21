<?php

Route::get('/', function () {
    return view('index');
});


Route::get('/ofertas', function(){
		return view('ofertas');
	});

Route::get('alumnos', function () {
    return view('alumnos');
});

Route::get('profesores', function () {
    return view('profesores');
});

Route::get('perfil', function () {
    return view('perfil');
});

Route::get('crear_oferta', function () {
    return view('crearoferta');
});

Route::get('ofertasdetalle/{id}', function ($id) {
    return view('ofertasdetalle', array('id'=>$id));
});

Route::get('contraolvidada', function () {
    return view('contraolvidada');
});

Route::get('login', function () {
    return view('login');
});

Route::get('registro', function () {
    return view('registro');
});

Route::get('crearprofe', function () {
    return view('crearprofe');
});
/*
Route::post('insertarprofe', function () {
    DB::table('Profesor')->insert( ['idProfesor' => 4, 'departamento' => 'Informatica', 'nombre' => 'Alexander', 'apellidos' => 'Lara Martin', 'dni' => '2525262F', 'email' => 'alexlara@gmail.com', 'password' => '1234', 'baja' => 0, 'admin' => 0]);
    return view('profesores'); 
}); */