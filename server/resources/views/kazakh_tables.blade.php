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


@section('content')
    {{-- Default box --}}
    <div class="row" style="display:flex; justify-content: space-between; padding: 0em 4em 0em 3em">
        {{--Header--}}
        <div>
            <div class="card bg-light mb-3" style="width: 13rem; height: 10rem">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('header/1/edit?_locale=kk') }}">
                            <h4 class="card-text">
                                Бас киім
                            </h4>
                        </a>
                    </div>

                </div>
            </div>
            <div class="card bg-light mb-3" style="width: 13rem; height: 10rem">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('city') }}">
                            <h4 class="card-text">
                                Қалалар
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
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('subheader/1/edit?_locale=kk') }}">
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
                                             href="{{ backpack_url('subheader-text-content/1/edit?_locale=kk') }}">
                            <h4 class="card-text">
                                Мазмұны
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
            {{--Subheader titles--}}
            <div class="card bg-light mb-3" style="width: 13rem; height: 10rem">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('subheader-titles/1/edit?_locale=kk') }}">
                            <h4 class="card-text">
                                Тақырыптар
                            </h4>
                        </a>
                    </div>

                </div>
            </div>
            {{--Subheader fields--}}
            <div class="card bg-light mb-3" style="width: 13rem; height: 10rem">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('subheader-fields/1/edit?_locale=kk') }}">
                            <h4 class="card-text">
                                Өрістер
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
            {{--Subheader lists--}}
            <div class="card bg-light mb-3" style="width: 13rem; height: 10em;">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('subheader-list/1/edit?_locale=kk') }}">
                            <h4 class="card-text">
                                Тізім
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
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('text-info-block/1/edit?_locale=kk') }}">
                            <h4 class="card-text" style="text-align: center">
                               Ақпарат блогы
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
            {{--Content Info Block--}}
            <div class="card bg-light mb-3" style="width: 13rem; height: 10em;">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link"
                                             href="{{ backpack_url('text-info-block-content/1/edit?_locale=kk') }}">
                            <h4 class="card-text">
                                Мазмұны
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
            {{--Lists Info Block--}}
            <div class="card bg-light mb-3" style="width: 13rem; height: 10em;">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('text-info-block-list/1/edit?_locale=kk') }}">
                            <h4 class="card-text">
                                Тізімдер
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
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('map-info-block/1/edit?_locale=kk') }}">
                            <h4 class="card-text" style="text-align: center">
                                Карта блогы
                            </h4>
                        </a>
                    </div>
                </div>
            </div>


            <div class="card bg-light mb-3" style="width: 13rem; height: 10em;">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link"
                                             href="{{ backpack_url('map-info-block-content/1/edit?_locale=kk') }}">
                            <h4 class="card-text">
                                Мазмұны
                            </h4>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card bg-light mb-3" style="width: 13rem; height: 10em;">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link"
                                             href="{{ backpack_url('map-info-block-button-text/1/edit?_locale=kk') }}">
                            <h4 class="card-text" style="text-align: center">
                                Түймелер (мәтін)
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
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('list-info-block/1/edit?_locale=kk') }}">
                            <h4 class="card-text" style="text-align: center">
                                Артықшылықтар тізімі
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
            {{--List Info Block Element--}}
            <div class="card bg-light mb-3" style="width: 13rem; height: 10em;">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link"
                                             href="{{ backpack_url('list-info-block-element/1/edit?_locale=kk') }}">
                            <h4 class="card-text" style="text-align: center">
                                Тізім элементі
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
            {{--List Info Block Element List--}}
            <div class="card bg-light mb-3" style="width: 13rem; height: 10em;">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link"
                                             href="{{ backpack_url('list-info-block-element-list/1/edit?_locale=kk') }}">
                            <h4 class="card-text" style="text-align: center">
                                Элемент мазмұны
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{--Footer--}}
        <div>
            {{--Footer--}}
            <div class="card bg-light mb-3" style="width: 13rem; height: 10em;">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('footer/1/edit?_locale=kk') }}">
                            <h4 class="card-text">
                                Футер
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
            {{--Footer Text Content--}}
            <div class="card bg-light mb-3" style="width: 13rem; height: 10em;">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('footer-text-content/1/edit?_locale=kk') }}">
                            <h4 class="card-text">
                                Мазмұны
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
            {{--Footer Fields--}}
            <div class="card bg-light mb-3" style="width: 13rem; height: 10em;">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('footer-field/1/edit?_locale=kk') }}">
                            <h4 class="card-text">
                                Өрістер
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
            {{--Footer Button Text--}}
            <div class="card bg-light mb-3" style="width: 13rem; height: 10em;">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center">
                    <div class="nav-item"><a class="nav-link" href="{{ backpack_url('footer-button-text/1/edit?_locale=kk') }}">
                            <h4 class="card-text" style="text-align: center">
                                Түймелер (мәтін)
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


