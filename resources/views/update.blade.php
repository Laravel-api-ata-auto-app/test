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
    <form action="/update/submit" method="post" class="d-flex w-50 h-75 rounded-5 shadow " enctype="multipart/form-data">
        @csrf
        <div class="w-50  h-100 bg-light justify-content-center d-flex flex-column align-items-center ">
            <div class="w-100 h-50 d-flex bg-dark  justify-content-center align-items-center rounded-1">
               <h1 class="text-light ">Profile</h1>
               <input type="hidden" name="id" value="{{ $userModel->id }}" id="">
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
                <input type="text" name="name" class="form-control" placeholder="Enter name" value="{{ $userModel->name }}">
            </div>
            <div class="m-2 ">
                <label for="">Gender</label>
                <br>
                <select class="form-select" aria-label="Gender" name="gender">
                    @if($userModel->gender=='Male'){
                        <option value="Male" >Male</option>
                        <option value="Female">Female</option>
                    }@else{
                        <option value="Female"  >Female</option>
                        <option value="Male" >Male</option>
                    }
                    @endif
                </select>
            </div>
            <div class="m-2 ">
                <label for="">Email</label>
                <br>
                <input type="text" name="email" class="form-control" placeholder="Enter email" value="{{ $userModel->email }}">
            </div>
            <div class="m-2 ">
                <label for="">Subject</label>
                <br>
                <select class="form-select" aria-label="Subject" name="subject">
                    @if($userModel->subject=='Java'){
                        <option value="Java">Java</option>
                        <option value="Flutter">Flutter</option>
                        <option value="Web">Web</option>
                        <option value="Network">Network</option>
                    }@elseif ($userModel->subject=='Flutter'){
                        <option value="Flutter">Flutter</option>
                        <option value="Java">Java</option>
                        <option value="Web">Web</option>
                        <option value="Network">Network</option>
                    }@elseif ($userModel->subject=='Web'){
                        <option value="Web">Web</option>
                        <option value="Java">Java</option>
                        <option value="Flutter">Flutter</option>
                        <option value="Network">Network</option>
                    }@else{
                        <option value="Network">Network</option>
                        <option value="Java">Java</option>
                        <option value="Flutter">Flutter</option>
                        <option value="Web">Web</option>
                    }
                     @endif
                </select>
            </div>
            <div class="m-2 ">
                <input type="hidden"  name="old_profile" value="{{ $userModel->profile }}">
                <input type="submit" name="update" value="Update" class="btn btn-outline-light form-control ">
            </div>
        </div>
    </form>

</body>

</html>
