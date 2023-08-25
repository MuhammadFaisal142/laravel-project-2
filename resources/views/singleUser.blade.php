<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>single User </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">

                <h1>All Users Data</h1>
                <a href="/" class="btn btn-primary btn-sm">Back to all Users</a>
                <table class="table table-border table-striped">
                     <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>City</th>

                     </tr>
                    @foreach ($data as $id => $user)
                    <tr>
                        <td>{{ $user->id }} </td>
                        <td>{{ $user->name }} </td>
                        <td> {{ $user->email }}</td>
                        <td>{{ $user->age }}</td>
                        <td> {{ $user->city }} </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>
