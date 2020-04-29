<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Struk Pembeli</title>
</head>
<body>
<h3>Data Pelanggan</h3>
<div class="container">
<div>
<label>name :{{ $fotostudio->nama }}</label>
</div>
<div>
<label>alamat :{{ $fotostudio->alamat }}</label>
</div>
<div>
<label>nomber :{{$fotostudio->nomber}}</label>
</div>
<div>
<label>tanggal cetak :{{($fotostudio->tgl_cetak)}}</label>
</div>
<div>
<label>tanggal ambil :{{($fotostudio->tgl_ambil)}}</label>
</div>
<div>
<label>paket :{{ $fotostudio->paket }}</label>
</div>
  <div  id="daftar_foto">

   </div>
</div>
  <script src="/admin/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script>
let datafoto = {{ $fotostudio->foto}}
let tagDiv = $("#daftar_foto");

tagDiv.html(" ");
$.each(datafoto,function(index, value) {
 console.log(value)
tagDiv.append(`
  <img src="/assets/img/fotostudio/${val}">
`)
});
     </script>
</body>
</html>
 
