<!DOCTYPE html>
<html>
<head>
    <title>Admin Page - Student Records</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
        }
        h2 {
            color: #333;
        }
        .success {
            color: green;
            margin-bottom: 15px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th {
            background-color: #f4f4f4;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        .btn {
            padding: 7px 12px;
            cursor: pointer;
            border: none;
            border-radius: 4px;
            margin-right: 5px;
        }
        .btn-del {
            background-color: crimson;
            color: white;
        }
        .btn-back {
            background-color: seagreen;
            color: white;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <h2>Admin Page - Student Records</h2>

    @if(session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Reg Number</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($students as $s)
            <tr>
                <td>{{ $s->id }}</td>
                <td>{{ $s->first_name }}</td>
                <td>{{ $s->last_name }}</td>
                <td>{{ $s->reg_number }}</td>
                <td>
                    <form action="{{ url('/delete/'.$s->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this student record?');" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-del">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5">No submissions yet.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <a href="/">
        <button class="btn btn-back">Back to Submission Page</button>
    </a>

</body>
</html>
