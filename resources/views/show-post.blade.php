<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container-xxl flex-grow-1 container-p-y">



        <div class="card">
            <div class="d-flex justify-content-between align-items-center mt-3 p-3">
                <h5 class="mb-0">Posts</h5>
                <a href="{{ route('index') }}" class="btn btn-primary">Add New</a>
            </div>

            <br>


            <br>
            <table class="table">
                <thead>
                    <tr>
                    <th>User Id</th>
                    <th>Title</th>
                    <th>DEscription </th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>


                @foreach($data as $item)

                <tr>

                    <td>{{$item['user_id']}}</td>
                    <td>{{$item['title']}}</td>
                    <td>{{$item['description']}}</td>

                    <td><a href="{{url('/update-post/'.$item['id'])}}">Edit</a></td>
                    <td><a href="{{url('/delete-post/'.$item['id'])}}">Delete</a></td>

                </tr>
              @endforeach

            </tbody>
        </table>
    </div>
</div>
</body>
</html>
