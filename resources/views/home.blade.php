<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Welcome, {{ Auth::user()->name }}!</h2>
    <a href="/caterings" class="btn btn-primary">Cari Katering</a>
</div>
</body>
</html>
