@extends('layouts.mainlayout')

@section('title','Profile')
    
@section('content')
    <h1>INI HALAMAN PROFILE UNTUK CLIENT</h1>

    <form action="/logout" method="">
        @csrf
        <button class="btn btn-primary">logout</button>
    </form>

@endsection