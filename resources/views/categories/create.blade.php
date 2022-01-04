@extends('layouts.app')

@section('title') Create Category @endsection

@section('content')
<form method="POST" action="/categories">
    @csrf
        <div><input type="text" placeholder="Enter category name" name="name"></div>
        <div><input type="submit" value="Create"></div>
</form>    


@endsection