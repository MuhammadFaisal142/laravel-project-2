<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All students </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">

                <h1>All Users Data</h1>
                <a href="/newuser" class="btn btn-success btn-sm">AddUsers</a>
                <table class="table table-border table-striped">
                     <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>City</th>
                        {{-- <th>View</th>
                        <th>Delete</th>
                        <th>Update</th> --}}
                     </tr>
                    @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }} </td>
                        <td>{{ $student->name }} </td>
                        <td> {{ $student->email }}</td>
                        <td>{{ $student->age }}</td>
                        <td> {{ $student->city_name }} </td>
                        {{-- <td> <a href="  {{route ('view.user', $user->id)}}  " class="btn btn-primary btn-sm">View</a></td>
                        <td> <a href="  {{route ('view.delete', $user->id)}}  " class="btn btn-danger btn-sm">Delete</a></td>
                        <td> <a href=" {{route ('update.page', $user->id)}}" class="btn btn-warning btn-sm">Update</a></td> --}}

                    </tr>
                    @endforeach
                </table>
                {{-- <div class="mt-5">
                    {{$data->links()}}
                </div> --}}
            </div>
        </div>
    </div>
</body>

</html>






