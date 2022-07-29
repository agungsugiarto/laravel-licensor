<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => [
    'throttle:' . config('licensor.request_throttle')]], function () {

    Route::post(
        config('licensor.key_verification_path'),
        'Fluent\Licensor\Http\Controllers\KeyRequestController@check')
        ->name('licensor.key.check');

    Route::post(
        config('licensor.key_activation_path'),
        'Fluent\Licensor\Http\Controllers\KeyRequestController@activate')
        ->name('licensor.key.activate');
});
