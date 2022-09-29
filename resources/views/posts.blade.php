<!doctype html>
<head>
  <title>My Blog</title>
  <link rel="stylesheet" href="/app.css">
  <script src="/app.js"></script>
</head>
<body>
  @foreach ($posts as $post)
    <article>
      <h1>
          <a href="/post/{{$post->slug}}">
                   {{$post->title}}
          </a>
      </h1>

        <div>
            {{$post->excerpt}}
        </div>
    </article>
  @endforeach
</body>
