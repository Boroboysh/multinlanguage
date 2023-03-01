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
    <div class="container-fluid">
        <h2>
            <span class="text-capitalize">Русский</span>
        </h2>
    </div>
@endsection

@section('content')
    {{-- Default box --}}
    <div class="row">
        <div class="nav-item"><a class="nav-link" href="{{ backpack_url('header/1/edit') }}">Headers</a></div>
        <div class="nav-item"><a class="nav-link" href="{{ backpack_url('subheader') }}">Subheaders</a></div>
        <div class="nav-item"><a class="nav-link" href="{{ backpack_url('subheader-titles') }}">Titles</a></div>
        <div class="nav-item"><a class="nav-link" href="{{ backpack_url('subheader-fields') }}">Fields</a></div>
        <div class="nav-item"><a class="nav-link" href="{{ backpack_url('subheader-text-content') }}">Text Contents</a></div>
        <div class="nav-item"><a class="nav-link" href="{{ backpack_url('subheader-list') }}">Lists</a></div>
        <div class="nav-item"><a class="nav-link" href="{{ backpack_url('text-info-block') }}">Info blocks</a></div>
        <div class="nav-item"><a class="nav-link" href="{{ backpack_url('text-info-block-content') }}">Info block contents</a></div>
        <div class="nav-item"><a class="nav-link" href="{{ backpack_url('text-info-block-list') }}">Info block lists</a></div>
        <div class="nav-item"><a class="nav-link" href="{{ backpack_url('map-info-block') }}"> Info blocks</a></div>
        <div class="nav-item"><a class="nav-link" href="{{ backpack_url('map-info-block-content') }}"> Info block contents</a></div>
        <div class="nav-item"><a class="nav-link" href="{{ backpack_url('map-info-block-button-text') }}"> Info block buttons (text)</a></div>
        <div class="nav-item"><a class="nav-link" href="{{ backpack_url('list-info-block') }}"> Info blocks</a></div>
        <div class="nav-item"><a class="nav-link" href="{{ backpack_url('list-info-block-element') }}">Info block elements</a></div>
        <div class="nav-item"><a class="nav-link" href="{{ backpack_url('list-info-block-element-list') }}"> Info block element lists</a></div>
        <div class="nav-item"><a class="nav-link" href="{{ backpack_url('footer') }}"> Footers </a></div>
        <div class="nav-item"><a class="nav-link" href="{{ backpack_url('footer-field') }}"> Fields</a></div>
        <div class="nav-item"><a class="nav-link" href="{{ backpack_url('footer-button-text') }}"> Buttons (text)</a></div>
        <div class="nav-item"><a class="nav-link" href="{{ backpack_url('footer-text-content') }}"> Text contents</a></div>

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


