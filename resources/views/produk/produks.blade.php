@extends('layouts.main')

@section('container')

    @if (Session::has('success'))    
        <p class="alert alert-success">{{ Session::get('success') }}</p><br>
    @endif

    <a class="btn btn-info mb-2" href="produks/create">Tambah Data Produk</a>

    <form action="{{ url('produks') }}" method="GET">
        {{-- <input type="text" name="keyword" value="{{ $keyword }}"> --}}
          <div class="form-group align-items-center">
            <input type="text" class="form-control" name="keyword" id="searching"  placeholder="cari data..." value="{{ $keyword }}">
          </div>
          <button type="submit" class="btn">Cari</button>
    </form>
    <br>

        <table class="table-bordered table">
            <tr>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Photo</th>
                <th colspan="2">UPDATE/HAPUS</th>
            </tr>
            @foreach ($datas as $data)
                <tr>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->category->nama }}</td>
                    <td>{{ $data->deskripsi }}</td>
                    <td>{{ $data->harga }}</td>
                    <td> <img src="img/{{ $data->photo }}" style="width: 300px"> </td>
                    <td><a class="btn btn-info" href="/produks/{{ $data->id }}/edit">Update</a></td>
                    <td>
                        <form action="{{ url('produks/'.$data->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        {{ $datas->links() }}
@endsection
