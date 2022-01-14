@extends('layouts.app')

@section('title') Edit Article @endsection

@section('content')
<form class="container__form" method="POST" action="/articles/{{$article->id}}">
    @method('PUT')
    @csrf
        <div class="form-group"><input type="text" name="title" value="{{$article->title}}"></div>
        <div class="form-group"><input type="text" name="description" value="{{$article->description}}"></div>
        <div class="form-group"><input type="number" name="category_id" value="{{$article->category_id}}"></div>
        <div class="form-group"><input type="submit" value="Update"></div>
</form>    

@endsection
    

