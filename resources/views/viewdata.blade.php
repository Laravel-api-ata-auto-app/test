<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel fetch data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <button class="btn btn-outline-danger m-2 "><a href="/add">Add</a></button>
    @csrf
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Gmail</th>
                <th scope="col">Subject</th>
                <th scope="col">Profile</th>
                <th scope="col">Create at</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usermodel as $user)
                <tr>
                    <th>{{ $user->id }} <input type="hidden" name="id" value="{{ $user->id }}"
                            style="display: none"></th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->subject }}</td>
                    <td><img src="images/{{ $user->profile }}" width="120px" height="100px" alt=""></td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        <button value="edite" class="btn btn-outline-success "><a
                            href="/update/{{ $user->id }}">Update</a></button>
                        <button value="delete" name="delete" class="btn btn-outline-danger "><a
                                href="/delete/{{ $user->id }}">Delete</a></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
