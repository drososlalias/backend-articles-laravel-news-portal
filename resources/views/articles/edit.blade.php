@extends('layouts.app')

@section('title') Edit Article @endsection

@section('content')
<form method="POST" action="/articles/{{$article->id}}">
    @method('PUT')
    @csrf
        <div><input type="text" name="title" value="{{$article->title}}"></div>
        <div><input type="text" name="description" value="{{$article->description}}"></div>
        <div><input type="number" name="category_id" value="{{$article->category_id}}"></div>
        <div><input type="submit" value="Update"></div>
</form>    


@endsection
    

