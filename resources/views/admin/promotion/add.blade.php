@extends('admin.master')
@section('main')
    <!-- Content Wrapper -->


    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Add Promotion</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{ route('admin.promotion.add') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Title</label>
                            <input required type="text" class="form-control" id="" aria-describedby=""
                                name="title">
                        </div>
                        <label for="">Promotion Image</label>
                        <div class="custom-file mb-2">
                            <label class="custom-file-label" for="customFile">image</label>
                            <input type="file" class="custom-file-input" id="customFile"
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
