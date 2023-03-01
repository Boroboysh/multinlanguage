{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<p>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i
                class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
</p>

<p>
    <a class="btn btn-ghost-secondary" data-toggle="collapse" href="#header" role="button" aria-expanded="false"
       aria-controls="header">
        <i class="nav-icon la la-info-circle"></i> Header
    </a>
</p>
<div class="row">
    <div class="col">
        <div class="collapse multi-collapse" id="header">
            <div class="card card-body">
                <li class="nav-item"><a class="nav-link" href="{{ backpack_url('header') }}">Headers</a></li>
            </div>
        </div>
    </div>
</div>

<p>
    <a class="btn btn-ghost-secondary" data-toggle="collapse" href="#subheader" role="button" aria-expanded="false"
       aria-controls="subheader">
        <i class="nav-icon la la-info-circle"></i> Subheader
    </a>
</p>
<div class="row">
    <div class="col">
        <div class="collapse multi-collapse" id="subheader">
            <div class="card card-body">
                <li class="nav-item"><a class="nav-link" href="{{ backpack_url('subheader') }}">Subheaders</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ backpack_url('subheader-titles') }}">Titles</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ backpack_url('subheader-fields') }}">Fields</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ backpack_url('subheader-text-content') }}">Text Contents</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ backpack_url('subheader-list') }}">Lists</a></li>
            </div>
        </div>
    </div>
</div>

<p>
    <a class="btn btn-ghost-secondary" data-toggle="collapse" href="#text_info_block" role="button"
       aria-expanded="false" aria-controls="text_info_block">
        <i class="nav-icon la la-info-circle"></i> Text Info Block
    </a>
</p>
<div class="row">
    <div class="col">
        <div class="collapse multi-collapse" id="text_info_block">
            <div class="card card-body">
                <li class="nav-item"><a class="nav-link" href="{{ backpack_url('text-info-block') }}">Info blocks</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ backpack_url('text-info-block-content') }}">Info block contents</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ backpack_url('text-info-block-list') }}">Info block lists</a></li>
            </div>
        </div>
    </div>
</div>

<p>
    <a class="btn btn-ghost-secondary" data-toggle="collapse" href="#map_info_block" role="button" aria-expanded="false"
       aria-controls="map_info_block">
        <i class="nav-icon la la-info-circle"></i> Map Info Block
    </a>
</p>
<div class="row">
    <div class="col">
        <div class="collapse multi-collapse" id="map_info_block">
            <div class="card card-body">
                <li class="nav-item"><a class="nav-link" href="{{ backpack_url('map-info-block') }}"> Info blocks</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ backpack_url('map-info-block-content') }}"> Info block contents</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ backpack_url('map-info-block-button-text') }}"> Info block buttons (text)</a></li>
            </div>
        </div>
    </div>
</div>

<p>
    <a class="btn btn-ghost-secondary" data-toggle="collapse" href="#list_info_block" role="button"
       aria-expanded="false" aria-controls="list_info_block">
        <i class="nav-icon la la-info-circle"></i> List Info Block
    </a>
</p>
<div class="row">
    <div class="col">
        <div class="collapse multi-collapse" id="list_info_block">
            <div class="card card-body">
                <li class="nav-item"><a class="nav-link" href="{{ backpack_url('list-info-block') }}"> Info blocks</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ backpack_url('list-info-block-element') }}">Info block elements</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ backpack_url('list-info-block-element-list') }}"> Info block element lists</a></li>
            </div>
        </div>
    </div>
</div>

<p>
    <a class="btn btn-ghost-secondary" data-toggle="collapse" href="#footer" role="button" aria-expanded="false"
       aria-controls="footer">
        <i class="nav-icon la la-info-circle"></i> Footer
    </a>
</p>
<div class="row">
    <div class="col">
        <div class="collapse multi-collapse" id="footer">
            <div class="card card-body">
                <li class="nav-item"><a class="nav-link" href="{{ backpack_url('footer') }}"> Footers </a></li>
                <li class="nav-item"><a class="nav-link" href="{{ backpack_url('footer-field') }}"> Fields</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ backpack_url('footer-button-text') }}"> Buttons (text)</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ backpack_url('footer-text-content') }}"> Text contents</a></li>
            </div>
        </div>
    </div>
</div>




