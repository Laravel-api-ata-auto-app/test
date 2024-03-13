<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Delete User</title>
</head>
<body style="height: 600px" class="justify-content-center  align-items-center d-flex w-100 ">
    <div class="w-25 h-25 ">
        <h1>Are you sure for delete?</h1>
    <form action="/delete/submit" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$userModel->id}}" id="">
        <button name="delete" value="Yes,Delete it" class="btn btn-outline-danger shadow  " >Yes,Delete it</button>
        <button name="cancel" class="btn btn-outline-light shadow "  ><a href="/view">No,Cancel</a></button>
    </form>
    </form>
    </div>
</body>
</html>