<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
<div class="wrap">
    <div class="stepper">
        <span class="count first active">?</span>
        <span class="count second next"></span>
    </div>
    <img src="/images/arrow-top.svg" alt="" class="arrow-top">
    <img src="/images/arrow-bottom.svg" alt="" class="arrow-bottom">
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.1.0/anime.min.js"></script>
<script src="/js/app.js"></script>
</body>
</html>
