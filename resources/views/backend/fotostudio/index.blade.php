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
                            <h4>Katergori Foto List</h4>
                            {{-- <div class="add-product">
                            @foreach ($fotostudio as $data )
                                <a href="{{ route('fotostudio.show', $data->id) }}">Detail</a>
                            @endforeach  
                            </div> --}}
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
                                 
                                         <td>
                                         <button  data-toggle="modal" data-target=".bd-example-modal-lg-{{ $data->id }}" title="Image"  id="edit-data-{{ $data->id}}" data-id="{{$data->id}}" class="pd-setting-ed"><i class="fa  fa-picture-o" aria-hidden="true"></i></button>
                                         {{-- <a href=""><button data-toggle="tooltip" title="Edit" class="pd-setting-ed" data-toggle="modal" data-target="#PrimaryModalhdbgcl"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a> --}}
                                            {{-- <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><a href="{{ route('fotostudio.show', $data->id) }}"></button> --}}
                                            </td>
                                            <td>
                                          <form action="{{ route('fotostudio.destroy', $data->id) }}" method="post">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                 <button data-toggle="modal" data-target="#DangerModalalert" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </form>
                                        </td>
                                    </tr>
                                    @include('backend.fotostudio.show')
                                      @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
 

 @push('js')
<script>
@foreach ($fotostudio as $key => $value )
  $('#edit-data-{{$value->id}}').on('click', function(e) {
       e.preventDefault()
       let id = $(this).data('id');
     $.ajax({
        url:"/home/fotostudio/" + id ,
        type:'GET',
        datatype : 'json',
        success:function(berhasil){
          console.log(berhasil)
          let ambildata =  $("#ambildata-"+ id)

          $("#ambildata-"+ id).html('')
            $.each(JSON.parse(berhasil.data.foto), (key, val) => {
                $("#ambildata-"+ id).append(
                `
                    <img src="/assets/img/fotostudio/${val}" alt="" style="height: 250px; width: 250px;" class="img-fluid"> 
                `
                    )
            })
          },
         error:function (gagal){
         console.log(gagal)
      }
})
  })
@endforeach
     </script>
 @endpush