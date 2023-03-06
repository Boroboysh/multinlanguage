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

@section('content')
    {{-- Default box --}}
    <div style="display:flex; gap: 2em; justify-content: space-between; padding: 0em 4em 0em 3em; max-width: 100%; overflow-x: auto ">
        {{--Header--}}
        <div>
            <div class="card bg-light mb-3" style="width: 13rem; height: 10rem">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('header/1/edit?_locale=en') }}">
                            <h4 class="card-text">
                                Шапка
                            </h4>
                        </a>
                    </div>

                </div>
            </div>

            <div class="card bg-light mb-3" style="width: 13rem; height: 10rem">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('header-languages') }}">
                            <h4 class="card-text" style="text-align: center">
                                Выбор языка
                            </h4>
                        </a>
                    </div>

                </div>
            </div>

            <div class="card bg-light mb-3" style="width: 13rem; height: 10rem">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('country') }}">
                            <h4 class="card-text">
                                Страны
                            </h4>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card bg-light mb-3" style="width: 13rem; height: 10rem">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('city') }}">
                            <h4 class="card-text">
                                Города
                            </h4>
                        </a>
                    </div>
                </div>
            </div>


        </div>
        {{--Subheader--}}
        <div>
            {{--Subheader--}}
            <div class="card bg-light mb-3" style="width: 13rem; height: 10rem">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('subheader/1/edit?_locale=en') }}">
                            <h4 class="card-text">
                                Сабхедер
                            </h4>
                        </a>
                    </div>

                </div>
            </div>
            {{--Subheader text content--}}
            <div class="card bg-light mb-3" style="width: 13rem; height: 10em;">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link"
                                             href="{{ backpack_url('subheader-text-content/1/edit?_locale=en') }}">
                            <h4 class="card-text">
                                Содержание
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
            {{--Subheader titles--}}
            <div class="card bg-light mb-3" style="width: 13rem; height: 10rem">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('subheader-titles') }}">
                            <h4 class="card-text">
                                Заголовки
                            </h4>
                        </a>
                    </div>

                </div>
            </div>
            {{--Subheader fields--}}
            <div class="card bg-light mb-3" style="width: 13rem; height: 10rem">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('subheader-fields') }}">
                            <h4 class="card-text">
                                Поля
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
            {{--Subheader lists--}}
            <div class="card bg-light mb-3" style="width: 13rem; height: 10em;">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('subheader-list') }}">
                            <h4 class="card-text">
                                Список
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{--Info block--}}
        <div>
            {{--Info block--}}
            <div class="card bg-light mb-3" style="width: 13rem; height: 10em;">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('text-info-block/1/edit?_locale=en') }}">
                            <h4 class="card-text" style="text-align: center">
                                Блок с информацией
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
            {{--Content Info Block--}}
            <div class="card bg-light mb-3" style="width: 13rem; height: 10em;">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link"
                                             href="{{ backpack_url('text-info-block-content') }}">
                            <h4 class="card-text">
                                Содержание
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
            {{--Lists Info Block--}}
            <div class="card bg-light mb-3" style="width: 13rem; height: 10em;">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('text-info-block-list') }}">
                            <h4 class="card-text">
                                Списки
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{--Map Info Block--}}
        <div>
            <div class="card bg-light mb-3" style="width: 13rem; height: 10em;">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('map-info-block/1/edit?_locale=en') }}">
                            <h4 class="card-text" style="text-align: center">
                                Блок с картой
                            </h4>
                        </a>
                    </div>
                </div>
            </div>


            <div class="card bg-light mb-3" style="width: 13rem; height: 10em;">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link"
                                             href="{{ backpack_url('map-info-block-content') }}">
                            <h4 class="card-text">
                                Содержание
                            </h4>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card bg-light mb-3" style="width: 13rem; height: 10em;">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link"
                                             href="{{ backpack_url('map-info-block-button-text/1/edit?_locale=en') }}">
                            <h4 class="card-text" style="text-align: center">
                                Кнопка (текст)
                            </h4>
                        </a>
                    </div>
                </div>
            </div>

            {{--Map point--}}

            <div class="card bg-light mb-3" style="width: 13rem; height: 10em;">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link"
                                             href="{{ backpack_url('map-point') }}">
                            <h4 class="card-text" style="text-align: center">
                                Точки на карте
                            </h4>
                        </a>
                    </div>
                </div>
            </div>

            {{--Map point coordination--}}

            <div class="card bg-light mb-3" style="width: 13rem; height: 10em;">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link"
                                             href="{{ backpack_url('map-point-coordination') }}">
                            <h4 class="card-text" style="text-align: center">
                                Координаты для точек на карте
                            </h4>
                        </a>
                    </div>
                </div>
            </div>


        </div>
        {{--List Info Block--}}
        <div>
            {{--List Info Block--}}
            <div class="card bg-light mb-3" style="width: 13rem; height: 10em;">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('list-info-block/1/edit?_locale=en') }}">
                            <h4 class="card-text" style="text-align: center">
                                Список преимуществ
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
            {{--List Info Block Element--}}
            <div class="card bg-light mb-3" style="width: 13rem; height: 10em;">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link"
                                             href="{{ backpack_url('list-info-block-element') }}">
                            <h4 class="card-text" style="text-align: center">
                                Элемент списка
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
            {{--List Info Block Element List--}}
            <div class="card bg-light mb-3" style="width: 13rem; height: 10em;">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link"
                                             href="{{ backpack_url('list-info-block-element-list') }}">
                            <h4 class="card-text" style="text-align: center">
                                Содержание элемента
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{--Сontact Form--}}
        <div>
            {{--Footer--}}
            <div class="card bg-light mb-3" style="width: 13rem; height: 10em;">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('contact-form/1/edit?_locale=en') }}">
                            <h4 class="card-text" style="text-align: center">
                                Форма обратной связи
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
            {{--Footer Text Content--}}
            <div class="card bg-light mb-3" style="width: 13rem; height: 10em;">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('contact-form-text-content') }}">
                            <h4 class="card-text">
                                Содержание
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
            {{--Footer Fields--}}
            <div class="card bg-light mb-3" style="width: 13rem; height: 10em;">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('contact-form-field/1/edit?_locale=en') }}">
                            <h4 class="card-text">
                                Поля
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
            {{--Footer Button Text--}}
            <div class="card bg-light mb-3" style="width: 13rem; height: 10em;">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('contact-form-button-text/1/edit?_locale=en') }}">
                            <h4 class="card-text" style="text-align: center">
                                Кнопка (текст)
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{--Communication methods--}}
        <div>
            <div class="card bg-light mb-3" style="width: 13rem; height: 10em;">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('contact-block') }}">
                            <h4 class="card-text" style="text-align: center">
                                Блок обратной связи
                            </h4>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card bg-light mb-3" style="width: 13rem; height: 10em;">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('contact-block-message') }}">
                            <h4 class="card-text" style="text-align: center">
                                Типы сообщения
                            </h4>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card bg-light mb-3" style="width: 13rem; height: 10em;">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('contact-block-communication-methods') }}">
                            <h4 class="card-text" style="text-align: center">
                                Другие способы связи
                            </h4>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card bg-light mb-3" style="width: 13rem; height: 10em;">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('contact-block-titles') }}">
                            <h4 class="card-text" style="text-align: center">
                                Заголовки
                            </h4>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card bg-light mb-3" style="width: 13rem; height: 10em;">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('сontact-block-tel-communication') }}">
                            <h4 class="card-text" style="text-align: center">
                                Телефон
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="card bg-light mb-3" style="width: 13rem; height: 10em;">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('footer') }}">
                            <h4 class="card-text" style="text-align: center">
                                Футер
                            </h4>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card bg-light mb-3" style="width: 13rem; height: 10em;">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('footer-store-links') }}">
                            <h4 class="card-text" style="text-align: center">
                                Ссылки на маркетплайс
                            </h4>
                        </a>
                    </div>
                </div>
            </div>

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


