@extends("admin.admin_master")

@section("admin_home")

<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Create Home Slider</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);"> Home Slider</a></li>
                        <li class="breadcrumb-item active">Create Home Slider</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->
    
    <div class="row">
        <!-- <div class="col-xl-2"></div> -->
        
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create Home Slider</h4>
                    <!-- <p class="card-title-desc">Provide valuable, actionable feedback to your users with HTML5 form validation–available in all our supported browsers.</p> -->
                </div>
                <div class="card-body">

                    <form method="POST" action="{{ route('admin.store.slider') }}" enctype="multipart/form-data" class="needs-validation" novalidate>

                        @csrf
                        <div class="row">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="title">Slider Title</label>
                                    <input 
                                        type="text" 
                                        class="form-control" 
                                        id="title" 
                                        placeholder="Slider Title" 
                                        name="title" 
                                        required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    @error('title')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="slider_image">Slider Image</label>
                                    <input name="slider_image" type="file" class="form-control" id="slider_image" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>

                                    @error('slider_image')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror

                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="content">Slider Content</label>

                                    <textarea name="content" id="ckeditor-classic">
                                        
                                    </textarea>
                                     
                                    <div class="invalid-feedback">
                                        Please provide content.
                                    </div>

                                    @error('content')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                           
                        </div>

                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
            <!-- end card -->
        </div> <!-- end col -->
        
        <!-- <div class="col-xl-2"></div> -->

    </div>
    <!-- end row -->

   
</div> <!-- container-fluid -->

@endsection