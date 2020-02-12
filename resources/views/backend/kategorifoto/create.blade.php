  @extends('layouts.admin')
                                    @section('content')
                                    <div class="container-fluid">
                                    <div id="myTabContent" class="tab-content custom-product-edit">
                                        <div class="product-tab-list tab-pane fade active in" id="description">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="review-content-section">   
                                                                <form action="{{ route('kategorifoto.store') }}" class="needsclick add-professors" method="post">
                                                                                {{ csrf_field() }}
                                                            <div class="container">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                                <label for="">Kategori Foto</label>
                                                                <input class="form-control" type="text" name="kategori_foto">
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                                Simpan Data
                                                                </button>
                                                            </div>
                                                            <div class="form-group">
                                                                <a href="{{ url('home.kategorifoto') }}" class="btn btn-success">Kembali</a>
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
     
