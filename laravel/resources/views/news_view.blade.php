@extends('layout.main')
@section('container')

<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <p class="text-subtitle text-muted">
                Publish : <i>{{ date('d M Y H:i:s',strtotime($data->created_at)) }}</i>
            </p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/home') }}"> <i class="bi bi-laptop"></i> Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        News Detail
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
                    <h4 class="card-title">{{ $data->title }}</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <?php
                        $img = asset('assets/images/image-default.png');
                        if (is_file('./assets/images/news/' . $data->image)) $img = asset('assets/images/news/' . $data->image);
                        ?>
                        <image src="{{ $img }}" class="img-fluid">
                            <br>
                            {{ $data->content }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection