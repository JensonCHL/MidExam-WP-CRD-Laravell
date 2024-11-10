<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* Body styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fa; /* Light background color */
            margin: 0;
            padding: 20px;
        }

        /* Container for the form */
        .container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Heading styling */
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        /* Form styling */
        form div {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="text"]:focus {
            outline: none;
            border-color: #007bff;
        }

        /* Style the submit button */
        input[type="submit"] {
            background-color: #28a745; /* Green color for submit button */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            width: 100%;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #218838; /* Darker green on hover */
        }

    </style>
</head>
<body>
    <h1>Create Student</h1>
    <form action="{{route('student.add')}}" method="POST" >
        @csrf
        @method('POST')
        <div>
            <label for="">Input Type</label>
            <input type="text" name="type" placeholder="inputtype">
        </div>
        <div>
            <label for="">Input button</label>
            <input type="submit" placeholder="Input button">
        </div>
    </form>
</body>
</html>
