@extends('layouts.admin')
@section('content')
<div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Gallery List</h4>
                            <div class="add-product">
                                 <button type="button" class="btn btn-custon-rounded-four btn-primary Primary mg-b-10" href="#" data-toggle="modal" data-target="#PrimaryModalhdbgcl">Add Library</button>
                            </div>
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                         <th>No</th>
                                         <th>Foto Gallery</th> 
                                         <th>Kategori Foto</th>
                                         <th>Setting</th>
                                    </tr>
                                    @php $no =1; @endphp
                                  @foreach($gallery as $data)
                                  <tr>
                                  <td>{{ $no++ }}</td>
                                    <td><img src="{{ asset('assets/img/galery/'.$data->foto_galery) }}" alt="" height="500px" width="500px"></td>
                                    <td>{{ $data->kategorifoto->kategori_foto }}</td>
                                           <td>
                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><a href="{{ route('gallery.edit', $data->id) }}"></button>
                                            </td>
                                            <td>
                                          <form action="{{ route('gallery.destroy', $data->id) }}" method="post">
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
          <div id="PrimaryModalhdbgcl" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header header-color-modal bg-color-1">
                                        <h4 class="modal-title">Create Gallery</h4>
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                    </div>
                                        <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="review-content-section">   
                                                                <form action="{{ route('gallery.store') }}" class="needsclick add-professors" method="post" enctype="multipart/form-data">
                                                            {{ csrf_field() }}
                                                            <div class="container">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                    <label for="">Foto gallery</label>
                                                                    <input type="file" class="form-control" name="foto_galery">
                                                                </div>
                                                                    <div class="form-group">
                                                                    <label for="">Kategori Foto</label>
                                                                    <select name="kategori_foto" class="form-control">
                                                                @foreach($kategorifoto as $data)
                                                                    <option value="{{ $data->id }}">
                                                                        {{ $data->kategori_foto }}
                                                                    </option>
                                                                @endforeach
                                                                    </select>
                                                                    </div>
                                                                <div class="modal-footer">
                                                              <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                                Simpan Data
                                                                </button>
                                                            </div>
                                                                </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>   
                                </div>
                            </div>
                        </div>
@endsection