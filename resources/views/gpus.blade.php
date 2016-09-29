<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GPU INTELLIGENCE</title>
    <meta name="description" content="${2}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href={{URL::to('css/home-page.css')}}>
    <link rel="stylesheet" type="text/css" href={{URL::to('css/header.css')}}>

</head>
<body>
@include('header')

<div class="row text-center inner">
<div class="container-fluid col-md-8 col-md-offset-2">
    <h1> <p>GPU INTELLIGENCE || TOP 2 CARDS</p></h1>
    <hr>
    @foreach($gpus as $gpu)
        @if($gpu->id === 4)
            <div class="row">
                <div class="advert col-md-12">
                    <hr>
                    <p>THERE IS SOME ADVERTISEMENT HERE</p>
                    <div class="resizegif">
                    <div id="_giphy_tv">
                    <script>
                        var _giphy_tv_tag="money";
                        var g = document.createElement('script'); g.type = 'text/javascript'; g.async = true;
                        g.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'giphy.com/static/js/widgets/tv.js';
                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(g, s);
                    </script>
                    </div>
                    <hr>
                </div>
            </div>
        @endif
        <row>
            <div class="gpu-container container col-md-5 ">
                    <div class="row">
                        <div class="image-gpu-container col-md-4">
                            <img src="{{ URL::to('/') }}/images/gpus/{{$gpu->name}}.jpg" class="img-rounded image-gpu" alt="Cat pic">
                        </div>
                        <div class="image-gpu-container col-md-4">
                            <img src="{{ URL::to('/') }}/images/{{$gpu->type}}.png" class="img-rounded image-gpu" alt="nvidia logo">
                        </div>
                        <div class="more-button-gpu col-md-4">
                            <button class="btn btn-info" id="myBtn{{$gpu->id}}">MORE</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="name-gpu col-md-12">
                            <p class="name-gpu-p">
                                {{$gpu->name}}
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="price-gpu col-md-2"><p>{{$gpu->price}}$</p></div>
                       <div class="commentsbuttonsize"> <a href="{{route('comments', ['gpu_id' => $gpu->id])}}"><button class="commentsbutton">Comments</button></a></div>
                        <div class="release-date-gpu col-md-10"><p>{{$gpu->release_date}}</p></div>
                    </div>
                </div>
        </row>
            <!-- The Modal -->
            <div id="myModal{{$gpu->id}}" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">x</span>
                    @include('gpu')
                </div>

            </div>
        @endforeach



</div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
    @foreach($gpus as $gpu)
    // Get the modal
    var modal{{$gpu->id}} = document.getElementById('myModal{{$gpu->id}}');

    // Get the button that opens the modal
    var btn{{$gpu->id}} = document.getElementById("myBtn{{$gpu->id}}");

    // When the user clicks on the button, open the modal
    btn{{$gpu->id}}.onclick = function() {
        modal{{$gpu->id}}.style.display = "block";
    }

    // Get the <span> element that closes the modal
    var spanNumber{{$gpu->id}} = {{$gpu->id}} - 2;
    var span{{$gpu->id}} = document.getElementsByClassName("close")[spanNumber{{$gpu->id}}];

    // When the user clicks on <span> (x), close the modal
    span{{$gpu->id}}.onclick = function(event) {
        modal{{$gpu->id}}.style.display = "none";

    }
        @endforeach

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        @foreach($gpus as $gpu)
        if (event.target == modal{{$gpu->id}}) {
            modal{{$gpu->id}}.style.display = "none";
        }
        @endforeach
    }
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>