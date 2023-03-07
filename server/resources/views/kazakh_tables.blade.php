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
            <span class="text-capitalize">Қазақша</span>
        </h2>
    </div>
@endsection

<@php

    $namesHeader = [
        'Тақырып' => 'header/1/edit?_locale=kk',
        'Тілді таңдау' => 'header-languages',
        'Елдер' => 'country',
         'Қалалар' => 'city',
        ];
    $namesSubHeader = [
        'Субтитр' =>'subheader/1/edit?_locale=kk',
        'Мазмұны' => 'subheader-text-content/1/edit?_locale=kk',
        'Атаулар' => 'subheader-titles',
        'Өрістер' => 'subheader-fields',
        'Тізім' => 'subheader-list'
        ];
    $namesBlockInfo = [
        'Ақпараттық блок' => 'text-info-block/1/edit?_locale=kk',
        'Мазмұны' => 'text-info-block-content',
        'Тізім' => 'text-info-block-list'
        ];
    $namesBlockMap = [
         'Карта блогы' => 'map-info-block/1/edit?_locale=kk',
         'Мазмұны' => 'map-info-block-content',
         'Түйме (мәтін)' => 'map-info-block-button-text/1/edit?_locale=kk',
         'Картадағы нүктелер' => 'map-point',
         'Картадағы нүктелердің координаттары' => 'map-point-coordination'
         ];
    $namesBlockList = [
        'Артықшылықтар тізімі' => 'list-info-block/1/edit?_locale=kk',
        'Тізім элементі' => 'list-info-block-element',
        'Элементтің мазмұны' => 'list-info-block-element-list'
         ];
    $namesBlockContactForm = [
        'Кері байланыс нысаны' => 'contact-form/1/edit?_locale=kk',
        'Мазмұны' => 'contact-form-text-content',
        'Өрістер' => 'contact-form-field/1/edit?_locale=kk',
        'Түйме (мәтін)' => 'contact-form-button-text/1/edit?_locale=kk'
          ];
    $namesBlockContact = [
        'Кері байланыс блогы' => 'contact-block',
        'Хабарлама түрлері' => 'contact-block-message',
        'Байланыстың басқа жолдары' => 'contact-block-communication-methods',
        'Атаулар' => 'contact-block-titles',

         ];
    $namesBlockFooter = [
        'Төменгі деректеме' => 'footer/1/edit_locale=kk',
        'Базарға сілтемелер' => 'footer-store-links'
     ];

@endphp

@section('content')
    {{-- Default box --}}
    <div
        style="display:flex; gap: 2em; justify-content: space-between; padding: 2em 4em 0em 3em; max-width: 100%; overflow-x: auto; border: 1px solid #7c69ef; border-radius: 10px ">
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


