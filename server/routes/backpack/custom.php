<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('header', 'HeaderCrudController');
    Route::crud('subheader', 'SubheaderCrudController');
    Route::crud('subheader-fields', 'SubheaderFieldsCrudController');
    Route::crud('subheader-list', 'SubheaderListCrudController');
    Route::crud('subheader-text-content', 'SubheaderTextContentCrudController');
    Route::crud('subheader-titles', 'SubheaderTitlesCrudController');
    Route::crud('text-info-block', 'TextInfoBlockCrudController');
    Route::crud('text-info-block-content', 'TextInfoBlockContentCrudController');
    Route::crud('text-info-block-list', 'TextInfoBlockListCrudController');
    Route::crud('map-info-block', 'MapInfoBlockCrudController');
    Route::crud('map-info-block-content', 'MapInfoBlockContentCrudController');
    Route::crud('map-info-block-button-text', 'MapInfoBlockButtonTextCrudController');
    Route::crud('list-info-block', 'ListInfoBlockCrudController');
    Route::crud('list-info-block-element', 'ListInfoBlockElementCrudController');
    Route::crud('list-info-block-element-list', 'ListInfoBlockElementListCrudController');
    Route::crud('footer', 'FooterCrudController');
    Route::crud('footer-field', 'FooterFieldCrudController');
    Route::crud('footer-button-text', 'FooterButtonTextCrudController');
    Route::crud('footer-text-content', 'FooterTextContentCrudController');
//    Route::crud('russian-tables', );
    Route::crud('russian-tables', 'RussianTablesCrudController');
    Route::crud('english-tables', 'EnglishTablesCrudController');
    Route::crud('kazakh-tables', 'KazakhTablesCrudController');
    Route::crud('city', 'CityCrudController');
}); // this should be the absolute last line of this file