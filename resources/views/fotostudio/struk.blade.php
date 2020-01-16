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
<table border="1" style="width:100%">
    <thead>
        <tr>
            <th width="20px">No.</th>
              <th>Kode pelanggan</th>
              <th>Nama</th>
              <th>Alamat</th>   
               <th>Cetak Ukuran</th>
               <th>Tanggal Cetak</th>
               <th>Tanggal Ambil</th>
                <th>Paket</th>
                <th>Ekstra</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1 ;?>
        @foreach ($fotostudio as $data)
            <tr>
                 <td>{{ $no++ }}</td>
                    <td>{{$data->kode}}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>{{$data->nomber}}</td>
                     <td>{{($data->tgl_cetak)}}</td>         
                     <td>{{($data->tgl_ambil)}}</td>         
                      <td>{{ $data->paket }}</td>
                       <td>{{$data->ekstra}}</td>  
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>