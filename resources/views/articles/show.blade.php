@extends('layouts.app')
@section('content')
<h1>Title: {{$article->title}}</h1>
<p>Description: {{$article->description}}</p>
<p>Category Id: {{$article->category_id}}</p>
<p>Posted at:: {{$article->article_date}}</p>

@endsection

{{-- {{$article}} --}}
