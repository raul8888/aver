@extends('dashboard.layout')

@section('content')
    
<a class="btn btn-succes" href="{{route('category.create')}}">Crear</a>
<a class="btn btn-succes" href="{{route('post.index')}}">Principal</a>
    <table class="table mb-3">

        <thead>
            <tr>
            <th>Categoria</th>
            <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($categories as $c)
            
            <tr>
                <td>{{$c->title}}</td>

                <td>
                    
                    <a class="btn btn-primary" href="{{route('category.edit', $c)}}">Editar</a>
                    <a class="btn btn-primary" href="{{route('category.show', $c)}}">Ver</a>

                    <form action="{{route('category.destroy', $c)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit">Eliminar</button>
                    
                    </form>
                
                </td>


            </tr>
            @endforeach

        </tbody>
    </table>

    {{$categories->links()}}
@endsection