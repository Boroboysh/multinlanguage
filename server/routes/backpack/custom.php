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
        (array) config('backpack.base.middleware_key', 'admin'),
        (array)\App\Http\Middleware\Language::class
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
    Route::crud('contact-form', 'ContactFormCrudController');
    Route::crud('contact-form-field', 'ContactFormFieldCrudController');
    Route::crud('contact-form-button-text', 'ContactFormButtonTextCrudController');
    Route::crud('contact-form-text-content', 'ContactFormTextContentCrudController');
//    Route::crud('russian-tables', );
    Route::crud('russian-tables', 'RussianTablesCrudController');
    Route::crud('english-tables', 'EnglishTablesCrudController');
    Route::crud('kazakh-tables', 'KazakhTablesCrudController');
    Route::crud('city', 'CityCrudController');
    Route::crud('country', 'CountryCrudController');
    Route::crud('communication-methods', 'CommunicationMethodsCrudController');
    Route::crud('map-point', 'MapPointCrudController');
    Route::crud('map-point-coordination', 'MapPointCoordinationCrudController');
    Route::crud('header-languages', 'HeaderLanguagesCrudController');
    Route::crud('contact-block', 'ContactBlockCrudController');
    Route::crud('contact-block-message', 'ContactBlockMessageCrudController');
    Route::crud('contact-block-communication-methods', 'ContactBlockCommunicationMethodsCrudController');
    Route::crud('contact-block-titles', 'ContactBlockTitlesCrudController');
    Route::crud('contact-block-tel-communication', 'ContactBlockTelCommunicationCrudController');
    Route::crud('footer', 'FooterCrudController');
    Route::crud('footer-store-links', 'FooterStoreLinksCrudController');
    Route::crud('map-info-block-card-content', 'MapInfoBlockCardContentCrudController');
    Route::crud('header-logo-list', 'HeaderLogoListCrudController');
    Route::crud('cities-block', 'CitiesBlockCrudController');
}); // this should be the absolute last line of this file