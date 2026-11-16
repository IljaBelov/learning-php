<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <title><?= $title ?? 'Blog' ?></title>
  <script src="/assets/js/color-modes.js"></script>
  <link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet" />
  <meta name="theme-color" content="#6366f1" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Space+Grotesk:wght@500;700&display=swap"
    rel="stylesheet" />
  <link href="/blog.css" rel="stylesheet" />
</head>

<body>

<?php include __DIR__ . '/icons.php'; ?>
<?php include __DIR__ . '/theme-select.php'; ?>
<?php include __DIR__ . '/nav.php'; ?>