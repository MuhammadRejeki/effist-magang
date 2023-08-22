@extends('layout.main')
@section('container')

<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <p class="text-subtitle text-muted">
                {{ date('l'); }}, <i>{{ date('d M Y') }}</i>
            </p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/home') }}"> <i class="bi bi-laptop"></i> Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        *
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<section class="free-name">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">*</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                **
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="free-name">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">*</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h6>**</h6>
                                <p>
                                    Use <code>.***</code> for code
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection