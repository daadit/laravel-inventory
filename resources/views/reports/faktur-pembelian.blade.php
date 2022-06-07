<!DOCTYPE html>
<html>

<head>
    <title>Faktur Pembelian Barang</title>
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/auth/logo.png">
    <style type="text/css">
        .head {
            border-style: double;
            border-width: 3px;
            border-color: white;
        }

        .body {
            border-collapse: collapse;
            border: 1px;
            border-color: black;
        }

        table tr .text2 {
            text-align: right;
            font-size: 13px;
        }

        table tr .text {
            text-align: center;
            font-size: 13px;
        }

        table tr td {
            font-size: 13px;
        }
    </style>
</head>

<body>
    <center>
        <table class="head" width="625">
            <tr>
                <td><img src="{{ asset('assets') }}/images/auth/logo.png" width="90" height="90"></td>
                <td>
                    <center>
                        <!-- <font size="4">TOKO 73</font><br> -->
                        <font size="5"><b>TOKO OBAT SIBOLGA SIMARPAUNG</b></font><br>
                        <font size="2">Alamat : Kota Sibolga, Sumatera Utara</font><br>
                        <font size="2"><i>Email : sibolgasimarpaung@gmail.com Telp./Fax 0822-9807-5713</i></font>
                    </center>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <table width="625" class="head">
                <tr>
                    <td class="text2">Sibolga, <?= date("d M Y"); ?></td>
                </tr>
            </table>
        </table>
        <table class="head" style="margin-bottom: 20px;">
            <tr>
                <td>Faktur Pembelian Barang</td>
            </tr>
        </table>
        <table class="head" style="margin-bottom: 20px;">
            @foreach ($pembelian as $number => $data)
                <tr>
                    <td width="40%">No. Faktur</td>
                    <td><strong>{{ $data->nofaktur }}</strong></td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td><strong>{{ $data->tglmasuk }}</strong></td>
                </tr>
                <tr>
                    <td>Supplier</td>
                    <td><strong>{{ $data->namasupplier }}</strong></td>
                </tr>
            @endforeach
        </table>
        <table border="1" class="body" width="700">
            <thead>
                <tr style="height: 25px;">
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Qty</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($detailpembelian as $number => $data)
                    <tr style="height: 20px; text-align: center;">
                        <td>{{ $data->kodebarang }}</td>
                        <td>{{ $data->namabarang }}</td>
                        <td>@currency($data->hargabeli)</td>
                        <td>{{ $data->qty }}</td>
                        <td>@currency($data->jumlah)</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </center>
</body>

<script>
    window.print();
</script>

</html>