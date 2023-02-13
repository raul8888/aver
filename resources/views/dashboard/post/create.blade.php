@extends('dashboard.layout')

@section('content')

    <h1>Crear nuevo post</h1>

@include('dashboard.fragment._errors-form')
    
    <form action="{{route('post.store')}}" method="post">

        @include('dashboard.post._form')
    </form>
    
@endsection