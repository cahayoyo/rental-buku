@extends('layouts.mainlayout')

@section('title','Dashboard')
    
@section('content')
    <h1>INI HALAMAN DASHBOARD UNTUK ADMIN</h1>

    <form action="/logout" method="">
        @csrf
        <button class="btn btn-primary">logout</button>
    </form>

@endsection