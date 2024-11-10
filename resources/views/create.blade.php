<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; /* Light gray background */
            margin: 0;
            padding: 20px;
        }

        /* Center the content container */
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Style the heading */
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        /* Style the form elements */
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
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            width: 100%;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Style the link */
        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div>
        <a href="{{route('home')}}">Home Page</a>
    </div>

    <h1>Create Product</h1>

    <form method="post" action="{{route('store')}}">
        @csrf
        @method('post')
        <div>
            <label >Name</label>
            <input type="text" name="name" placeholder="name">
        </div>
        <div>
            <label >Age</label>
            <input type="text" name="age" placeholder="age">
        </div>
        <div>
            <label >Description</label>
            <input type="text" name="description" placeholder="description">
        </div>
        <div>
            <label >Studentid</label>
            <input type="text" name="student_id" placeholder="student id">
        </div>
        <div>
            <input type="submit" placeholder="Click here to submit">
        </div>

    </form>
</body>
</html>
