@extends('layouts.admin')

@section('content')
<h1>Pagina admin.edit.home</h1>
<p>Pagina per creare un nuovo post</p>

<form method="POST" action="{{ route('admin.posts.update', $post->id) }}">
    @csrf
    @method('put')
    {{-- title  --}}
    <label for="title"
    class="col-md-4 col-form-label text-md-right">Title</label>
    <input id="title" type="text" class="form-control" name="title" value="{{$post->title}}">

    <label for="article" class="col-md-4 col-form-label text-md-right" >Article</label>
    <textarea name="article" id="article" cols="30" rows="10">{{$post->article}}</textarea>  

    <label class="form-label">Categoria</label>
    <select name="category_id" class="form-control">
        @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>

    <label for="tag" class="form-label">Tag</label>
    <select name="tags[]" id="tag" class="form-control" multiple>
        @foreach ($tags as $tag)
            <option value="{{$tag->id}}" @if ($post->tags->contains($tag)) selected @endif>{{$tag->name}}</option>
            {{-- <input type="checkbox" name="tags[]" id="tag" value="{{$tag->id}}" {{$tag->name}}> --}}
        @endforeach
    </select>

    <button class="btn btn-success" type="submit"> Salva modifiche</button>

</form>
@endsection