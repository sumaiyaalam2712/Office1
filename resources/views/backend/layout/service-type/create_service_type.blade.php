@extends('backend.app')
@section('content')
@if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        {{-- <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Horizontal Layouts</h4> --}}

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="mb-4 card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h3 class="mb-0"></h3>
                    </div>
                    <div class="card-body">

                        <form id="ajax-form" action="/create_service_type" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label" for="name">Service Type</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" name="name" value="{{ old('name') }}" />
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">



        /*------------------------------------------

        --------------------------------------------

        Form Submit Event

        --------------------------------------------

        --------------------------------------------*/

        $('#ajax-form').submit(function(e) {

            e.preventDefault();



            var url = $(this).attr("action");

            let formData = new FormData(this);



            $.ajax({

                    type:'POST',

                    url: url,

                    data: formData,

                    contentType: false,

                    processData: false,

                    success: (response) => {

                        alert('Form submitted successfully');

                        location.reload();

                    },




               });



        });



    </script>
    <!-- / Content
        @endsection
