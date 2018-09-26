<?php

/*
  This file is part of SeAT

  Copyright (C) 2015, 2017  Leon Jacobs

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License along
  with this program; if not, write to the Free Software Foundation, Inc.,
  51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 */

// Namespace all of the routes for this package.
Route::group([
    'namespace' => 'HullSoft\Seat\PingOps\Http\Controllers',
    'middleware' => 'web'
        ], function () {

    // Your route definitions go here.
    Route::get('/pingops', [
        'as' => 'pingops.index',
        'uses' => 'HomeController@getHome',
        'middleware' => 'bouncer:pingops.setup'
    ]);
    Route::post('/pingops/add', [
        'as' => 'pingops.add',
        'uses' => 'HomeController@addNew',
        'middleware' => 'bouncer:pingops.setup'
    ]);
    Route::get('/pingops/delete/{id}', [
        'as' => 'pingops.delete',
        'uses' => 'HomeController@delete',
        'middleware' => 'bouncer:pingops.setup'
    ]);
    Route::get('/pingops/edit/{id}', [
        'as' => 'pingops.edit',
        'uses' => 'HomeController@edit',
        'middleware' => 'bouncer:pingops.setup'
    ]);
    Route::post('/pingops/save/', [
        'as' => 'pingops.save',
        'uses' => 'HomeController@savePing',
        'middleware' => 'bouncer:pingops.setup'
    ]);
    Route::get('/pingops/enabled/{id}', [
        'as' => 'pingops.enabled',
        'uses' => 'HomeController@enabled',
        'middleware' => 'bouncer:pingops.setup'
    ]);
    Route::get('/pingops/disabled/{id}', [
        'as' => 'pingops.disabled',
        'uses' => 'HomeController@disabled',
        'middleware' => 'bouncer:pingops.setup'
    ]);
    Route::get('/pingops/update-bot', [
        'as' => 'pingops.update.bot',
        'uses' => 'HomeController@updateBot',
        'middleware' => 'bouncer:pingops.setup'
    ]);
});
