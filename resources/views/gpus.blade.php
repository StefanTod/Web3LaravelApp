<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>${1}</title>
    <meta name="description" content="${2}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/home-page.css">

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
                <a class="navbar-brand" href="#">GPU INTELLIGENCE</a>
            </div>


        </div><!-- /.container-fluid -->
    </nav>
</header>
<div class="container-fluid col-md-8 col-md-offset-2">

    @foreach($gpus as $gpu)
        <row>
            <div class="gpu-container container col-md-5 ">
                <div>
                    <div class="row">
                        <div class="image-gpu-container col-md-4">
                            <img src="{{ URL::to('/') }}/images/smallcat.jpg" class="img-rounded image-gpu" alt="Cat pic">
                        </div>
                        <div class="image-gpu-container col-md-4">
                            <img src="{{ URL::to('/') }}/images/nvidia.png" class="img-rounded image-gpu" alt="nvidia logo">
                        </div>
                        <div class="more-button-gpu col-md-4">
                            <button class="btn btn-info">MORE</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="name-gpu col-md-10">
                            <p class="name-gpu-p">
                                {{$gpu->name}}
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="price-gpu col-md-2"><p>{{$gpu->price}}$</p></div>
                        <div class="release-date-gpu col-md-4 "><p>{{$gpu->release_date}}</p></div>
                    </div>
                </div>
            </div>
        </row>
        @endforeach



</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>