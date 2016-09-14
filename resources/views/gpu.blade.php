<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GPU INTELLIGENCE</title>
    <meta name="description" content="${2}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/gpu-page.css') }}">

</head>
<body>
<header>
    <nav class="navbar navbar-default ">
        <div class="container-fluid col-md-8 col-md-offset-4">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">GPU INTELLIGENCE</a>
            </div>


        </div><!-- /.container-fluid -->
    </nav>
</header>
<div class="gpu-container container-fluid col-md-10">
    <h1>№{{$gpu->id-1}} || {{$gpu->name}}</h1>
    <hr>
    <h3>Specifications</h3>
    <hr>
    <p>{{$gpu->specs}}</p>
    <h3>Reviews</h3>
    <hr>
    <p>{{$gpu->reviews}}</p>
    <hr>
    <p class="price">{{$gpu->price}}$</p>
    <p>Release Date: {{$gpu->release_date}}</p>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
