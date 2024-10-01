@extends('backend.app')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card-body">
            <form method="POST" action="/search_banner" enctype="multipart/form-data">
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
                <h3>Search result for {{$search}}</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Sub Title</th>
                            <th>Desciption</th>
                            <th>Buttonb</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($info as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->sub_title }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->button }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h3>No results found for {{$search}}</h3>
            @endif
        </div>
    </div>
</div>
@endsection
