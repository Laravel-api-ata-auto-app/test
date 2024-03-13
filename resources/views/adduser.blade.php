<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Information</title>
</head>

<body style="height: 600px;" class="d-flex flex-column  justify-content-center align-items-center w-100  ">
    <form action="/addData" class="d-flex w-50 h-75 rounded-5 shadow " method="POST" enctype="multipart/form-data">
        @csrf
        <div class="w-50  h-100 bg-light justify-content-center d-flex flex-column align-items-center ">
            <div class="w-100 bg-dark h-50 d-flex justify-content-center align-items-center rounded-1">
                <img src="images/" alt="">
            </div>
            <input type="file" name="profile" class="btn btn-outline-dark m-2  ">
        </div>
        <div class="w-50  h-100  bg-danger ">
            <center>
                <h1 class="text-light p-1 ">Information User</h1>
            </center>
            <div class="m-2 ">
                <label for="">Name</label>
                <br>
                <input type="text" name="name" class="form-control" placeholder="Enter name">
            </div>
            <div class="m-2 ">
                <label for="">Gender</label>
                <br>
                <select class="form-select" aria-label="Gender" name="gender">
                    <option selected>Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="m-2 ">
                <label for="">Email</label>
                <br>
                <input type="text" name="email" class="form-control" placeholder="Enter email">
            </div>
            <div class="m-2 ">
                <label for="">Subject</label>
                <br>
                <select class="form-select" aria-label="Subject" name="subject">
                    <option selected>Subject</option>
                    <option value="Java">Java</option>
                    <option value="Flutter">Flutter</option>
                    <option value="Web">Web</option>
                    <option value="Network">Network</option>
                </select>
            </div>
            <div class="m-2 ">
                <input type="submit" name="adddata" value="Add Data" class="btn btn-outline-light form-control ">
            </div>
            <div class="m-2 ">
                <input type="submit" name="showdata" value="viewData" class="btn btn-outline-light form-control ">
            </div>    
        </div>
    </form>
</body>

</html>
