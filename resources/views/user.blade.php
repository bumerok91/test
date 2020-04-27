<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Test app</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<div class="content">
    @foreach($users as $user)
        <div class="row" style="margin: 1.2em">
            <div class="col-md-12 ">
                <h3>User: <b>{{ $user->name }}</b></h3>
            </div>
            @foreach($user->posts as $post)
                @if(!$post->hasFun())
                    @continue
                @endif
                <div class="col-md-4">
                    <h4>{{ $post->name }}</h4>
                    <p>{{ $post->body  }}</p>
                </div>
            @endforeach
        </div>
    @endforeach
</div>
</body>
</html>
