 <div id="PrimaryModalhdbgcl-{{$data->id}}" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header header-color-modal bg-color-1">
                                        <h4 class="modal-title">Edit Gallery</h4>
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                    </div>
                                        <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="review-content-section">   
                                                                <form action="{{ route('kategorifoto.update',$data->id) }}" class="needsclick add-professors" method="post" enctype="multipart/form-data">
                                                                  <input name="_method" type="hidden" value="PATCH">
                                                            {{ csrf_field() }}
                                                            <div class="container">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <label for="">Kategori Foto</label>
                                                                    <input class="form-control" value="{{ $data->kategori_foto }}" type="text" name="kategori_foto">
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