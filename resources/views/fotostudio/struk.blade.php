<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Struk Pembeli</title>
</head>
<body>
<h3>struk Pelanggan</h3>
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
</div>
</body>
</html>