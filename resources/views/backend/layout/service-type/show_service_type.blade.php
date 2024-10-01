@extends('backend.app')
@section('content')
    <div class="content-wrapper">


        <div class="container-xxl flex-grow-1 container-p-y">



            <div class="card">
                <div class="d-flex justify-content-between align-items-center mt-3 p-3">
                    <h5 class="mb-0">Service Type</h5>
                    <a href="{{ route('CreateServiceType.index') }}" class="btn btn-primary">Add New</a>
                </div>
                <br>
                <form method="POST" action="/search_service_type" enctype="multipart/form-data">
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
                <br>

                <h4>All the Service types</h4>
                <br>
                <table class="table">
                    <thead>
                        <tr>
                        <th>name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>


                    @foreach($infos as $info)

                    <tr>

                        <td>{{$info['name']}}</td>

                        <td><a href="{{url('/update_service_type/'.$info['id'])}}">Edit</a></td>
                        <td><a href="{{url('/delete_service_type/'.$info['id'])}}">Delete</a></td>

                    </tr>
                  @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection









