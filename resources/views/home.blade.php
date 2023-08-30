@extends('layouts.app')
@section('container')

<button>{{ Auth::user()->username }}</button>
<br>
<br>
<form action="/logout" method="post">
  @csrf
  <button type="submit">logout</button>
</form>
<br>
@can('admin')
<button><a href="/add">Tambah Data</a></button>
<br>
@foreach( $uang as $uangs )
<span>total uang : Rp.{{ number_format($uangs->uang,0,',','.') }} </span>
@endforeach
<br>
<br>
<a href="/buy/history">lihat transaksi</a>
<br>
@endcan
<br>
<div>
  @include('layouts.data')

</div>
@endsection