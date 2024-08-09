@extends('admin.master')
@section('main')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">



        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Banner Manager</h1>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a class="btn btn-primary" href="{{ route('admin.banner.show_add') }}">Add banner</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Title</th>
                                    <th>Sub Title</th>
                                    <th>Image</th>
                                    <th>Link</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>STT</th>
                                    <th>Title</th>
                                    <th>Sub Title</th>
                                    <th>Image</th>
                                    <th>Link</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($allBanner as $key => $item)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->sub_title }}</td>
                                        <td>
                                            <img src="{{ asset($item->image) }}" alt="banner" width='150px'>
                                        </td>
                                        <td>{{ $item->link }}</td>
                                        <td>
                                            @if ($item->status == 1)
                                                <span class="badge badge-success">Active</span>
                                            @else
                                                <span class="badge badge-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if ($item->status == 1)
                                                <a class="btn btn-danger mb-2"
                                                    href="{{ route('admin.banner.change_status', ['id' => $item->id, 'status' => 0]) }}">
                                                    Deactive
                                                </a>
                                            @else
                                                <a class="btn btn-success mb-2"
                                                    href="{{ route('admin.banner.change_status', ['id' => $item->id, 'status' => 1]) }}">
                                                    Active
                                                </a>
                                            @endif
                                            <a class="btn btn-warning mb-2"
                                                href="{{ route('admin.banner.show_edit', ['id' => $item->id]) }}">
                                                Edit
                                            </a>
                                            <a class="btn btn-danger"
                                                href="{{ route('admin.banner.delete', ['id' => $item->id]) }}"
                                                onclick="confirm('Bạn chắc chắn chứ?')"> Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->



    </div>
    <!-- End of Content Wrapper -->
@endsection
