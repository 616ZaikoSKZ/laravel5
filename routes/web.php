<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/amenazas', function () {
    return view('amenazas');
});

Route::get('/buenas_practicas', function () {
    return view('buenas_practicas');
});

Route::get('/herramientas', function () {
    return view('herramientas');
});

Route::get('/noticias', function () {
    return view('noticias ');
});

Route::get('/contacto', function () {
    return view('contacto');
});


Route::get('/login', function () {
    return view('login'); // Muestra la vista del formulario de inicio de sesión
})->name('login');

Route::post('/login', function (\Illuminate\Http\Request $request) {
    // Credenciales definidas en el código
    $validEmail = 'example@gmail.com';
    $validPassword = 'example123';

    // Verificar credenciales
    if ($request->email === $validEmail && $request->password === $validPassword) {
        // Redirigir a la página de inicio si las credenciales son correctas
        return redirect('/inicio');
    }

    // Redirigir de vuelta al login con un mensaje de error
    return back()->with('error', 'Las credenciales no son correctas.');
});

Route::post('/logout', function () {
    // Aquí puedes manejar la lógica de cierre de sesión
    // Por ejemplo, limpiar la sesión del usuario
    session()->flush(); // Elimina todos los datos de la sesión
    return redirect('/login'); // Redirige al formulario de login
})->name('logout');

