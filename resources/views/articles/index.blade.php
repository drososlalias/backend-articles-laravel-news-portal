@extends('layouts.app')

@section('content')
    <a href="/articles/create">Create and Article</a>
    @foreach ($articles as $article)
    <div style="border:2px solid black;border-radius:4px;margin:10px;padding:3px;">
        <a href="/articles/{{$article->id}}"><div><h1>Title: {{$article->title}}</h1></div></a>        
        <div><p>Description: {{$article->description}}</p></div>        
        <div><p>Category Id: {{$article->category_id}}</p></div>        
        <a href="/articles/{{$article->id}}/edit"><button>EDIT</button></a>
        <form method="POST" action="/articles/{{$article->id}}">
            @method('DELETE')
            @csrf
            <input type="submit" value="DELETE" >
        </form>
    </div>
    @endforeach    
@endsection
