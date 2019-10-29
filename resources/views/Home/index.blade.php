@extends('Home.layouts.main')

@section('title', 'index')

@section('content')
    <h1>index</h1>
@endsection

@section('footer')
    @parent
    @include('Home.test')
@endsection

