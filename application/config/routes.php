<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*served routes:
		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'logincontroller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['categoria'] = 'categoriacontroller/index';
$route['categoria/salvar'] = 'categoriacontroller/salvar';
$route['categoria/novo'] = 'categoriacontroller/novo';
$route['categoria/editar/(:num)']= 'categoriacontroller/editar/$1';
$route['categoria/atualizar/(:num)'] = 'categoriacontroller/atualizar/$1';
$route['categoria/abrir/(:num)'] = 'categoriacontroller/abrir/$1';
$route['categoria/excluir/(:num)'] = 'categoriacontroller/excluir/$1';


$route['cardapio'] = 'cardapiocontroller/index';
$route['cardapio/salvar'] = 'cardapiocontroller/salvar';
$route['cardapio/novo'] = 'cardapiocontroller/novo';
$route['cardapio/editar/(:num)']= 'cardapiocontroller/editar/$1';
$route['cardapio/atualizar/(:num)'] = 'cardapiocontroller/atualizar/$1';
$route['cardapio/abrir/(:num)'] = 'cardapiocontroller/abrir/$1';
$route['cardapio/excluir/(:num)'] = 'cardapiocontroller/excluir/$1';
$route['cardapio/json'] = 'cardapiocontroller/json';


$route['mesa'] = 'mesacontroller/index';
$route['mesa/salvar'] = 'mesacontroller/salvar';
$route['mesa/novo'] = 'mesacontroller/novo';
$route['mesa/editar/(:num)']= 'mesacontroller/editar/$1';
$route['mesa/atualizar/(:num)'] = 'mesacontroller/atualizar/$1';
$route['mesa/abrir/(:num)'] = 'mesacontroller/abrir/$1';
$route['mesa/excluir/(:num)'] = 'mesacontroller/excluir/$1';


$route['garcon'] = 'garconcontroller/index';
$route['garcon/salvar'] = 'garconcontroller/salvar';
$route['garcon/novo'] = 'garconcontroller/novo';
$route['garcon/editar/(:num)']= 'garconcontroller/editar/$1';
$route['garcon/atualizar/(:num)'] = 'garconcontroller/atualizar/$1';
$route['garcon/abrir/(:num)'] = 'garconcontroller/abrir/$1';
$route['garcon/excluir/(:num)'] = 'garconcontroller/excluir/$1';


$route['login'] = 'logincontroller/index';
$route['login/verificar'] = 'logincontroller/verificar';
$route['login/logout'] = 'logincontroller/logout';

