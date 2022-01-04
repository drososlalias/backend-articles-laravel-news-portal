@extends('layouts.app')

@section('title') Create Article @endsection

@section('content')
<form method="POST" action="/articles">
    @csrf
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" name="title" id="title" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" class="form-control" id="description" name="description" placeholder="Enter description">
    </div>
    <div class="form-group">
      <label for="category_id">Category Id</label>
      <input type="number" class="form-control" id="category_id" name="category_id" placeholder="Enter description">
    </div>
    
    <button type="submit" class="btn btn-primary">Create</button>
  </form>


@endsection