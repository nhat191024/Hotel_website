@extends('admin.master')
@section('main')
    <!-- Content Wrapper -->


    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Add Banner</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{ route('admin.banner.add') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Title</label>
                            <input required type="text" class="form-control" id="" aria-describedby=""
                                name="title">
                        </div>
                        <div class="form-group">
                            <label for="">Sub title</label>
                            <input required type="text" class="form-control" id="" aria-describedby=""
                                name="sub_title">
                        </div>
                        <div class="form-group">
                            <label for="">Image Link</label>
                            <input required type="text" class="form-control" id="" aria-describedby=""
                                name="image">
                        </div>
                        <div class="form-group">
                            <label for="">Link</label>
                            <input required type="text" class="form-control" id="" aria-describedby=""
                                name="link">
                        </div>
                        <button class="btn btn-success mt-4" type="submit">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End of Main Content -->

    <!-- End of Content Wrapper -->
@endsection
