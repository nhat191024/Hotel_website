@extends('admin.master')
@section('main')
    <!-- Content Wrapper -->


    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Edit Category</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{ route('admin.banner.edit') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Title</label>
                            <input required type="text" class="form-control" id="" aria-describedby=""
                                name="title" value="{{ $banner->title }}">
                        </div>
                        <div class="form-group">
                            <label for="">Sub title</label>
                            <input required type="text" class="form-control" id="" aria-describedby=""
                                name="sub_title" value="{{ $banner->sub_title }}">
                        </div>
                        <div class="form-group">
                            <label for="">Image Link</label>
                            <input required type="text" class="form-control" id="" aria-describedby=""
                                name="image" value="{{ $banner->image }}">
                        </div>
                        <div class="form-group">
                            <label for="">Link</label>
                            <input required type="text" class="form-control" id="" aria-describedby=""
                                name="link" value="{{ $banner->link }}">
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <select required name="status" class="form-control" id="">
                                <option {{ $banner->status == 1 ? 'selected' : '' }} value="1"> active</option>
                                <option {{ $banner->status == 0 ? 'selected' : '' }} value="0"> inactive</option>
                            </select>
                        </div>
                        <input type="hidden" name="id" value="{{ $banner->id }}">
                        <button class="btn btn-success mt-4" type="submit">Edit</button>
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
