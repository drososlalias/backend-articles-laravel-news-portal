@extends('layouts.app')

@section('content')
    <a href="/categories/create">Create new Category</a>
    
    @foreach ($categories as $category)
    <div style="border:2px solid black;border-radius:4px;margin:10px;padding:3px;">
        <a href="/categories/{{$category->id}}"><div><h1>Category: {{$category->name}}</h1></div></a>       
        <div><p>Articles: {{$category->articles}}</p></div>        
        <a href="/categories/{{$category->id}}/edit"><button>EDIT</button></a>
        <form method="POST" action="/categories/{{$category->id}}">
            @method('DELETE')
            @csrf
            <input type="submit" value="DELETE" >
        </form>
    </div>
    @endforeach    
@endsection