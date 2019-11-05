@extends('layouts.app')
# @Date:   2019-10-24T09:29:06+01:00
# @Last modified time: 2019-11-05T12:40:18+00:00




@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                  <p>Welcome to My Bookstore!📚<a href="{{ route('user.books.index')}}">Books</a></p>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as an ordinary user!

                    <br>
                      Hello {{Auth::user()->name}}
                    <br>
                      Email: {{Auth::user()->email}}
                    <br>
                      Address: {{Auth::user()->customer->address}}
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
