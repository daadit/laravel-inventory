@extends('layouts.app')

@section('menu')

<ul class="pcoded-item pcoded-left-item">
    <li class="">
        <a href="{{ route('home') }}">
            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
            <span class="pcoded-mtext">Dashboard</span>
        </a>
    </li>
    <li class="pcoded-hasmenu">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
            <span class="pcoded-mtext">Master</span>
        </a>
        <ul class="pcoded-submenu">
            <li class="">
                <a href="{{ route('user') }}">
                    <span class="pcoded-mtext">User</span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('jenis') }}">
                    <span class="pcoded-mtext">Jenis Barang</span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('satuan') }}">
                    <span class="pcoded-mtext">Satuan Barang</span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('supplier') }}">
                    <span class="pcoded-mtext">Supplier</span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('barang') }}">
                    <span class="pcoded-mtext">Barang</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="pcoded-hasmenu active pcoded-trigger">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
            <span class="pcoded-mtext">Transaksi</span>
        </a>
        <ul class="pcoded-submenu">
            <li class="active">
                <a href="{{ route('pembelian') }}">
                    <span class="pcoded-mtext">Pembelian</span>
                </a>
            </li>
            <li class=" ">
                <a href="{{ route('penjualan') }}">
                    <span class="pcoded-mtext">Penjualan</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="pcoded-hasmenu">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="feather icon-file-minus"></i></span>
            <span class="pcoded-mtext">Laporan</span>
        </a>
        <ul class="pcoded-submenu">
            <li class=" ">
                <a href="{{ route('report-stok-barang') }}">
                    <span class="pcoded-mtext">Stok Barang</span>
                </a>
            </li>
            <li class=" ">
                <a href="{{ route('report-pembelian') }}">
                    <span class="pcoded-mtext">Pembelian</span>
                </a>
            </li>
            <li class=" ">
                <a href="{{ route('report-penjualan') }}">
                    <span class="pcoded-mtext">Penjualan</span>
                </a>
            </li>
        </ul>
    </li>
</ul>

@endsection

@section('content')

