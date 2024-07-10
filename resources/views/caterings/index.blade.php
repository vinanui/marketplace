<!DOCTYPE html>
<html>
<head>
    <title>Daftar Katering</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Daftar Katering</h2>
    <form method="GET" action="/caterings">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="location">Lokasi</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="Masukkan lokasi">
            </div>
            <div class="form-group col-md-4">
                <label for="food_type">Jenis Makanan</label>
                <input type="text" class="form-control" id="food_type" name="food_type" placeholder="Masukkan jenis makanan">
            </div>
            <div class="form-group col-md-4 align-self-end">
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
        </div>
    </form>
    <div class="row">
        @foreach($caterings as $catering)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $catering->name }}</h5>
                        <p class="card-text">{{ $catering->description }}</p>
                        <p class="card-text"><small class="text-muted">{{ $catering->address }}</small></p>
                        <p class="card-text"><small class="text-muted">{{ $catering->contact }}</small></p>
                        <p class="card-text"><small class="text-muted">{{ $catering->food_type }}</small></p>
                        <a href="/caterings/{{ $catering->id }}" class="btn btn-primary">Lihat Menu</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>
