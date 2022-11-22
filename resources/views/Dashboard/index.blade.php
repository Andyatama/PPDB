@extends('template.layout')

@section('title')
    Dashboard
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Selamat Datang, {{Auth()->user()->name}}</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Siswa</h4>
                        </div>
                        <div class="card-body">
                            {{ $siswa->count() }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="fas fa-cog"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Jurusan</h4>
                        </div>
                        <div class="card-body">
                            {{ $jurusan->count() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection