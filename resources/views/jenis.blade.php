@extends('layouts.app')

@section('menu')

<ul class="pcoded-item pcoded-left-item">
    <li class="">
        <a href="{{ route('home') }}">
            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
            <span class="pcoded-mtext">Dashboard</span>
        </a>
    </li>
    <li class="pcoded-hasmenu active pcoded-trigger">
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
            <li class="active">
                <a href="{{ route('jenis') }}">
                    <span class="pcoded-mtext">Jenis Barang</span>
                </a>
            </li>
            <li class=" ">
                <a href="{{ route('satuan') }}" target="_blank">
                    <span class="pcoded-mtext">Satuan Barang</span>
                </a>
            </li>
            <li class=" ">
                <a href="{{ route('supplier') }}" target="_blank">
                    <span class="pcoded-mtext">Supplier</span>
                </a>
            </li>
            <li class=" ">
                <a href="{{ route('barang') }}" target="_blank">
                    <span class="pcoded-mtext">Barang</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="pcoded-hasmenu">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
            <span class="pcoded-mtext">Transaksi</span>
        </a>
        <ul class="pcoded-submenu">
            <li class=" ">
                <a href="{{ route('pembelian') }}">
                    <span class="pcoded-mtext">Pembelian</span>
                </a>
            </li>
            <li class=" ">
                <a href="{{ route('penjualan') }}" target="_blank">
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
                <a href="{{ route('report-pembelian') }}" target="_blank">
                    <span class="pcoded-mtext">Pembelian</span>
                </a>
            </li>
            <li class=" ">
                <a href="{{ route('report-penjualan') }}" target="_blank">
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
                                    <h4>Data Jenis</h4>
                                    <span>This page is for managing jenis data.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Master</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Jenis</a>
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
                                <div class="card-header">
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
                                    <button class="btn btn-mat btn-inverse" data-toggle="modal" data-target="#myModal">Tambah User</button>
                                    <a class="btn btn-mat btn-success" href="{{ route('reportuser') }}" target="__blank">Laporan User</a>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" width="100%" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center;">No</th>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                    <th>Role</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($user as $number => $data)
                                                    <tr>
                                                        <td width="8%">{{ ++$number }}</td>
                                                        <td>{{ $data->name }}</td>
                                                        <td>{{ $data->email }}</td>
                                                        <td>
                                                            @if ($data->role == 0)
                                                            <span class="label label-success">Administrator</span>
                                                            @elseif ($data->role == 1)
                                                                <span class="label label-primary">Pimpinan</span>
                                                            @elseif ($data->role == 2)
                                                                <span class="label label-warning">Karyawan</span>
                                                            @endif
                                                        </td>
                                                        <td class="text-center">
                                                            <button class="btn btn-inverse btn-mini" data-toggle="modal"
                                                                data-target="#editModal{{ $data->id }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                    fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                                                </svg>
                                                            </button>
                                                            <button class="btn btn-inverse btn-mini" data-toggle="modal"
                                                                data-target="#deleteModal{{ $data->id }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                    fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                                    <path fill-rule="evenodd"
                                                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                                </svg>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
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


<form action="{{ route('saveuser') }}" method="post">
    @method('POST')
    @csrf
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Add user</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Name" required> <br>
                        <input type="email" name="email" class="form-control" placeholder="Email" required> <br>
                        <input type="password" name="password" class="form-control" placeholder="Password" required> <br>
                        <select class="form-control" name="role" required>
                            <option value="0">Administrator</option>
                            <option value="1">Pimpinan</option>
                            <option value="2">Karyawan</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-inverse btn-sm">Add</button>
                </div>
            </div>
        </div>
    </div>
</form>

@foreach ($user as $data)
    <form action="{{ route('updateuser') }}" method="POST">
        @method('PUT')
        @csrf
        <div class="modal made" tabindex="-1" id="editModal{{ $data->id }}" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Update user</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" value="{{ $data->id }}" name="id" required />
                        <input type="text" class="form-control" value="{{ $data->name }}" autocomplete="off" name="name" placeholder="Name" required /> <br>
                        <input type="email" class="form-control" value="{{ $data->email }}" autocomplete="off" name="email" placeholder="Email" required /> <br>
                        <input type="password" class="form-control" value="{{ $data->password }}" readonly autocomplete="off" name="password" placeholder="Password" required /> <br>
                        <select class="form-control" name="role" required>
                            @if ($data->role == 0)
                                <option selected value="0">Administrator</option>
                                <option value="1">Pimpinan</option>
                                <option value="2">Karyawan</option>
                            @elseif ($data->role == 1)
                                <option selected value="1">Pimpinan</option>
                                <option value="0">Administrator</option>
                                <option value="2">Karyawan</option>
                            @elseif ($data->role == 2)
                                <option selected value="2">Karyawan</option>
                                <option value="0">Administrator</option>
                                <option value="1">Pimpinan</option>
                            @endif
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-inverse btn-sm">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <form action="{{ route('deleteuser') }}" method="POST">
        @method('DELETE')
        @csrf
        <div class="modal" tabindex="-1" id="deleteModal{{ $data->id }}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete user</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" required value="{{ $data->id }}" />
                        <h6>Are you sure you delete this data?</h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-inverse btn-sm">Yes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endforeach

@endsection