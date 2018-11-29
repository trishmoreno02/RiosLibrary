<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Rio's Library | Admin</title>

    <!-- Scripts -->
    <!--script src="{{ asset('js/app.js') }}" defer></script-->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
</head>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">Add Book</div>
            <div class="card-body">
                <form action="/admin/addBook" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title: </label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="author">Author: </label>
                        <input type="text" name="author" id="author" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="description">Description: </label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="genre">Genre: </label>
                        <select name="genre" id="genre" class="form-control">
                            <option value="">Select Genre</option>
                            <option value="Horror">Horror</option>
                            <option value="Romance">Romance</option>
                            <option value="Thriller">Thriller</option>
                            <option value="Non-fiction">Non-Fiction</option>
                            <option value="Comedy">Comedy</option>
                            <option value="Fantasy">Fantasy</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Library Section: </label>
                        <select name="lib_section" id="lib_section" class="form-control">
                            <option value="">Select Library Section</option>
                            <option value="Circulation">Circulation</option>
                            <option value="Periodical">Periodical Section</option>
                            <option value="General Reference">General Reference</option>
                            <option value="Children's Section">Children's Section</option>
                            <option value="Fiction">Fiction</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Book</button>
                </form>
            </div>
        </div>
    </div>
@endsection