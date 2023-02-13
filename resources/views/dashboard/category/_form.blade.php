@csrf

<label for="">Título</label>
<input type="text" class="form-control" name="title" value="{{old('title', $category->title)}}">

<label for="">Slug</label>
<input type="text"class="form-control"  name="slug" value="{{old('slug', $category->slug)}}">

<button class="btn btn-primary" type="submit">Enviar</button>

<a class="btn btn-succes" href="{{ route('category.index')}}">Ver</a>