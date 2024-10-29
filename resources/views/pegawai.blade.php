<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    {{-- <style>
        .vertical-table tbody tr {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            border-bottom: 1px solid #dee2e6;
            padding: 10px;
        }

        .vertical-table td,
        .vertical-table th {
            width: 100%;
            display: block;
            padding: 8px 0;
        }

        .vertical-table thead {
            display: none;
        }
    </style> --}}
    <div class="container">
        <center>
            <h4 class="my-4">Belajar Membuat Laporan PDF Menggunakan DOMPDF</h4>
        </center>
        <br>
        <a href="/pegawai/cetak_pdf" class="btn btn-primary my-4" target="_blank">Cetak PDF</a>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Pekerjaan</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($pegawai as $p)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->email }}</td>
                        <td>{{ $p->alamat }}</td>
                        <td>{{ $p->telepon }}</td>
                        <td>{{ $p->pekerjaan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
