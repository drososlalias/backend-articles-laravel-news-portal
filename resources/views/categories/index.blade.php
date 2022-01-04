@extends('layouts.admin')

@section('table')
    Categories
@endsection

@section('content')
    <div class="row">
        <a href="/categories/create"><button class="btn btn-info ">Add category</button></a>
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Articles</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($categories as $category)
                <tr>
                  <td>{{$category->id}}</td>
                  <td><a style="text-decoration:none;color:inherit;" href="/categories/{{$category->id}}">{{$category->name}}</a></td>
                  <td>{{$category->articles}}</td>           
                  <td><a href="/categories/{{$category->id}}/edit"><button class="btn btn-success">EDIT</button></a></td>
                  <td>
                    <form method="POST" action="/categories/{{$category->id}}">
                        @method('DELETE')
                        @csrf
                        <input class="btn btn-danger" type="submit" value="DELETE" >
                    </form></td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
     
@endsection


     
