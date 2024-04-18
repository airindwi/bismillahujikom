<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category List</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h2>Category List</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Name Category</th>
                <th>Created</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>loop->iteration</td>
                <td>categories->name</td>
                <td>categories->created_at->format('Y-m-d')</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
@if (Session::get('success'))
            <div class="alert alert-primary">
            <button type="button" class="btn-close btn-close-black float-end" data-bs-dismiss="alert"
                aria-label="Close"></button>
            {{ Session::get('success') }}
            </div>
            @endif