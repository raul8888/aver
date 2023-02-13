@extends('dashboard.layout')

@section('content')

    <h1>{{ $category->title}}</h1>

    <a class="btn btn-primary" href="{{route('category.index')}}">Regresar</a>

@endsection