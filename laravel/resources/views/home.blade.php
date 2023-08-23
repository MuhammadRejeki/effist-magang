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
                    <h4 class="card-title">Top 5 Company | Most Employees</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <table id="myTable" class="table table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <td width="50px">Rank</td>
                                            <td>Company</td>
                                            <td>Employees</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($company as $c)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $c->name }}</td>
                                            <td class="text-center">{{ $c->user_count }} orang</td>
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
</section>

<section class="free-name">
    <div class="row">
        <div class="col-8">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <figure class="highcharts-figure">
                                            <div id="graph-agama"></div>
                                            <p class="highcharts-description">

                                            </p>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-4">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">News</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="list-group">
                                        @foreach($news as $n)
                                        <a href="#" class="list-group-item list-group-item-action ">
                                            <img src="{{ url('assets/images/image-default.png') }}" class="img-fluid w-100 mb-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class=" mb-1 text-white" style="font-family:Arial;font-size:12pt">{{ $n->title }}</h5>
                                                <small><i>3 days ago</i></small>
                                            </div>
                                            <small>{{ substr($n->content,0,40) }} ......</small>
                                        </a>
                                        <hr>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>



@endsection

@section('custom-css')
<link href="{{ url('assets/vendors/datatable/1.13.6/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
@endsection
@section('custom-js')
<script src="{{ url('assets/vendors/datatable/1.13.6/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('assets/vendors/datatable/1.13.6/js/dataTables.bootstrap5.min.js') }}"></script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script>
    $(document).ready(function() {
        Highcharts.chart('graph-agama', {
            chart: {
                plotBackgroundColor: null,
                backgroundColor: 'transparent',
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Grafik Jumlah Agama Pada Sistem',
                align: 'left',
                style: {
                    color: '#FFF',
                    font: 'bold 16px "Trebuchet MS", Verdana, sans-serif'
                }
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                    }
                }
            },
            series: [{
                name: 'Agama',
                colorByPoint: true,
                data: [
                    @foreach($grp_agama as $l) {
                        name: "{{ $l['name'] }}",
                        y: <?= $l['jumlah'] ?>
                    },
                    @endforeach
                ]
            }]
        });


    });
</script>
@endsection