<!DOCTYPE html>
<html>
<head>
<title>Profil Saya</title>
</head>
<body>
<h1>Profil Saya</h1>
<p>Perkenalkan Nama saya {{ $nama[0] }}, saya seorang praktisi dibidang</p>
<p>
    @foreach ($segera as $ok)
            <li>{{ $ok}}</li>

    @endforeach
</p>
</body>
</html