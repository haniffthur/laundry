@extends('admin.navbar')

@section('content')
<div class="panel-header" style="background-color: rgb(90, 227, 252);">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Selamat datang {{ Auth::user()->name }} !</h2>
                <h5 class="text-white op-7 mb-2">Selamat datang dan selamat bekerja !</h5>
            </div>
        </div>
    </div>
</div>
@endsection