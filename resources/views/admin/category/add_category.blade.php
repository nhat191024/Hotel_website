@extends('admin.master')
@section('main')
    <!-- Content Wrapper -->


    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Add Category</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{ route('admin.category.add') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Category name</label>
                            <input required type="text" class="form-control" id="" aria-describedby=""
                                name="categoryName">
                        </div>
                        <button class="btn btn-success mt-4" type="submit">Add</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- End of Content Wrapper -->
@endsection
