@extends('layouts.main')

    @section('container')
    <h1>About Page</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="david" width="200">
    @endsection