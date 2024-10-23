<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <input>Dashboard</input>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Dashboard</h1>
        <table class="table table-striped">
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </thead>
            <tbody>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td><a href="logout">Logout</a></td>
            </tbody>
        </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </div>
    @if (Session::has('success'))
      <div class="alert alert-success">
          {{Session::get('success')}}
      </div>
    @endif
    @if (Session::has('fail'))
      <div class="alert alert-danger">
          {{Session::get('fail')}}
      </div>
    @endif
    <div class="add">
      <form method="post" action="{{route('dashboardpost')}}" enctype="multipart/form-data">
        @csrf
        <div><input type="text" name="title" class="input" placeholder="title"></div>
        <div><input type="text" name="author" class="input" placeholder="author"></div>
        <div><input type="number" name="price" class="input" placeholder="price"></div>
        <div><input type="text" name="page" class="input" placeholder="page"></div>
        <div><input type="text" name="format" class="input" placeholder="format"></div>
        <div><input type="text" name="isbn" class="input" placeholder="isbn"></div>
        <div><input type="text" name="language" class="input" placeholder="language"></div>
        <div><input type="text" name="dimension" class="input" placeholder="dimension"></div>
        <div><input type="text" name="category" class="input" placeholder="category"></div>
        <div><input type="file" name="file" class="input" placeholder="add image"></div>
        <div><button type="submit" name="submit" class="input" value="Submit">submit</button></div>
      </form>
    </div>

  </body>
</html>