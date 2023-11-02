<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'TodosController::getTodos');
$routes->post('create-todo', 'TodosController::createTodo');
$routes->get('done-todo/(:any)', 'TodosController::doneTodo/$1');
$routes->get('restore-todo/(:any)', 'TodosController::restoreTodo/$1');
$routes->get('delete-todo/(:any)', 'TodosController::deleteTodo/$1');
$routes->get('edit-todo/(:any)', 'TodosController::toEdit/$1');
$routes->post('update-todo/(:any)', 'TodosController::updateTodo/$1');
