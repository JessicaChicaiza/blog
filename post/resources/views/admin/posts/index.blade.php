@extends('adminlte::page')

@section('title', 'SYSOFPETS')

@section('content_header')
    <h1>Listado de Post</h1>
@stop

@section('content')
    @livewire('admin.posts-index')
@stop

