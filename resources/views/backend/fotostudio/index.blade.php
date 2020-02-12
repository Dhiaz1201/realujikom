@extends('layouts.admin')
@section('content')
<div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Katergori Foto List</h4>
                            <div class="add-product">
                            @foreach ($fotostudio as $data )
                                <a href="{{ route('fotostudio.show', $data->id) }}">Detail</a>
                            @endforeach  
                            </div>
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                         <th>No</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>   
                                        <th>Nomber Pelanggan</th>
                                        <th>Tanggal Cetak</th>
                                        <th>Tanggal Ambil</th>
                                        <th>Paket</th>
                                        <th>Ekstra</th>
                                        <th>Foto</th>
                                         <th>Setting</th>
                                    </tr>
                                    @php $no =1; @endphp
                                  @foreach($fotostudio as $data)
                                  <tr>
                                 <td>{{ $no++ }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->alamat }}</td>
                                    <td>{{$data->nomber}}</td> 
                                    <td>{{($data->tgl_cetak)}}</td>         
                                    <td>{{($data->tgl_ambil)}}</td>         
                                    <td>{{ $data->paket }}</td>
                                        <td>{{$data->ekstra}}</td>  
                                    <td><img src="{{ asset('assets/img/fotostudio/'.$data->foto) }}" alt="" height="500px" width="500px"></td>
                                         <td>
                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><a href="{{ route('fotostudio.edit', $data->id) }}"></button>
                                            </td>
                                            <td>
                                          <form action="{{ route('fotostudio.destroy', $data->id) }}" method="post">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                 <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </form>
                                        </td>
                                    </tr>
                                      @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

 