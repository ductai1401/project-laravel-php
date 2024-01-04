

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <h1>About Us!</h1>
    @foreach($task as $t)
        <!-- <div>{{$t->id}} - {{$t->title}} - {{$t->description}}<a href="{{route('product.show',['id'=> $t->id])}}">{{$t-> title}}</a></div> -->

        <div>{{$t->id}} - {{$t->title}} - {{$t->description}} <a href="{{route('product.show',['id'=>$t->id])}}">{{$t->title}}</a></div>

    @endforeach
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>