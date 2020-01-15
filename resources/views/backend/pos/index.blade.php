@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Halaman Artikel Berita</div>
                <br>
                <center><a href="{{ route('fotostudio.create') }}" class="btn btn-primary">Tambah</a></center>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Kode pelanggan</th>
                                <th>Nama</th>
                                <th>Alamat</th>   
                                <th>Nomber Pelanggan</th>
                                <th>Cetak Ukuran</th>
                                <th>Tanggal Cetak</th>
                                <th>Tanggal Ambil</th>
                                <th>Jenis</th>
                                <th>Foto</th>
                                <th clospan="3" style="text-align: center;">Aksi</th>
                            </tr>
                @php $no =1; @endphp
                @foreach($fotostudio as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{$data->kode_pelanggan}}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>{{$data->number}}</td>
                     <td>{{$data->cetak_ukuran}}</td> 
                     <td>{{($data->tanggal_cetak)}}</td>         
                     <td>{{($data->tanggal_ambil)}}</td>         
                      <td>{{ $data->jenis }}</td>  
                       <td><img src="{{ asset('assets/img/fotostudio/'.$data->foto) }}" alt="" height="500px" width="500px"></td>
                           
                    <td><a href="{{ route('fotostudio.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><a href="{{ route('fotostudio.show', $data->id) }}" class="btn btn-success">Detail Data</a></td>
                    <td><form action="{{ route('fotostudio.destroy', $data->id) }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn -sm btn-danger" type="submit">Hapus Data</button>
                    </form>
                    </td>
                </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
