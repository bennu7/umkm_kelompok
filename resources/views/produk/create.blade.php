@extends('layouts.main')

@section('container')
    <div class="card">
        <form action="/produks" method="POST" enctype="multipart/form-data">
            @csrf
            
            @include('produk._form')
        </form>
    </div>
@endsection