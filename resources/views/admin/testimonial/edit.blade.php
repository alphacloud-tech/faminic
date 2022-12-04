@extends("admin.admin_master")

@section("admin_home")

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<div class="container-fluid">

    <!-- start page title -->
    <!-- <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Update Home Slider</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);"> Home Slider</a></li>
                        <li class="breadcrumb-item active">Update Home Slider</li>
                    </ol>
                </div>

            </div>
        </div>
    </div> -->
    <!-- end page title -->
    
    <div class="row">
        <!-- <div class="col-xl-2"></div> -->
        
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Home Testimonial</h4>
                    <!-- <p class="card-title-desc">Provide valuable, actionable feedback to your users with HTML5 form validation–available in all our supported browsers.</p> -->
                </div>
                <div class="card-body">

                    <form method="POST" action="{{ route('admin.update.testimonial', $testimonial->id) }}" enctype="multipart/form-data" class="needs-validation" novalidate>

                        @csrf
                       
                        <div class="row">

                            
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="title">Testimonial Title</label>
                                    <input 
                                        type="text" 
                                        class="form-control" 
                                        id="title" 
                                        placeholder="Service Title" 
                                        name="title"
                                        value="{{ $testimonial->title }}" 
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
                                    <label class="form-label" for="title">Testimonial Name</label>
                                    <input 
                                        type="text" 
                                        class="form-control" 
                                        id="name" 
                                        placeholder="Service name" 
                                        name="name"
                                        value="{{ $testimonial->name }}" 
                                        required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    @error('name')
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
                                    <label class="form-label" for="content_long">Comment</label>

                                    <textarea name="comment" id="ckeditor-classic">
                                        {{ $testimonial->comment }}
                                    </textarea>
                                    
                                    <div class="invalid-feedback">
                                        Please provide content.
                                    </div>

                                    @error('comment')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        
                        </div>
                
                        <button class="btn btn-primary" type="submit">Update</button>
                    </form>
                </div>
            </div>
            <!-- end card -->
        </div> <!-- end col -->
        
        <!-- <div class="col-xl-2"></div> -->

    </div>
    <!-- end row -->

   
</div> <!-- container-fluid -->


<script>
 
    $(document).ready(function(){
        $('#about_image').change(function(e){ //on file input change
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#show_image").attr("src", e.target.result);
            };
            reader.readAsDataURL(e.target.files["0"]);
        });
    });
   
</script>

@endsection