@extends('layouts.app')
@section('content')
<h1>Category Id: {{$category->id}}</h1>
<p>Category Name:{{$category->name}}</p>
<p>Articles: {{$category->articles}}</p>
@endsection

{{-- {{$category}} --}}
