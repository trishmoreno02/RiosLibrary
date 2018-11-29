<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rio's Library</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/index.css')}}">
    </head>
    <body>
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="#">Rio's Library</a>
                <div class="float-right">
                    <a class="btn btn-primary" href="/login">Sign In</a>
                    <a class="btn btn-primary" href="/register">Register</a>
                </div>
            </div>
        </nav>
        <!-- Masthead -->
        <header class="masthead text-white text-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <h1 class="mb-5">Search for your favorite books now.</h1>
                    </div>
                    <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                        <form>
                        <div class="form-row">
                            <div class="col-12 col-md-4">
                                <select name="" id="" class="form-control form-control-lg">
                                    <option value="title">Title</option>
                                    <option value="author">Author</option>
                                    <option value="genre">Genre</option>
                                    <option value="bool">Advanced Boolean</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6 mb-2 mb-md-0">
                                <input type="text" class="form-control form-control-lg" placeholder="Search...">
                            </div>
                            <div class="col-12 col-md-2">
                                <button type="submit" class="btn btn-block btn-lg btn-primary">Search</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    </body>
</html>
