<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css\style.css">
</head>
<body>
<body class="container">
    <header id="header">
        <h1>Portfolio</h1>
        <ul id="global-menu">
            {{-- <li><a href="{{ route('photos.index') }}">AlbumApp</a></li> --}}
            <li><a href="#">AlbumApp</a></li>
            <li><a href="#">GiuHub</a></li>
        </ul>
    </header>

    <img src="{{ asset('storage/avatar/TopImage.jpg') }}">

    <main id="top">
        <h2>ようこそ、ポートフォリオへ</h2>
    </main>

    <footer id="footer">
        <small>&copy; 2024 mmorimatsu</small>
    </footer>

</body>
</html>
