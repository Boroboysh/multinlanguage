@extends(backpack_view('blank'))

<div
    class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
            @auth
                <a href="{{ url('/home') }}"
                   class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
            @else
                <a href="{{ route('login') }}"
                   class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                    in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <h1>

    </h1>
</div>


@section('header')
    <div class="container-fluid" style="text-align: center; margin-bottom: 3em;">
        <h2>
            <span class="text-capitalize">English</span>
        </h2>
    </div>
@endsection

{{--edit?_locale=en?_locale=en--}}

<@php

    $namesHeader = [
        'Header' => 'header/1/edit?_locale=en',
        'Language selection' => 'header-languages',
        'Countries' => 'country',
         'Cities' => 'city',
        ];
    $namesSubHeader = [
        'Subheader' =>'subheader/1/edit?_locale=en',
        'Content' => 'subheader-text-content/1/edit?_locale=en',
        'Titles' => 'subheader-titles',
        'Fields' => 'subheader-fields',
        'List' => 'subheader-list'
        ];
    $namesBlockInfo = [
        'Info block' => 'text-info-block/1/edit?_locale=en',
        'Content' => 'text-info-block-content',
        'List' => 'text-info-block-list'
        ];
    $namesBlockMap = [
         'Map block' => 'map-info-block/1/edit?_locale=en',
         'Content' => 'map-info-block-content',
         'Button (text)' => 'map-info-block-button-text/1/edit?_locale=en',
         'Points on map' => 'map-point',
         'Coordinates for points on the map' => 'map-point-coordination'
         ];
    $namesBlockList = [
        'List of advantages' => 'list-info-block/1/edit?_locale=en',
        'List Item' => 'list-info-block-element',
        'The content of the element' => 'list-info-block-element-list'
         ];
    $namesBlockContactForm = [
        'Feedback form' => 'contact-form/1/edit?_locale=en',
        'Content' => 'contact-form-text-content',
        'Fields' => 'contact-form-field/1/edit?_locale=en',
        'Button (text)' => 'contact-form-button-text/1/edit?_locale=en'
          ];
    $namesBlockContact = [
        'Feedback Block' => 'contact-block',
        'Message Types' => 'contact-block-message',
        'Other communication methods' => 'contact-block-communication-methods',
        'Headings' => 'contact-block-titles',
        'Telephone' => 'сontact-block-tel-communication'
         ];
    $namesBlockFooter = [
        'Footer' => 'footer',
        'Links to the marketplace' => 'footer-store-links'
     ];

@endphp

@section('content')
    {{-- Default box --}}
    <div
        style="display:flex; gap: 2em; justify-content: space-between; padding: 0em 4em 0em 3em; max-width: 100%; overflow-x: auto ">
        {{--Header--}}
        <div>
            @foreach($namesHeader as $name => $url)
                <div class="card bg-light mb-3" style="width: 13rem; height: 10rem">
                    <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                        <div class="nav-item"><a class="nav-link" href="{{ backpack_url($url) }}">
                                <h4 class="card-text" style="text-align: center">
                                    {{ $name }}
                                </h4>
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
        {{--Subheader--}}
        <div>
            @foreach($namesSubHeader as $name => $url)
                <div class="card bg-light mb-3" style="width: 13rem; height: 10rem">
                    <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                        <div class="nav-item"><a class="nav-link" href="{{ backpack_url($url) }}">
                                <h4 class="card-text" style="text-align: center">
                                    {{ $name }}
                                </h4>
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
        {{--Info block--}}
        <div>
            {{--Info block--}}
            @foreach($namesBlockInfo as $name => $url)
                <div class="card bg-light mb-3" style="width: 13rem; height: 10rem">
                    <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                        <div class="nav-item"><a class="nav-link" href="{{ backpack_url($url) }}">
                                <h4 class="card-text" style="text-align: center">
                                    {{ $name }}
                                </h4>
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
        {{--Map Info Block--}}
        <div>
            @foreach($namesBlockMap as $name => $url)
                <div class="card bg-light mb-3" style="width: 13rem; height: 10rem">
                    <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                        <div class="nav-item"><a class="nav-link" href="{{ backpack_url($url) }}">
                                <h4 class="card-text" style="text-align: center">
                                    {{ $name }}
                                </h4>
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>
        {{--List Info Block--}}
        <div>
            @foreach($namesBlockList as $name => $url)
                <div class="card bg-light mb-3" style="width: 13rem; height: 10rem">
                    <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                        <div class="nav-item"><a class="nav-link" href="{{ backpack_url($url) }}">
                                <h4 class="card-text" style="text-align: center">
                                    {{ $name }}
                                </h4>
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
        {{--Сontact Form--}}
        <div>
            @foreach($namesBlockContactForm as $name => $url)
                <div class="card bg-light mb-3" style="width: 13rem; height: 10rem">
                    <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                        <div class="nav-item"><a class="nav-link" href="{{ backpack_url($url) }}">
                                <h4 class="card-text" style="text-align: center">
                                    {{ $name }}
                                </h4>
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
        {{--Communication methods--}}
        <div>
            @foreach($namesBlockContact as $name => $url)
                <div class="card bg-light mb-3" style="width: 13rem; height: 10rem">
                    <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                        <div class="nav-item"><a class="nav-link" href="{{ backpack_url($url) }}">
                                <h4 class="card-text" style="text-align: center">
                                    {{ $name }}
                                </h4>
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
        {{--Footer--}}
        <div>
            @foreach($namesBlockFooter as $name => $url)
                <div class="card bg-light mb-3" style="width: 13rem; height: 10rem">
                    <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                        <div class="nav-item"><a class="nav-link" href="{{ backpack_url($url) }}">
                                <h4 class="card-text" style="text-align: center">
                                    {{ $name }}
                                </h4>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('after_styles')
    {{-- DATA TABLES --}}
    {{-- CRUD LIST CONTENT - crud_list_styles stack --}}
    @stack('crud_list_styles')
@endsection

@section('after_scripts')
    @include('crud::inc.datatables_logic')

    {{-- CRUD LIST CONTENT - crud_list_scripts stack --}}
    @stack('crud_list_scripts')
@endsection


