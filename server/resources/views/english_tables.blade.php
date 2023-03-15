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

@php
    $namesHeader=[ 'Шапка'=> 'header/1/edit?_locale=en',
     'Выбор языка' => 'header-languages',
     'Страны' => 'country',
     'Города' => 'city',
     ];
     $namesSubHeader = [
     'Сабхедер' =>'subheader/1/edit?_locale=en',
     'Контент' => 'subheader-text-content/1/edit?_locale=en',
     'Заголовки' => 'subheader-titles',
     'Поля' => 'subheader-fields',
     'Список' => 'subheader-list'
     ];
     $namesBlockInfo = [
     'Блок с информацией' => 'text-info-block/1/edit?_locale=en',
     'Содержание' => 'text-info-block-content',
     'Список' => 'text-info-block-list'
     ];
     $namesBlockMap = [
     'Блок с картой' => 'map-info-block/3/edit?_locale=en',
     'Содержание' => 'map-info-block-content',
     'Кнопка (текст)' => 'map-info-block-button-text/1/edit?_locale=en',
     'Точки на карте' => 'map-point',
     'Координаты для точек на карте' => 'map-point-coordination',
      'Карточка с контеном' => 'map-info-block-card-content'

     ];
     $namesBlockList = [
     'Список преимуществ' => 'list-info-block/1/edit?_locale=en',
     'Элемент списка преимуществ' => 'list-info-block-element',
     'Содержание списка преимуществ' => 'list-info-block-element-list'
     ];
     $namesBlockContactForm = [
     'Форма обратной связи' => 'contact-form/1/edit?_locale=en',
     'Содержание' => 'contact-form-text-content',
     'Поля' => 'contact-form-field/1/edit?_locale=en',
     'Кнопка (текст)' => 'contact-form-button-text/1/edit?_locale=en'
     ];
     $namesBlockContact = [
     'Блок обратной связи' => 'contact-block',
     'Тип сообщения' => 'contact-block-message',
     'Другие методы коммуникации' => 'contact-block-communication-methods',
     'Заголовки' => 'contact-block-titles',
     'Телефон (DELETE)' => 'сontact-block-tel-communication'
     ];
     $namesBlockFooter = [
     'Футер' => 'footer',
     'Ссылки на маркетплейс' => 'footer-store-links'
     ];
@endphp

@section('content')
    {{-- Default box --}}

    <div
        style="display:flex; gap: 2em; justify-content: space-between; padding: 2em 4em 0em 3em; max-width: 100%; overflow-x: auto; border: 1px solid #7c69ef; border-radius: 10px ">

        <div>
            {{--Header--}}
            <h3>Header</h3>
            <div class="row">
                @foreach($namesHeader as $name => $url)
                    <div class="card m-1">
                        <div class="card-body" style="display: flex; align-items: center; justify-content: center;">
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
            <hr class="mb-4">
            {{--Subheader--}}
            <h3>Subheader</h3>
            <div class="row">
                @foreach($namesSubHeader as $name => $url)
                    <div class="card m-1">
                        <div class="card-body" style="display: flex; align-items: center; justify-content: center;">
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
            <hr class="mb-4">
            {{--Info block--}}
            <h3>Info block</h3>
            <div class="row">
                {{--Info block--}}
                @foreach($namesBlockInfo as $name => $url)
                    <div class="card m-1">
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
            <hr class="mb-4">
            {{--Map Info Block--}}
            <h3>Map Info Block</h3>
            <div class="row">
                @foreach($namesBlockMap as $name => $url)
                    <div class="card m-1">
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
            <hr class="mb-4">
            {{--List Info Block--}}
            <h3>List Info Block</h3>
            <div class="row">
                @foreach($namesBlockList as $name => $url)
                    <div class="card m-1">
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
            <hr class="mb-4">
            {{--Сontact Form--}}
            <h3>Сontact Form</h3>
            <div class="row">
                @foreach($namesBlockContactForm as $name => $url)
                    <div class="card m-1">
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
            <hr class="mb-4">
            {{--Communication methods--}}
            <h3>Communication methods</h3>
            <div class="row">
                @foreach($namesBlockContact as $name => $url)
                    <div class="card m-1">
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
            <hr class="mb-4">
            {{--Footer--}}
            <h3>Footer</h3>
            <div class="row">
                @foreach($namesBlockFooter as $name => $url)
                    <div class="card m-1">
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
