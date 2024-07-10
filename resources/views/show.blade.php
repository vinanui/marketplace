<!DOCTYPE html>
<html>
<head>
    <title>Detail Katering</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>{{ $catering->name }}</h2>
    <p>{{ $catering->description }}</p>
    <p><strong>Alamat:</strong> {{ $catering->address }}</p>
    <p><strong>Kontak:</strong> {{ $catering->contact }}</p>
    <p><strong>Jenis Makanan:</strong> {{ $catering->food_type }}</p>
    <h3>Menu</h3>
    <div class="row">
        @foreach($catering->menus as $menu)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $menu->name }}</h5>
                        <p class="card-text">{{ $menu->description }}</p>
                        <p class="card-text">Harga: Rp {{ number_format($menu->price, 2) }}</p>
                        <form method="POST" action="/orders">
                            @csrf
                            <input type="hidden" name="menu_id" value="{{ $menu->id }}">
                            <div class="form-group">
                                <label for="quantity">Jumlah Porsi</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" required>
                            </div>
                            <div class="form-group">
                                <label for="delivery_date">Tanggal Pengiriman</label>
                                <input type="date" class="form-control" id="delivery_date" name="delivery_date" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Pesan</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>
