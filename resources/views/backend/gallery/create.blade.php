                                    @extends('layouts.admin')
                                    @section('content')
                                    <div class="container-fluid">
                                    <div id="myTabContent" class="tab-content custom-product-edit">
                                        <div class="product-tab-list tab-pane fade active in" id="description">
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
                                                                <div class="form-group">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                                    Simpan Data
                                                                    </button>
                                                                </div>
                                                                <div class="form-group">
                                                                    <a href="{{ url('home/gallery/index') }}" class="btn btn-primary waves-effect waves-light">Kembali</a>
                                                                </div>
                                                                </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endsection
     