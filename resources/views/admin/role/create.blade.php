@extends('admin.layout.master')

@section('content')

<link rel="{{asset('public/stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css')}}">
<link rel="{{asset('public/stylesheet" href="vendors/font-awesome/css/font-awesome.min.css')}}">
<link rel="{{asset('public/stylesheet" href="vendors/themify-icons/css/themify-icons.css')}}">
<link rel="{{asset('public/stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css')}}">
<link rel="{{asset('public/stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css')}}">
<link rel="{{asset('public/stylesheet" href="assets/css/style.css')}}">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>


<script>
    $(document).ready(function() {
        $(".mul-select").select2({
            placeholder: "pilih permission ....",
            tags: true,
            tokenSeparators: ['/', ',', ';', ' '],
            width: "100%"
        });

    })
</script>


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
                    <li><a href="#">Forms</a></li>
                    <li class="active">Basic</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
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

                        <form action="{{route('roles.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Role</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="txtnama_role" placeholder="Text" class="form-control"><small class="form-text text-muted">Nama Role</small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="select" class=" form-control-label">Permission</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="optionid_permission[]" id="select" class="mul-select" multiple='true'>

                                        @foreach($allPermission as $permission)

                                        <option value={{$permission->id}}>
                                            {{$permission -> name}}
                                        </option>

                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Simpan
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Reset
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div><!-- .Animated -->
    </div><!-- .content -->
    @endsection