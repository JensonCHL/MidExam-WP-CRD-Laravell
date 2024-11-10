<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* Basic body styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }

        /* Header styling */
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        /* Link container styling */
        .link-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .link-container a {
            margin: 0 10px;
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
            padding: 8px 16px;
            background-color: #e2e6ea;
            border-radius: 4px;
        }

        .link-container a:hover {
            background-color: #d0d4d8;
        }

        /* Table styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Delete button styling */
        input[type="submit"] {
            background-color: #dc3545;
            color: #fff;
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #c82333;
        }

        /* Additional table styling */
        .table-container {
            max-width: 800px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="link-container">
        <a href="{{ route('createPage') }}">Create Data</a>
    </div>
    <div class="link-container">
        <a href="{{ route('student') }}">Student Page</a>
    </div>
    <h1>This is home page
    </h1>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Age</th>
            <th>desc</th>
            <th>studentid</th>
            <th>Delete</th>
        </tr>
        @foreach ($data as $dat)
            <tr>
                <td>{{ $dat->id }}</td>
                <td>{{ $dat->name }}</td>
                <td>{{ $dat->age }}</td>
                <td>{{ $dat->description }}</td>
                <td>{{ $dat->student_id }}</td>
                <td>
                    <form action="{{ route('customer.delete', ['customer' => $dat]) }}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <table>
        <tr>
            <th>Id</th>
            <th>Type</th>

        </tr>
        @foreach ($student as $siu)
            <tr>
                <td>{{ $siu->id }}</td>
                <td>{{ $siu->type }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
