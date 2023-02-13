@csrf

<label for="">Título</label>
<input type="text" class="form-control" name="title" value="{{ old('title', $post->title)}}">

<label  for="">Slug</label>
<input type="text" class="form-control" name="slug" value="{{ old('slug', $post->slug)}}">

<label  for="">Categoría</label>
<select name="category_id" class="form-control">

    <option value=""></option>
    @foreach ($categories as $c)

        <option {{ old('category_id', $post->category_id) == $c->id ? 'selected' : '' }} value="{{ $c->id}}">{{ $c->title}}</option>
        
    @endforeach

</select>

<label  for="">Posteado</label>
<select name="posted" class="form-control">

    <option {{old('posted', $post->posted) == 'yes' ? 'selected' : ''}} value="yes">Si</option>
    <option {{old('posted', $post->posted) == 'not' ? 'selected' : ''}} value="not">No</option>

</select>

<label for="">Contenido</label>
<textarea class="form-control" name="content" id=""> {{old('content', $post->content)}}</textarea>

<label  for="">Descripción</label>
<textarea class="form-control" name="description" id="">{{old('description', $post->description)}}</textarea>

<button class="btn btn-primary" type="submit">Enviar</button>

<a class="btn btn-succes" href="{{ route('post.index')}}">Ver</a>