@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                                    <option value="horror">Horror</option>
                                    <option value="romance">Romance</option>
                                    <option value="thriller">Thriller</option>
                                    <option value="non-fiction">Non-Fiction</option>
                                    <option value="comedy">Comedy</option>
                                    <option value="fantasy">Fantasy</option>
                                </select>
                                <select name="lib_sec" id="lib_sec" style="display: none;" class="form-control">
                                    <option value="">Select Library Section</option>
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
            <div class="card">
                <div class="card-header">Books Borrowed</div>
                <div class="card-body">
                    <table class="table">
                                <thead>
                                    <td>Title</td>
                                    <td>Author</td>
                                    <td>Description</td>
                                    <td>Borrowed since:</td>
                                    <td>Return date:</td>
                                </thead>
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
                                        <td>Date Returned</td>
                                    </thead>
                                </table>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
