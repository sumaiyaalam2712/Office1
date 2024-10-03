@extends('backend.app')
@section('content')
    <div class="content-wrapper">


        <div class="container-xxl flex-grow-1 container-p-y">



            <div class="card">
                <div class="d-flex justify-content-between align-items-center mt-3 p-3">
                    <h5 class="mb-0">City Name</h5>
                    <a href="{{ route('CreateCategory.index') }}" class="btn btn-primary">Add New</a>
                </div>

                <br>

                <h4>Apartment Category List</h4>
                <br>
                <table class="table">
                    <thead>
                        <tr>
                        <th>Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>


                    @foreach($infos as $info)

                    <tr>

                        <td>{{$info['name']}}</td>

                        <td><a href="{{url('/update-apartment-category/'.$info['id'])}}">Edit</a></td>
                        <td><a href="{{url('/delete-apartment-category/'.$info['id'])}}">Delete</a></td>

                    </tr>
                  @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection









