<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/kirim-form" method="POST">
    @csrf
    <label for="nama">Nama:</label>
    <input type="text" name="nama">
    <button type="submit">Kirim</button>

    </form>
</body>
</html>