<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <div class="d-inline">
                                    <h4>Form Pembelian</h4>
                                    <span>This page is for managing form pembelian.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('home') }}"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Transaksi</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('pembelian') }}">Pembelian</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Tambah</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row"> 
                        <div class="col-lg-12">
                            <div class="card">
                                {{-- <div class="card-header">
                                    <div class="row justify-content-end">
                                        <div class="col-lg-6">
                                            @if (session('success-message'))
                                                <div class="alert alert-success border-success">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <i class="icofont icofont-close-line-circled"></i>
                                                    </button>
                                                    <strong>Success!</strong> {{ session('success-message') }}
                                                </div>
                                            @elseif (session('failed-message'))
                                                <div class="alert alert-warning border-warning">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <i class="icofont icofont-close-line-circled"></i>
                                                    </button>
                                                    <strong>Error!</strong> {{ session('failed-message') }} : {{ $errors->content->first() }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label>No. Faktur</label>
                                            <div class="form-group">
                                                <input type="text" value="{{ $faktur }}" readonly name="faktur" class="form-control" placeholder="No. Faktur" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Tanggal Masuk</label>
                                            <div class="form-group">
                                                <input type="date" value="{{ $datenow }}" name="tanggal" class="form-control" placeholder="Tanggal Masuk" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label>Supplier</label>
                                            <div class="input-group">
                                                <input type="hidden" class="idsupplier" id="idsupplier" name="idsupplier">
                                                <input type="text" readonly name="namasupplier" class="form-control namasupplier" placeholder="Supplier" required>
                                                <span data-toggle="modal" data-target="#modalSupplier" class="input-group-addon" id="carisupplier"><i class="feather icon-search"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label>Kode Barang</label>
                                            <div class="input-group">
                                                <input type="text" readonly name="kodebarang" class="form-control kodebarang" placeholder="Kode Barang" required>
                                                <span data-toggle="modal" data-target="#modalBarang" class="input-group-addon" id="caribarang"><i class="feather icon-search"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <label>Nama Barang</label>
                                            <div class="form-group">
                                                <input type="text" readonly name="namabarang" class="form-control namabarang" placeholder="Nama Barang" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <label>Harga</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">Rp</span>
                                                <input type="text" readonly name="faktur" class="form-control hargabarang" placeholder="0" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <label>Qty</label>
                                            <div class="form-group">
                                                <input type="text" name="qty" class="form-control" placeholder="Qty" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <button class="btn btn-inverse btn-sm" style="margin-top: 28px">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" width="100%" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    {{-- <th style="text-align: center;">No</th> --}}
                                                    <th>Kode Barang</th>
                                                    <th>Nama Barang</th>
                                                    <th>Harga</th>
                                                    <th>Qty</th>
                                                    <th>Jumlah</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($pembelian as $number => $data)
                                                    <tr>
                                                        {{-- <td width="8%">{{ ++$number }}</td> --}}
                                                        <td>{{ $data->nofaktur }}</td>
                                                        <td>{{ $data->tglmasuk }}</td>
                                                        <td>{{ $data->namasupplier }}</td>
                                                        <td>{{ $data->totalitem }}</td>
                                                        <td>@currency($data->totalbayar)</td>
                                                        <td class="text-center">
                                                            <button class="btn btn-inverse btn-mini" data-toggle="modal"
                                                                data-target="#editModal{{ $data->nofaktur }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                                    fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                                                </svg>
                                                            </button>
                                                            <button class="btn btn-inverse btn-mini" data-toggle="modal"
                                                                data-target="#deleteModal{{ $data->nofaktur }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                                    fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                                    <path fill-rule="evenodd"
                                                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                                </svg>
                                                            </button>
                                                            <button class="btn btn-success btn-mini" data-toggle="modal"
                                                                data-target="#detailModal{{ $data->nofaktur }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                                                </svg>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>
                                    <br>
                                    {{-- <div class="row justify-content-end">
                                        <div class="col-lg-3">
                                        </div>
                                    </div> --}}
                                    <div class="row justify-content-end">
                                        <div class="col-lg-3">
                                            <button type="button" onclick="window.location='{{ route('pembelian') }}'" class="btn btn-default btn-sm">
                                                Kembali
                                            </button>
                                            <button class="btn btn-inverse btn-sm">
                                                Simpan & Cetak Faktur
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal supplier --}}
<div class="modal fade" id="modalSupplier" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="myModalLabel">Cari supplier</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="dt-responsive table-responsive">
                    <table id="simpletablemodal" width="100%" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th style="text-align: center;">No</th>
                                <th>Nama</th>
                                <th>No. Telp</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($supplier as $number => $data)
                                <tr>
                                    <td width="8%">{{ ++$number }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->notelp }}</td>
                                    <td>{{ $data->alamat }}</td>
                                    <td class="text-center">
                                        <button class="btn btn-inverse btn-mini btn-pilihsupplier" data-id="{{ $data->id }}" data-nama="{{ $data->nama }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

{{-- Modal barang --}}
<div class="modal fade" id="modalBarang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="myModalLabel">Cari barang</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="dt-responsive table-responsive">
                    <table id="simpletablemodaltwo" width="100%" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                {{-- <th style="text-align: center;">No</th> --}}
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Stok</th>
                                <th>Harga Beli</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barang as $number => $data)
                                <tr>
                                    <td>{{ $data->kode }}</td>
                                    <td>{{ $data->namabarang }}</td>
                                    <td>{{ $data->stok }} {{ $data->namasatuan }}</td>
                                    <td>@currency($data->hargabeli)</td>
                                    <td class="text-center">
                                        <button class="btn btn-inverse btn-mini btn-pilihbarang" data-kode="{{ $data->kode }}" data-nama="{{ $data->namabarang }}" data-harga="{{ $data->hargabeli }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{ asset('bower_components') }}\jquery\js\jquery.min.js"></script>
<script>
    $('.btn-pilihsupplier').on('click', function() {
        const id = $(this).data('id');
        const nama = $(this).data('nama');
        $('.idsupplier').val(id);
        $('.namasupplier').val(nama);
        $('#modalSupplier').modal('hide');
    });

    $('.btn-pilihbarang').on('click', function() {
        const kode = $(this).data('kode');
        const nama = $(this).data('nama');
        const harga = $(this).data('harga');
        $('.kodebarang').val(kode);
        $('.namabarang').val(nama);
        $('.hargabarang').val(harga);
        $('#modalBarang').modal('hide');
    });
</script>

@endsection