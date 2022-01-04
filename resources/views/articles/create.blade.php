@extends('layouts.app')

@section('title') Create Article @endsection

@section('content')
<form method="POST" action="/articles">
    @csrf
        <div><input type="text" placeholder="Enter title" name="title"></div>
        <div><input type="text" placeholder="Enter description" name="description"></div>
        <div><input type="number" placeholder="Enter category_id" name="category_id"></div>
        <div><input type="submit" value="Create"></div>
</form>    


@endsection