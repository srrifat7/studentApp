<!DOCTYPE html>
<html>
<head>
    <title>Student Submission</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 30px; }
        h2 { color: #333; }
        form { max-width: 400px; margin-bottom: 20px; }
        label { display: block; margin-top: 15px; font-weight: bold; }
        input[type="text"] { width: 100%; padding: 8px; margin-top: 5px; }
        .btn-submit { margin-top: 20px; padding: 10px 15px; background-color: seagreen; color: white; border: none; border-radius: 4px; cursor: pointer; }
        .btn-admin { padding: 8px 12px; background-color: steelblue; color: white; border: none; border-radius: 4px; text-decoration: none; }
        .success { color: green; margin-top: 10px; }
        .errors { color: red; margin-top: 10px; }
    </style>
</head>
<body>

    <h2>Student Submission Form</h2>

    @if(session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <div class="errors">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/store">
        @csrf

        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" required>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" required>

        <label for="reg_number">Reg Number:</label>
        <input type="text" name="reg_number" required>

        <button type="submit" class="btn-submit">Submit</button>
    </form>

    <a href="/admin" class="btn-admin">Go to Admin Page</a>

</body>
</html>
