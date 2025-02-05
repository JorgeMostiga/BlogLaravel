<?php

namespace App\Http\Controllers;

/* para usar ->middleware('auth') en algunas partes del blog
ejemplo: crear post, editar post, eliminar post, etc se crea esto: */
use Illuminate\Routing\Controller as BaseController;

// Luego agregamos la extencion al nuevo BaseController, asi nos da acceso al ->middleware('auth')
abstract class Controller extends BaseController
{
    //
}
