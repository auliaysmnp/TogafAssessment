@extends('layouts.main')

@section('container')
    <h1>This is the home page
    @auth
    {{ auth()->user()->name }}</h1>
    @endauth
@endsection
