@extends('admin.layout.master')

@section('content')
<link rel="stylesheet" href="{{asset('public/admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('public/admin/vendors/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('public/admin/vendors/themify-icons/css/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('public/admin/vendors/flag-icon-css/css/flag-icon.min.css')}}">
<link rel="stylesheet" href="{{asset('public/admin/vendors/selectFX/css/cs-skin-elastic.css')}}">
<link rel="stylesheet" href="{{asset('public/admin/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('public/admin/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">

<link rel="stylesheet" href="{{asset('public/admin/assets/css/style.css')}}">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Table</a></li>
                    <li class="active">{{$pagename}}</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">

                    @if(session()->get('sukses'))
                    <div class="alert alert-success">
                        {{session()->get('sukses')}}
                    </div>

                    @endif

                    <div class="card-header">
                        <strong class="card-title">{{$pagename}}</strong>
                        @can('tugas-create')
                        <a href="{{route('tugas.create')}}" class="btn btn-primary pull-right"> Tambah </a>
                        @endcan
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Kategori</th>
                                    <th>Keterangan</th>
                                    <th>Status</th>
                                    @role('admin|management')
                                    <th>Edit</th>
                                    <th>Hapus</th>
                                    @endrole
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($data as $i=>$row)
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{$row->nama_tugas}}</td>
                                    <td>{{$row->id_kategori}}</td>
                                    <td>{{$row->ket_tugas}}</td>
                                    <td>{{$row->status_tugas}}</td>
                                    @role('admin|management')
                                    <td>
                                        @can('tugas-edit')
                                        <a href="{{route('tugas.edit', $row->id)}}" class='btn btn-primary'>Edit </a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('tugas-destroy')
                                        <form action="{{route('tugas.destroy', $row->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Hapus </button>
                                        </form>
                                        @endcan
                                    </td>
                                    @endrole
                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->



<script src="{{asset('public/admin/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/admin/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('public/admin/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/admin/vendors/jszip/dist/jszip.min.js')}}"></script>
<script src="{{asset('public/admin/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('public/admin/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{asset('public/admin/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('public/admin/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('public/admin/vendors/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('public/admin/assets/js/init-scripts/data-table/datatables-init.js')}}"></script>

@endsection