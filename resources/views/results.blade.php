@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <form class="mb-5" action="/search">
                            <div class="form-row">
                                <div class="col-12 col-md-4">
                                    <select name="searchby" id="searchby" class="form-control">
                                        <option value="">Search by...</option>
                                        <option value="title">Title</option>
                                        <option value="author">Author</option>
                                        <option value="genre">Genre</option>
                                        <option value="lib_sec">Library Section</option>
                                    </select>
                                    <select name="genre" id="genre" style="display: none;" class="form-control">
                                        <option value="horror">Horror</option>
                                        <option value="romance">Romance</option>
                                        <option value="thriller">Thriller</option>
                                        <option value="non-fiction">Non-Fiction</option>
                                        <option value="comedy">Comedy</option>
                                    </select>
                                    <select name="lib_sec" id="lib_sec" style="display: none;" class="form-control">
                                        <option value="circulation">Circulation</option>
                                        <option value="periodical">Periodical Section</option>
                                        <option value="general">General Reference</option>
                                        <option value="children">Children's Section</option>
                                        <option value="fiction">Fiction</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 mb-2 mb-md-0">
                                    <input type="text" name="search" id="search" class="form-control" placeholder="Search...">
                                </div>
                                <div class="col-12 col-md-2">
                                    <button type="submit" class="btn btn-block btn-primary">Search</button>
                                </div>
                            </div>
                </form>

                @guest

                @else
                    <a class="btn btn-primary mb-3" href="/home">< Back to Dashboard</a>
                @endguest

                @forelse($results as $res)
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg" alt="" placeholder="image" style="border-style: solid; width: 100%;">
                                </div>
                                <div class="col-md-6">
                                    <h3>{{$res->title}}</h3>
                                    <h4>{{'Author: '.$res->author}}</h4>
                                    <p class="lead">{{$res->description}}</p>
                                    <button class="btn btn-success">{{'Genre: '.$res->genre}}</button>
                                    <button  class="btn btn-warning">{{'Section: '.$res->lib_section}}</button>
                                </div>
                                <div class="col-md-3">
                                    @guest
                                    <a class="btn btn-primary btn-block borrow" href="/login"> Login to Borrow</a>
                                    @else
                                        <button class="btn btn-primary btn-block borrow" data-id="{{$res->id}}" data-toggle="modal" data-target="#borrow" data-title="{{$res->title}}" data-author="{{$res->author}}" data-section="{{$res->lib_section}}"> Borrow</button>
                                    @endguest
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No results.</p>
                @endforelse

                @include('borrow_modal')
            </div>
        </div>
    </div>
@endsection