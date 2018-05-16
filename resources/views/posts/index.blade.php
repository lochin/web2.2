<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Posts</title>
</head>
<body>
    <div class="container">
        <h1>Posts</h1>
        @foreach($posts as $post)
            <h2 class="text-justify">{{ $post->title }}</h2>
            <p class="text-justify">{{ str_limit($post->body, 500) }}</p>
        @endforeach
        <div class="d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
</body>
</html>
