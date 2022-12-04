@extends("admin.admin_master")


@section("admin_home")


<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Home Testimonial</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.add.testimonial') }}">Add Home Testimonial</a></li>
                        <li class="breadcrumb-item active">Home Testimonial</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Home Testimonial</h4>

                    <div class="card-title-desc">
                        @if(session("success"))
                            <div class="card-body">
                                <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                                    <i class="mdi mdi-alert-circle-outline me-2"></i>
                                    {{ session("success") }}!
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        @endif
                    </div>

                </div>
                <div class="card-body">
                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Title</th>
                                <th>Comment</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php 
                                $i = 1;
                            @endphp
                            @foreach( $testimonials as  $item)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{  Str::limit($item->name, 30) }}</td>
                                <td>{{  Str::limit($item->title, 30) }}</td>
                                <td>{!! Str::limit($item->comment, 50)  !!}</td>
                                <td>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="dropdown">
                                                    <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Action <i class="mdi mdi-chevron-down"></i>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="{{ route('admin.edit.testimonial', $item->id) }}">Edit</a>
                                                        {{-- <a class="dropdown-item" href="{{ route('admin.delete.testimonial', $item->id) }}">Delete</a> --}}
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div><!-- end card-body -->
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end cardaa -->
        </div> <!-- end col -->
    </div> <!-- end row -->
</div> <!-- container-fluid -->

@endsection