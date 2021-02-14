@extends('adminlte::page')

@section('title', 'SYSOFPETS')

@section('content_header')
<a class="btn btn-secondary btn-sm float-right" href="{{route('admin.posts.create')}}">Nuevo Posts</a>
    <h1>Listado de post</h1>
@stop

@section('content')
    @livewire('admin.posts-index')
@stop

