<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penjualan Laundry</title>
    <link rel="stylesheet" href="/assets/css-bs/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .container {
            max-width: 900px;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }
        h4 {
            font-weight: bold;
            color: #333;
        }
        table {
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
        }
        thead {
            background: #007bff;
            color: white;
        }
        thead th {
            padding: 12px;
        }
        tbody tr:hover {
            background: #f1f1f1;
        }
        .print-button {
            margin-top: 15px;
        }
    </style>
</head>
<body>

<div class="container text-center">
    <h4 class="mt-3">Laporan Transaksi Laundry</h4>
    <p class="text-muted"><?= date('l, d F Y'); ?></p>

    <table class="table table-bordered table-hover mt-4 text-center">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Invoice</th>
                <th>Nama Konsumen</th>
                <th>Tanggal Pembelian</th>
                <th>Total Pembayaran</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?> 
            @foreach ($get as $a)
            <tr>
                <td><?= $i++; ?></td>
                <td>{{$a->kode_invoice}}</td>
                <td>{{$a->nama_member}}</td>
                <td>{{ date('d M Y, H:i', strtotime($a->created_at)) }}</td>
                <td><strong>Rp. {{ number_format($a->total, 0, ',', '.') }}</strong></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <button class="btn btn-primary print-button" onclick="window.print();">Print Laporan</button>
</div>

</body>
</html>
