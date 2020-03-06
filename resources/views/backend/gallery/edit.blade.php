 <div id="PrimaryModalhdbgcl-{{ $data->id }}" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
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
                                                                <form action="{{ route('gallery.update',$data->id) }}" class="needsclick add-professors" method="post" enctype="multipart/form-data">
                                                              <input name="_method" type="hidden" value="PATCH">
                                                            {{ csrf_field() }}
                                                            <div class="container">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                     <label for="">Foto</label><br>
                                                                      <img src="{{ asset('assets/img/galery/'.$data->foto_galery) }}" alt="" height="250px" width="250px">
                                                                      <input type="file" class="form-control" name="foto_galery">
                                                                </div>
                                                                    <div class="form-group">
                                                                    <label for="">Kategori</label>
                                                                      <select name="kategori_foto" class="form-control">
                                                                           @foreach($kategorifoto as $item)
                                                                          <option value="{{ $item->id }}"
                                                                              {{ $data->kategori_foto ==
                                                                                  $item->id ? 'selected="selected"' : '' }}>
                                                                              {{ $item->kategori_foto }}
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