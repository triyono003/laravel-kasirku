<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div id="container">
    <form action="/add" method="post">
      @csrf
      <input type="text"name="nama_barang"placeholder="nama_barang"> <br>
      <input type="number"name="stok_barang"placeholder="stok_barang"> <br>
      <input type="number"name="harga_barang"placeholder="harga_barang"> <br>
      <input type="text"name="detail_barang"placeholder="detail_barang"> <br>
      <button type="submit">Tambah</button>
    </form>
  </div>
</body>
</html>