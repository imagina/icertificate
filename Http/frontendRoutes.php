<?php

use Illuminate\Routing\Router;

$locale = LaravelLocalization::setLocale() ?: App::getLocale();

/** @var Router $router */
Route::prefix('icertificates')->middleware(['web'])->group(function (Router $router) use ($locale) {

  $router->get('lookup', [
    'as' => $locale . '.icertificates.lookup.form',
    'uses' => 'PublicController@lookupForm',
  ]);

  $router->post('lookup', [
    'as' => $locale . '.icertificates.lookup',
    'uses' => 'PublicController@lookupResults',
  ]);

  $router->get('{id}/download', [
    'as' => $locale . '.icertificates.download',
    'uses' => 'PublicController@download',
  ]);
});