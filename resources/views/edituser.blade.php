<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tambah User</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn/jsdelivr.net/sweetalert2/0.4.5/sweetalert2.css">     
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
        <body>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 bg-primary py-2">
                        <div class="dropdown float-right">
                            <button class="btn btn-primary dropdown-toggle" type="button" 
                            id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()-> name ?? ''}}</button>
                            <ul class="dropdown-menu" aria-labelledby="dropdown">
                                <li><a class="dropdown-item" href="/user">Data User</a></li>
                                <li><a class="dropdown-item" href="/logout">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-lg-2 vh-100">
                        <div class="nav flex-column nav-pills mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link"  href="/dashboard" aria-selected="true">Home</a>
                        <a class="nav-link active" href="/user" aria-controls="/user" aria-selected="false">User</a>
                        </div>
                    </div>
                    <div class="col-lg-10 vh-100">
                    <div class="card mt-4">
                        <div class="card-header">
                            <h2> Edit User </h2>
                        </div>
                        <div class="card-body">
                        <div class="container-fluid mt-4">
                             <form action="/user/updateuser/{{$user -> id))" method="POST" class="pt-2 pb-2">
                                  @csrf 
                                  @method('PUT')
                                  <div class="form-group w-25">
                                      <label> Nama User: </label>
                                      <input type="text" name="nama" class="form-control" value="{{$user-> nama}}" required >
                                      <label> Email User: </label>
                                      <input type="email" name="email" class="form-control" value="{{$user-> email))" requiredautofocus>
                                      <label> Password: </label>
                                      <input type="password" name="pass" class="form-control"  value="{{$user-> pass))" required>
                                    </div>
                                    <div class="form-group pt-4">
                                        <input type="submit" value="Save" class="btn btn-outline-primary">
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
            <script src="https://cdn.jsdelivr.net/sweetalert2/0.4.5/sweetalert2.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
            <div class="modal fade" id="deleteKonfirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    </body>
</html>