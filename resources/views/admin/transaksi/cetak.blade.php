<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Pembayaran</title>
    <link rel="stylesheet" href="/assets/css-bs/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/custom/custom.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <style>
        body {
            background: url('/assets/img/bglaundry5.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #333;
            font-family: 'Poppins', sans-serif;
        }

        .invoice-container {
            max-width: 700px;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.2);
            margin-top: 40px;
        }

        h6 {
            font-weight: 700;
            color: rgb(133, 185, 241);
            border-bottom: 3px solid #007bff;
            display: inline-block;
            padding-bottom: 8px;
        }

        .invoice-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .invoice-header img {
            width: 80px;
        }

        .invoice-info {
            margin-top: 20px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 10px;
        }

        .table {
            margin-top: 20px;
        }

        .table thead {
            background: rgb(133, 185, 241);
            color: white;
            font-weight: bold;
        }

        .table tbody tr:hover {
            background: #f1f1f1;
        }

        .print-btn {
            width: 100%;
            background: rgb(127, 176, 228);
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            transition: 0.3s;
            cursor: pointer;
        }

        .print-btn:hover {
            background: #0056b3;
            transform: scale(1.05);
        }

        @media print {
            @page {
                margin: 0;
            }
            .print-btn {
                display: none;
            }

            body {
                background: white;
                margin: 0;
                padding: 0;
            }

        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center vh-100">

    <div class="invoice-container">
        <div class="invoice-header">
            <h6><i class="fas fa-receipt"></i> Invoice Pembayaran</h6>
            <img src="/assets/img/cemarablue.png" alt="Logo">
        </div>

        <div class="invoice-info">
            <p><strong>Kode Invoice:</strong> {{$get->kode_invoice}}</p>
            <p><strong>Tanggal Pembayaran:</strong> {{$tgl}}</p>
            <p><strong>Kasir:</strong> {{ Auth::user()->name }}</p>
        </div>
        <table class="table table-bordered text-center">
            <thead>
            <tr>
    <th style="color: black;">Nama</th>
    <th style="color: black;">Jumlah</th>
    <th style="color: black;">Total Pembayaran</th>
    <th style="color: black;">Kembalian</th>
</tr>

            </thead>
            <tbody>
                <tr>
                    <td>{{$get->nama_member}}</td>
                    <td>{{$get->qty}}</td>
                    <td><strong>Rp. {{ number_format($get->total, 0, ',', '.') }}</strong></td>
                    <td><strong>Rp. {{ number_format($get->kembalian, 0, ',', '.') }}</strong></td>
                </tr>
            </tbody>
        </table>

        <button class="print-btn" onclick="window.print();">
            <i class="fas fa-print"></i> Cetak Invoice
        </button>
    </div>

</body>

</html>