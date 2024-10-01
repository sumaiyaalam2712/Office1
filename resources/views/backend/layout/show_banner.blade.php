@extends('backend.app')
@section('content')
    <div class="content-wrapper">


        <div class="container-xxl flex-grow-1 container-p-y">



            <div class="card">
                <div class="d-flex justify-content-between align-items-center mt-3 p-3">
                    <h5 class="mb-0">Banner </h5>
                    <a href="{{ route('CreateBanner.index') }}" class="btn btn-primary">Add New</a>
                </div>

                <br>
                <form method="POST" action="/search_banner" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="search"><b>Search</b></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="search" name="search"
                                value="{{ old('search') }}" />
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">GO</button>
                        </div>
                    </div>
                </form>



                <p><b>All the Banners</b></p>
                <table class="table">
                    <thead>
                        <tr>

                            <th>
                                image
                            </th>
                            <th>
                                name
                            </th>
                            <th>
                                sub_title
                            </th>
                            <th>
                                description
                            </th>
                            <th>
                                button
                            </th>
                            <th>
                                Edit
                            </th>
                            <th>
                                Delete
                            </th>
                        </tr>
                    </thead>
                    <tbody>




                        @foreach ($infos as $info)
                            <tr>

                                <td><img src="{{ asset('backend/img/' . $info['image']) }}" style="max-width: 100%; height: auto;"></td>
                                <td>{{ $info['name'] }}</td>
                                <td>{{ $info['sub_title'] }}</td>
                                <td>{!!$info['description']!!}</td>
                                <td>{{ $info['button'] }}</td>
                                <td><a href="{{ url('/update_banner/' . $info['id']) }}">Edit</a></td>
                                <td><a href="{{ url('/delete_banner/' . $info['id']) }}">Delete</a></td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
