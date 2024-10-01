@extends('backend.app')
@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h3 class="mb-0">Work Overview</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('discove-section.update') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="support-title">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        id="support-title" name="title"
                                        value="{{ old('title', $data->title ?? '') }}" />
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="description">Description</label>
                                <div class="col-sm-10">
                                    <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror">{{ old('description', $data->description ?? '') }}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                             <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="support-title">Button Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('button_text') is-invalid @enderror"
                                        id="support-title" name="button_text"
                                        value="{{ old('button_text', $data->button_text ?? '') }}" />
                                    @error('button_text')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-phone">Image</label>
                                <div class="col-sm-10">
                                    <input type="file" class="dropify @error('image') is-invalid @enderror"
                                        name="image" id="image"
                                        data-default-file="{{ isset($data->image) && !empty($data->image) ? asset($data->image) : '' }}" />
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>



                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- / Content -->
@endsection