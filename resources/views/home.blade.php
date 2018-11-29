@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
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
                                    <option value="">Select Genre</option>
                                    <option value="Horror">Horror</option>
                                    <option value="Romance">Romance</option>
                                    <option value="Thriller">Thriller</option>
                                    <option value="Non-fiction">Non-Fiction</option>
                                    <option value="Comedy">Comedy</option>
                                    <option value="Fantasy">Fantasy</option>
                                </select>
                                <select name="lib_sec" id="lib_sec" style="display: none;" class="form-control">
                                    <option value="">Select Library Section</option>
                                    <option value="Circulation">Circulation</option>
                                    <option value="Periodical">Periodical Section</option>
                                    <option value="General Reference">General Reference</option>
                                    <option value="Children's Section">Children's Section</option>
                                    <option value="Fiction">Fiction</option>
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
            <div class="card">
                <div class="card-header">Books Borrowed</div>
                <div class="card-body">
                    <table class="table">
                                <thead>
                                    <td>Title</td>
                                    <td>Author</td>
                                    <td>Library Section</td>
                                    <td>Borrowed since:</td>
                                    <td>Return date:</td>
                                    <td></td>
                                </thead>
                                <tbody>
                                    @forelse($borrowed as $b)
                                        <tr>
                                            <td>{{$b->title}}</td>
                                            <td>{{$b->author}}</td>
                                            <td>{{$b->lib_section}}</td>
                                            <td>{{$b->borrow_date}}</td>
                                            <td>{{$b->return_date}}</td>
                                            <td>
                                                @if($b->is_returned == 0)
                                                    <a class="btn btn-primary" href="{{'/return/'.$b->id}}">Return</a>
                                                @else
                                                    <a class="btn btn-primary disabled">Return</a>
                                                @endif
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td>No books borrowed yet.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                    </table>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header">Borrow History</div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <td>Title</td>
                                        <td>Author</td>
                                        <td>Description</td>
                                        <td>Date Borrowed</td>
                                    </thead>
                                    <tbody>
                                    @forelse($history as $h)
                                        <tr>
                                            <td>{{$h->title}}</td>
                                            <td>{{$h->author}}</td>
                                            <td>{{$h->lib_section}}</td>
                                            <td>{{$h->borrow_date}}</td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td>No books borrowed yet.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                                </table>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
