<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <span>@include('layouts.backToHome')</span>
  <h2>konfirmasi pembayaran</h2>
  <ul>

    <li>
      nama :  {{ $barang->nama_barang }}
    </li>
    <li>
      harga : {{ $barang->harga_barang }}
    </li>
    <li>
      detail : {{ $barang->detail_barang }}
    </li>

  </ul>
  <br> <br>
 
  <br> <br>
@foreach( $uang as $data )
uang admin : {{ $data->uang }}
@endforeach


  <br> <br>
  <form action="" method="post">
    @csrf
    <label for="userinput">
      masukan uang
      <input type="number"name="userinput"value="0">
    </label> <br>
    <label for="admininput">
      kembalian
      <input type="number"name="admininput"value="0">
    </label> <br>
    <button type="submit">simpan</button>
  </form>
  <br> <br>
</body>
</html>