<!doctype html>
<head>
  <title>My Blog</title>
  <link rel="stylesheet" href="/app.css">
  <script src="/app.js"></script>
</head>
<body>

<?php use Spatie\YamlFrontMatter\YamlFrontMatter;
$files = collect(File::files(resource_path("posts")));?>
<?php foreach ($files as $file): ?>
<?=YamlFrontMatter::parseFile($file)->title?>
<?php endforeach ?>
  <?php foreach ($posts as $post): ?>

    <article>
      <h1>
          <a href="/posts/<?= $post->slug;?>">
                  <?= $post->title;?>
          </a>
      </h1>

        <div>
            <?= $post->excerpt;?>
        </div>
    </article>
  <?php endforeach; ?>
</body>
