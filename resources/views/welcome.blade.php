@extends('layouts.app')
# @Date:   2019-10-24T09:29:06+01:00
# @Last modified time: 2019-10-30T13:14:42+00:00




@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome</div>

                <div class="card-body">
                    Welcome to My Bookstore!📚<a href="{{ route('admin.books.index')}}">Books</a>

                  <br/>
                    Read More <a href="{{ route('about') }}">About Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
