<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Comment Name</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href={{URL::to('css/comment.css')}}>
    <link rel="stylesheet" type="text/css" href={{URL::to('css/header.css')}}>

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

@include('header')

<!--Errors/ Success when posting-->
@if(count($errors) > 0)
    <div class="row">
        <div class="col-md-6 col-md-offset-3 alert">
            <div class="alert alert-danger">
                <ul style="list-style: none; padding: 0;">
                    @foreach($errors-> all() as $error)
                        <li>{{$error}}</li>
                     @endforeach
                </ul>
            </div>
        </div>
    </div>
 @endif

@if(Session::has('message'))
    <div class="row">
        <div class="col-md-6 col-md-offset-3 alert">
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
        </div>
    </div>
    @endif

<!--Comment only if logged in-->
@if(Auth::check())
    <section class="row new-comment">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>Leave a comment</h3></header>
            <form action="{{route('comment.create')}}" method="post">
                <div class="form-group">
                    <textarea class="form-control" name="body" id="new-comment" rows="5" placeholder="Your comment here"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Comment</button>
                <input type="hidden" value="{{ Session::token() }}" name="_token">
                <input type="hidden" value="{{$gpu_id}}" name="gpu_id">
            </form>
        </div>
    </section>
@else
    <section class="row new-comment">
        <div class="col-md-6 col-md-offset-3">
            <header><h3 class="pleaselogin">Please Log in to leave a comment</h3></header>
        </div>
    </section>
@endif

<div id="respond">
    <div class="container">
        <div class="row gpuname">
            <div class="col-sm-10 col-sm-offset-1 ">
                <h3>Comments for {{$firstGpu->name}}</h3>
            </div><!-- /col-sm-12 -->
        </div><!-- /row -->
        <br>


        <!-- foreach for comments starts here -->
        @foreach($comments as $comment)
        <div class="row">
            <div class="col-sm-1 col-sm-offset-3">
                <div class="thumbnail">
                    <img class="img-responsive user-photo" src={{URL::to('images/avatar.png')}}>
                </div><!-- /thumbnail -->
            </div><!-- /col-sm-1 -->

            <div class="col-sm-5">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>{{$comment->user->name}}</strong> <span class="text-muted">{{$comment->created_at}}</span>
                      @if(Auth::user())
                        @if(Auth::user() == $comment->user || Auth::user()->hasRole('Admin'))
                        <a class="btn right alert" href="{{route('comment.delete', ['comment_id' => $comment->id])}}"><button>Delete</button></a>
                          @endif
                          @endif
                    </div>
                    <div class="panel-body">
                        {{$comment->body}}
                    </div><!-- /panel-body -->
                </div><!-- /panel panel-default -->
            </div><!-- /col-sm-5 -->
        </div><!-- /row -->
        @endforeach
        <!-- foreach ends here-->
        
        <!-- if there are no comments -->
@if($counter == 0)
        <div class="alert alert-warning">
            <strong>!</strong> No comments have been posted yet <strong>!</strong>
        </div>
    @endif
    </div><!-- /container -->
</div>
</body>
</html>