@extends('backend.app')
@section('content')
    <div class="content-wrapper">


        <div class="container-xxl flex-grow-1 container-p-y">



            <div class="card">


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
            <h4>Search result for {{$search}}</h4>
            <br>
            <table class="table">
                    <thead>
                        <tr>

                    <th>
                        name
                    </th>



                </tr>
            </thead>
            <tbody>


                @foreach ($info as $item)
                    <tr>

                        <td>{{ $item['name'] }}</td>

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
