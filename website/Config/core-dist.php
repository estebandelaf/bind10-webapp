<?php

/**
 * SowerPHP: Minimalist Framework for PHP
 * Copyright (C) SowerPHP (http://sowerphp.org)
 *
 * Este programa es software libre: usted puede redistribuirlo y/o
 * modificarlo bajo los términos de la Licencia Pública General GNU
 * publicada por la Fundación para el Software Libre, ya sea la versión
 * 3 de la Licencia, o (a su elección) cualquier versión posterior de la
 * misma.
 *
 * Este programa se distribuye con la esperanza de que sea útil, pero
 * SIN GARANTÍA ALGUNA; ni siquiera la garantía implícita
 * MERCANTIL o de APTITUD PARA UN PROPÓSITO DETERMINADO.
 * Consulte los detalles de la Licencia Pública General GNU para obtener
 * una información más detallada.
 *
 * Debería haber recibido una copia de la Licencia Pública General GNU
 * junto a este programa.
 * En caso contrario, consulte <http://www.gnu.org/licenses/gpl.html>.
 */

/** ESTE ARCHIVO SE DEBE CONFIGURAR Y RENOMBRAR A core.php */

/**
 * @file core.php
 * Configuración propia de cada proyecto
 * @version 2015-06-22
 */

// Configuración depuración
Configure::write('debug', true);
Configure::write('error.level', E_ALL);

// Tema de la página (diseño)
\sowerphp\core\Configure::write('page.layout', 'DASHGU');

// Textos de la página
\sowerphp\core\Configure::write('page.header.title', 'Bind10');
\sowerphp\core\Configure::write('page.body.title', 'Bind10');
\sowerphp\core\Configure::write('page.footer', '<span>Un proyecto de <a href="https://sasco.cl">SASCO SpA</a></span>');

// Menú principal del sitio web
\sowerphp\core\Configure::write('nav.website', [
    '/inicio'=>['name'=>'Inicio','icon'=>'home'],
    '/ddns'=>['name'=>'DNS Dinámico','icon'=>'cloud'],
    '/contacto'=>['name'=>'Contacto','icon'=>'envelope'],
]);

// Menú principal de la aplicación
\sowerphp\core\Configure::write('nav.app', [
    '/dashboard'=>['name'=>'Dashboard','icon'=>'dashboard'],
    '/bind10'=>['name'=>'Bind10','icon'=>'database','nav'=>[
        '/zonas'=>'Zonas',
        '/zonas/importar'=>'Importar zona',
    ]],
    '/sistema/'=>['name'=>'Sistema','icon'=>'cogs'],
]);

// Configuración para la base de datos
\sowerphp\core\Configure::write('database.default', array(
    'type' => 'SQLite',
    'file' => DIR_PROJECT.'/data/sqlite/default.sqlite3',
));
// Configuración para la base de datos
\sowerphp\core\Configure::write(
    'database.bind10',
    \sowerphp\core\Configure::read('database.default')
);

// Configuración para el correo electrónico
\sowerphp\core\Configure::write('email.default', [
    'type' => 'smtp',
    'host' => 'ssl://smtp.gmail.com',
    'port' => 465,
    'user' => '',
    'pass' => '',
    'to' => '',
]);

// Configuración para reCAPTCHA
/*\sowerphp\core\Configure::write('recaptcha', [
    'public_key' => '',
    'private_key' => '',
]);*/

// Configuración para auto registro de usuarios
\sowerphp\core\Configure::write('app.self_register', [
    'groups' => ['usuarios']
]);

// Módulos que utiliza el sitio web/aplicación
Module::uses ([
    'Bind10',
    'Multimedia',
]);

// Configuración para google adsense
/*\sowerphp\core\Configure::write('google.adsense', [
    'client'=>'',
    'slot'=>'',
]);*/
