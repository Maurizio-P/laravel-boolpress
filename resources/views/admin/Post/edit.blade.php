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
    <input id="title" type="text" class="form-control" name="title" value="title">

    <label for="article" class="col-md-4 col-form-label text-md-right" >Article</label>
    <textarea name="article" id="article" cols="30" rows="10"></textarea>  

    <button class="btn btn-success" type="submit"> Salva modifiche</button>

</form>
@endsection