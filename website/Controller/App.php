<?php

namespace website;

/**
 * Controlador base de la aplicación
 * Modifica la configuración por defecto del componente Auth
 * @author Esteban De La Fuente Rubio, DeLaF (esteban[at]delaf.cl)
 * @version 2015-03-13
 */
abstract class Controller_App extends \sowerphp\app\Controller_App
{

    public $components = [
        'Auth'=>[
            'redirect' => [
                'login' => '/dashboard',
            ],
        ],
        'Api'
    ]; ///< Componentes usados por el controlador

}
