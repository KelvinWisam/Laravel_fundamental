<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Menu</title>
</head>
<body>
    <h1>Detail Menu</h1>
   @dump($data)
    <p>Makanan: {{ $makanan['makanan'] }}</p>
    <p>Harga: {{ $makanan['harga'] }}</p>
</body>
</html>
