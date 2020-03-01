 {{-- <div id="PrimaryModalhdbgcl" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
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
                                                    <div class="form-group">
                                                                @foreach ($fotostudio as $data )
                                                                <img src="{{ asset('assets/img/fotostudio/'.$data->foto) }}" alt="" height="250px" width="250px">     
                                                                @endforeach
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>   
                                </div>
                            </div>
                        </div> --}}
                           
<div class="modal fade bd-example-modal-lg-{{$data->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalTitle2">Tambah Data Prestasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">close</i>
                </button>
            </div>
            <div class="modal-body">
                 <div class="form-group" id="ambildata">
                   
                 </div>
        </div>
    </div>
</div>
  <script>
            $.ajax({
                  type:'GET',
                  datatype : 'json',
                  success:function(berhasil){
                       $.each(berhasil.data,function(key,value){
                       $(".ambildata").append(
                       `
              <img src="asset('assets/img/fotostudio/'${value.foto}" alt="" height="500px" width="500px" > 
                        `
                        )
               })
          },
         error:function (gagal){
         console.log(gagal)
      }
})

     </script>