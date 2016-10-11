
        <!DOCTYPE html>
<html>
<body>
<pre>NAME                                      PRICE       RELEASE DATE</pre>
@foreach($gpus as $gpu)
 <pre>{{$gpu->id}}.{{$gpu->name}} - ${{$gpu->price}} - {{$gpu->release_date}} </pre>
    <br>
@endforeach
</body>
</html>
