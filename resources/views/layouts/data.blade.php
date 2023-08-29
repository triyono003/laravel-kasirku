

<table border=""style="border-collapse:collapse;">
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Stok</th>
    <th>Harga</th>
    <th>Detail</th>
    <th>Opsi</th>
  </tr>
  @foreach( $barang as $index=>$data )
  <tr>
    <td>{{ $index+1 }}</td>
    <td>{{ $data->nama_barang }}</td>
    <td>{{ $data->stok_barang }}</td>
    <td>{{ number_format($data->harga_barang, 0,',','.') }}</td>
    <td>{{ $data->detail_barang }}</td>
    <td><a href="buy/{{$data->id}}/confirmation">beli</a></td>
  </tr>
  @endforeach
</table>
