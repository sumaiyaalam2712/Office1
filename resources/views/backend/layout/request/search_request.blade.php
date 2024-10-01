@extends('backend.app')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card-body">
            <form method="POST" action="/search_request" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="search"><b>Search</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="search" name="search" value="{{ old('search', $search ?? '') }}" />
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">GO</button>
                    </div>
                </div>
            </form>

            @if(isset($info) && count($info) > 0)
                <h3></h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Request Date</th>
                            <th>Request Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($info as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->request_date }}</td>
                                <td>{{ $item->request_time }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h3>No results found for</h3>
            @endif
        </div>
    </div>
</div>
@endsection
