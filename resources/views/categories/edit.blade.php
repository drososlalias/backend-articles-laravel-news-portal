@extends('layouts.app')

@section('title') Edit Category @endsection

@section('content')
<form method="POST" action="/categories/{{$category->id}}">
    @method('PUT')
    @csrf
        <div><input type="text"  name="name" value="{{$category->name}}"></div>
        <div><input type="text"  name="articles" value="{{$category->articles}}"></div>
        <div><input type="submit" value="Update"></div>
</form>    


@endsection
    

