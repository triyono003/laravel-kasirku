@extends('layouts.app')
@section('container')

 <button>{{ Auth::user()->username }}</button>
 <br>
 <br>
 <form action="/logout" method="post">
   @csrf
   <button type="submit">logout</button>
 </form>
 @can('admin')
 <button><a href="/add">Tambah Data</a></button>
 @endcan
  <div>
    @include('layouts.data')
    
  </div>
@endsection