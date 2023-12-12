
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Note</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: #dc3545;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Note Lists</h2>

        <table  class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php 
                $j=1;
                @endphp
                @foreach($notes as $note)
                <tr>
                    <td>{{$j++}}</td>
                    <td>{{$note->title}}</td> 
                    <td>{{$note->description}}</td>
                    <td>{{$note->status}}</td>
                    <td>
                        <a href="{{url('notes/'.$note->id.'/edit')}}" class="btn btn-info py-2">Edit</a>
                        <a href="{{ url('notes/'.$note->id.'/delete') }}" class="btn btn-danger py-2" onclick="return confirm('Are you sure you want to delete this data?')" >Delete</a>
                        <a href="{{url('notes/'.$note->id.'/show')}}" class="btn btn-success py-2">Show</a>
                    </td>
                </tr>
                @endforeach
               
            </tbody>
        </table>
       
    {{ $notes->links() }}
       
</body>

</html>

