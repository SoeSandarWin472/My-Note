
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Note</title>
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
    
        <div class="card" style="width: 18rem;">
            <div class="card-header">
                <h2>Note Details</h2>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><strong>Title:</strong> {{ $note->title }}</li>
              <li class="list-group-item"><strong>Description:</strong> {{ $note->description }}</li>
              <li class="list-group-item"><strong>Status:</strong> {{ $note->status ? 'Active' : 'Inactive' }}</li>
            </ul>
        </div>

        <a href="{{ url('notes') }}" class="btn btn-primary mt-2">Back to Notes</a>
    </div>
       

</body>
</html>
