@extends('Home.layouts.main')

@section('title', 'index')

@section('content')
    <h1>index</h1>
@endsection

@section('footer')
    @parent
    <p>{{ $globalProjectName }}</p>
    @include('Home.test')
    @sayhi
    @saySomething('hello')
@endsection

