@extends('layouts.app')
@section('content')
# @Date:   2019-10-30T13:39:17+00:00
# @Last modified time: 2019-11-05T12:21:39+00:00



<div class="container">
  <div class ="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="card">
        <div class="card-header">
          Book:: {{$book->title}}
        </div>
        <div class="card-body">
          <table class="table table-hover">
            <tbody>
              <tr>
              <th>Title</th>
              <td>{{$book->title}}</td>
            </tr>
            <tr>
              <th>Author</th>
              <td>{{$book->author}}</td>
            </tr>
            <tr>
              <th>Publisher</th>
              <td>{{$book->publisher}}</td>
            </tr>
            <tr>
              <th>Year</th>
              <td>{{$book->year}}</td>
            </tr>
            <tr>
              <th>ISBN</th>
              <td>{{$book->isbn}}</td>
            </tr>
            <tr>
              <th>Price</th>
                <td>{{$book->price}}</td>
            </tr>
            </tbody>
        </table>
        <a href="{{ route('admin.books.index',$book->id) }}" class="btn btn-default">Back</a>
        <a href="{{ route('admin.books.edit',$book->id) }}" class="btn btn-warning">Edit</a>
        <form style="display:inline-block" method="POST" action="{{route('admin.books.destroy', $book->id) }}">
          <input type="hidden" name="_method" value="DELETE">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <button type="submit" class="form-control btn btn-danger">Delete</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
