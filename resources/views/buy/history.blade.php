<div id="container">
  <h3>history transaksi</h3>
  <ul>
    @foreach( $dataTransaksi as $data )
    <li>id : {{ $data->id  }}</li>
    <li>nama pembeli :{{ $data->name  }}</li>
    <li>id barang : {{ $data->id_barang  }}</li>
    <li>nama barang : {{ $data->nama_barang  }}</li>
    <li>harga barang : {{ $data->harga_barang  }}</li>
    <li>detail barang : {{ $data->detail_barang  }}</li>
    <li>dibayar : {{ $data->dibayar }}</li>
    <li>waktu : {{ $data->waktu_transaksi }}</li>
    <li>setelah: {{ $data->created_at->locale('id')->diffForHumans() }}</li>
    <br>
    @endforeach
  </ul>
</div>