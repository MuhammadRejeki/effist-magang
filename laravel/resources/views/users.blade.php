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
                        Users
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
                    <h4 class="card-title">Tambah Users</h4>
                </div>
                <div class="card-content">
                    <div class="card-body pt-0">
                        @if(session()->has('success'))
                        <p class="s2-txt3 p-t-18" style="color: #00ffc4;">
                            <i>{{ session('success') }}</i>
                        </p>
                        @endif
                        <form action="{{ url('/users') }}" method="post" autocomplete="off">
                            @csrf

                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>

                            <div class="form-group">
                                <label>Gender</label>
                                <select name="gender" class="form-control" required>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Marital Status</label>
                                <select name="marital_status" class="form-control" required>
                                    <option value="single">Single</option>
                                    <option value="married">Married</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Agama</label>
                                <select name="religion" class="form-control" required>
                                    <option value="islam">Islam</option>
                                    <option value="kristen">kristen</option>
                                    <option value="protestan">protestan</option>
                                    <option value="katholik">katholik</option>
                                    <option value="budha">budha</option>
                                    <option value="hindu">hindu</option>
                                </select>
                            </div>

                            <div class="float-end" style="height:60px">
                                <button type="submit" class="btn btn-primary ml-1">
                                    <span class="">Simpan Data</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Daftar User</h4>
                </div>
                <div class="card-content">
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col">
                                <table id="myTable" class="table table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <td>Nama</td>
                                            <td>Email</td>
                                            <td>Gender</td>
                                            <td>Marital</td>
                                            <td>Agama</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>

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

<div class="modal fade" id="editModal" aria-labelledby="editModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <form action="{{ url('/home') }}" class="form-edit" method="post" autocomplete="off">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalTitle">
                        Edit Data
                    </h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="idnya" name="id">
                    <div class="form-group">
                        <label>Name </label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="name" required>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label>Gender</label>
                        <select name="gender" class="form-control" id="gender" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Marital Status</label>
                        <select name="marital_status" class="form-control" id="marital_status" required>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Agama</label>
                        <select name="religion" class="form-control" id="religion" required>
                            <option value="islam">Islam</option>
                            <option value="kristen">kristen</option>
                            <option value="protestan">protestan</option>
                            <option value="katholik">katholik</option>
                            <option value="budha">budha</option>
                            <option value="hindu">hindu</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Batal</span>
                    </button>
                    <button type="submit" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Simpan Perubahan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('custom-css')
<link href="{{ url('assets/vendors/datatable/1.13.6/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
@endsection
@section('custom-js')
<script src="{{ url('assets/vendors/datatable/1.13.6/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('assets/vendors/datatable/1.13.6/js/dataTables.bootstrap5.min.js') }}"></script>

<script>
    $(document).ready(function() {

        var editModal = new bootstrap.Modal(document.getElementById('editModal'), {
            keyboard: false,
            backdrop: 'static',
        });


        var myTable = $("#myTable").dataTable({
            pageLength: 5,
            lengthChange: false,
            processing: true,
            serverSide: true,
            ajax: {
                "url": "{{ url('/users/list') }}",
                "type": "POST",
                "data": {
                    '_token': '<?php echo csrf_token() ?>'
                }
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'gender',
                    name: 'gender'
                },
                {
                    data: 'marital_status',
                    name: 'marital_status'
                },
                {
                    data: 'religion',
                    name: 'religion'
                },
                {
                    data: 'action',
                    name: 'action'
                }
            ]
        });


        $.fn.delete = function(idx) {
            $.ajax({
                url: "{{ url('/users/hapus/') }}",
                data: {
                    '_token': '<?php echo csrf_token() ?>',
                    "id": idx,
                },
                type: "POST",
                dataType: "JSON",
                success: function(res) {
                    Toastify({
                        text: "Data berhasil di hapus!",
                        duration: 3000,
                        close: true,
                        gravity: "bottom",
                        position: "right",
                        backgroundColor: "#4fbe87",
                    }).showToast();

                    myTable.api().ajax.reload(null, false);
                }

            });
        }

        $.fn.edit = function(idx) {
            $.ajax({
                url: "{{ url('/users/data/') }}",
                data: {
                    '_token': '<?php echo csrf_token() ?>',
                    "id": idx,
                },
                type: "POST",
                dataType: "JSON",
                success: function(res) {
                    $('#name').val(res.data.name);
                    $('#email').val(res.data.email);
                    $('#gender').val(res.data.gender);
                    $('#religion').val(res.data.religion);
                    $('#marital_status').val(res.data.marital_status);
                    $('#idnya').val(res.data.id);
                    $('#content').html(res.data.content);
                    editModal.toggle();
                }

            });
        }

        $('.form-edit').submit(function(event) {
            event.preventDefault();

            $.ajax({
                url: "{{ url('/users/save/') }}",
                data: new FormData(this),
                type: "POST",
                dataType: "JSON",
                contentType: false,
                cache: false,
                processData: false,
                success: function(res) {
                    if (res.status == "1") {
                        Toastify({
                            text: "Data berhasil disimpan!",
                            duration: 3000,
                            close: true,
                            gravity: "bottom",
                            position: "right",
                            backgroundColor: "#4fbe87",
                        }).showToast();

                        myTable.api().ajax.reload(null, false);
                    } else {

                    }

                }
            });
        });
        // myTable.api().ajax.reload(null, false);
    });
</script>
@endsection