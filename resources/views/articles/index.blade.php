@extends('layouts.admin')


@section('table')
    Articles  
    @endsection
    
    @section('content')
    <a href="/articles/create"><button class="btn btn-info ">Add article</button></a>
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>CategoryId</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($articles as $article)
                <tr>
                  <td>{{$article->id}}</td>
                  <td><a style="text-decoration:none;color:inherit;" href="/articles/{{$article->id}}">{{$article->title}}</a></td>
                  <td>{{$article->description}}</td>           
                  <td>{{$article->category_id}}</td>
                  <td><a href="/articles/{{$article->id}}/edit"><button class="btn btn-success">EDIT</button></a></td>
                  <td>
                    <form method="POST" action="/articles/{{$article->id}}">
                        @method('DELETE')
                        @csrf
                        <input class="btn btn-danger" style="btn btn-danger" type="submit" value="DELETE" >
                    </form></td>
                </tr>
                @endforeach
                </tbody>
              </table>
              {{-- {{$articles->links()}} --}}
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
     
@endsection


     
