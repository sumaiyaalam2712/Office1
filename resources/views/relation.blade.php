<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <thead>
            <tr>
            <th>user_id</th>
            <th>title</th>
            <th>description</th>

        </tr>
    </thead>
    <tbody>


        @foreach($data as $item)

        <tr>

            <td>{{$item->user_id}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->description}}</td>



        </tr>
      @endforeach
    </tbody>
    </table>
</body>
</html>
