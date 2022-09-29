<!doctype html>
<head>
  <title>My Blog</title>
  <link rel="stylesheet" href="/app.css">
  <script src="/app.js"></script>
</head>
<body>
  <article>
    <h1>{{$post->title}}</h1>
      <div>
          {{$post->body}}
      </div>
    <a href="/"> Go Back </a>
  </article>
</body>
