@extends('dashboard.layout')

@section('content')

<a class="btn btn-succes" href="{{ route('post.create')}}">Crear</a>
<a class="btn btn-succes" href="{{route('category.index')}}">Categorías</a>

    <table class="table mb-3">

        <thead>
            <tr>

                <th>Título</th>

                <th>Categoría</th>

                <th>Posted</th>

                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($posts as $p)
            <tr>
                <td>{{ $p->title}}</td>

                <td>{{$p->category->title}}</td>

                <td>{{ $p->posted}}</td>

                <td>

                    <a class="btn btn-primary" href="{{ route('post.edit', $p)}}">Editar</a>
                    <a class="btn btn-primary" href="{{ route('post.show', $p)}}">Ver</a>

                    <form action="{{ route('post.destroy', $p)}}"   method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit">Eliminar</button>
                        
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}
@endsection