<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Users Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4" style="display: inline-block;">
                <h1>Add new User </h1>
                <form action="{{ route('update.user',$data->id)}}" method="POST">
                    @csrf
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" value="{{ $data -> name}}" name="username">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="useremail" value="{{$data->email}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Age</label>
                            <input type="text" class="form-control" name="userage" value="{{$data->age}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">City</label>
                            <input type="text" class="form-control" name="usercity" value="{{$data->city}}" >
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary ">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
