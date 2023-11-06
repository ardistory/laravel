<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Form</title>
</head>

<body>
    <form method="POST">
        <input type="text" name="pesan" id="pesan" placeholder="Pesan">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" value="Kirim">
    </form>
</body>

</html>
