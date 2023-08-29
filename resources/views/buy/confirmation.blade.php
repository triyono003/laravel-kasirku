<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h2>konfirmasi pembayaran</h2>
 <ul>
   <li>
   nama :  {{ $barang->nama_barang }}
   </li>
   <li>
   harga : {{ $barang->harga_barang }}
   </li>
 </ul>
 <form action="" method="post">
   @csrf
   <input type="text">
 </form>
</body>
</html>