@extends('layouts.admin')
@section('content')
<style>
.btncolor{
   background-color: #f44336;
    border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button3 {background-color: #f44336;}
</style>
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
                                            <button data-toggle="modal" data-target="#PrimaryModalhdbgcl-{{$data->id}}" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><a href=""></button>
                                            </td>
                                            <td>
                                          {{-- <form action="{{ route('gallery.destroy', $data->id) }}" method="post">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE"> --}}
                                              <button data-toggle="modal" data-target="#DangerModalalert" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                            {{-- </form> --}}
                                        </td>
                                    </tr>
                                    @include('backend.gallery.edit')
                                      @endforeach
                                </table>
                                @include('sweetalert::alert')
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

                        @foreach ($gallery as $data )
                              <div id="DangerModalalert" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                    <div class="modal-body">
                                        <span class="educate-icon educate-danger modal-check-pro information-icon-pro"></span>
                                        <h2>Danger!</h2>
                                        <p>ANDA YAKIN INGIN MENGHAPUS DATA INI?!</p>
                                    </div>
                                    <div class="modal-footer danger-md">
                                          <form action="{{ route('gallery.destroy', $data->id) }}" method="post"> 
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="button3 btncolor">
                                                                Hapus
                                                                </button>
                                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endforeach              
@endsection