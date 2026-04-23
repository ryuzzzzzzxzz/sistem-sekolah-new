<?php
require_once '../app/core/Router.php';

use App\Core\Router;

$router = new Router();

// Register Routes
$router->add('GET', '/students', 'StudentController', 'index');
$router->add('GET', '/students/create', 'StudentController', 'create');
$router->add('GET', '/students/{id}', 'StudentController', 'show');
$router->add('GET', '/students/{id}/edit', 'StudentController', 'edit');

// untuk menambakan data siswa baru
$router->add('POST', '/students', 'StudentController', 'store');

//untuk mengedit data siswa
$router->add('PUT', '/students/{id}', 'StudentController', 'update');

//untuk menghapus data siswa
$router->add('DELETE', '/students/{id}', 'StudentController', 'destroy');


$router->run();

?>