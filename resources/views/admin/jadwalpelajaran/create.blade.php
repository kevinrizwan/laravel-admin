@extends('admin.layout.master')

@section('content')

<link rel="stylesheet" href="{{asset('public/admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('public/admin/vendors/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('public/admin/vendors/themify-icons/css/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('public/admin/vendors/flag-icon-css/css/flag-icon.min.css')}}">
<link rel="stylesheet" href="{{asset('public/admin/vendors/selectFX/css/cs-skin-elastic.css')}}">

<link rel="stylesheet" href="{{asset('public/admin/assets/css/style.css')}}">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

<div class="breadcrumbs">
  <div class="col-sm-4">
    <div class="page-header float-left">
      <div class="page-title">
        <h1>Data Kendaraan172</h1>
      </div>
    </div>
  </div>
  <div class="col-sm-8">
    <div class="page-header float-right">
      <div class="page-title">
        <ol class="breadcrumb text-right">
          <li><a href="#">Kendaraan172</a></li>
          <li><a href="#">Forms</a></li>
          <li class="active">Basic</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<div class="content mt-3">
  <div class="animated fadeIn">


  </div>
  <!--/.col-->

  <div class="col-lg-12">
    <div class="card">


      <div class="card-header">
        <strong>{{$pagename}}</strong>
      </div>
      <div class="card-body card-block">

        @if($errors->any())
        <div class="alert alert-danger">
          <div class="list-group">
            @foreach($errors->all() as $error)
            <li class="list-group-item">
              {{$error}}
            </li>
            @endforeach

          </div>

        </div>
        @endif

        <form action="{{route('jadwalpelajaran.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
          @csrf
          <div class="row form-group">
            <div class="col col-md-3">
              <label for="text-input" class=" form-control-label">No Plat172</label>
            </div>
            <div class="col-12 col-md-9">
              <input type="text" id="text-input" name="no_plat" placeholder="Masukkan no plat..." class="form-control" required>
            </div>
          </div>

          <div class="row form-group">
            <div class="col col-md-3">
              <label for="text-input" class=" form-control-label">Merek Kendaraan172</label>
            </div>
            <div class="col-12 col-md-9">
              <input type="text" id="text-input" name="merk_kendaraan" placeholder="Masukkan merek kendaraan..." class="form-control" required>
            </div>
          </div>
          <div class="row form-group">
            <div class="col col-md-3">
              <label for="text-input" class=" form-control-label">Nama Pemilik172</label>
            </div>
            <div class="col-12 col-md-9">
              <input type="text" id="text-input" name="nama_pemilik" placeholder="Masukkan nama pemilik..." class="form-control" required>
            </div>
          </div>
      </div>
    </div>
  </div>
  <div class="card-footer">
    <button type="submit" class="btn btn-primary btn-sm">
      <i class="fa fa-dot-circle-o"></i> Simpan
    </button>
    <button type="reset" class="btn btn-danger btn-sm">
      <i class="fa fa-ban"></i> Reset
    </button>
  </div>
  </form>
</div>
</div>

</div>
</div><!-- .animated -->
</div><!-- .content -->

<script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('vendors/popper.js/dist/umd/popper.min.js') }}"></script>

<script src="{{ asset('vendors/jquery-validation/dist/jquery.validate.min.js') }}"></script>
<script src="{{ asset('vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js') }}"></script>

<script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
@endsection('content')