<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Data Mahasiswa</title>

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
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()-> name ?? ''}}
                </button>
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
                    <a class="nav-link active" href="/mahasiswa" aria-controls="/mahasiswa" aria-selected="false">Mahasiswa</a>
                    <a class="nav-link" href="/dosen" aria-controls="/dosen" aria-selected="false">Dosen</a>
                    <a class="nav-link" href="/matakuliah" aria-selected="false">Matakuliah</a>
                </div>
            </div>
            <div class="col-lg-10 vh-100">
                <div class="card mt-4">
                    <div class="card-header">
                        <a name="" class="btn btn-primary" href="/mahasiswa/formulirmhs" role="button"><i class="bi bi-plus-square-fill"></i>  ADD MAHASISWA</a>
                        <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/mahasiswa/cari">
                            <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-primary my-2 my-sm-2" type="submit">Search</button>
                        </form>
                    </div>

                    <div class="card-body">
                        @if  (session('alertambah'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>{{session('alertambah')}}</strong> 
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @elseif (session('alertedit'))
                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <strong>{{session('alertedit')}}</strong> 
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @elseif (session('alertdelete'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{session('alertdelete')}}</strong> 
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span> 
                                </button>
                            </div>
                        @endif

                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama Mahasiswa</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Bidang Minat</th>
                            <th scope="col">Manipulasi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($mahasiswa as $no => $m)
                        <tr>
                            <th scope="row">{{$mahasiswa -> firstitem() + $no}}</th>
                            <td>{{ $m -> nim}}</td>
                            <td>{{ $m -> nama}}</td>
                            <td>{{ $m -> gender}}</td>
                            <td>{{ $m -> jurusan}}</td>
                            <td>{{ $m -> bidangminat}}</td>
                            <td>
                                <a href="/mahasiswa/editMhs/{{$m -> id}}" class="btn btn-outline-success"><i class="bi bi-pencil-square"></i></a>
                                <button onclick="delKonfirm({{$m->id}})" class="btn btn-outline-danger"><i class="bi bi-x-square"></i></a>
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                        </table>
                        {{$mahasiswa -> total()}}
                        <span class="float-right">{{ $mahasiswa->links() }}</span>
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

      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Penghapusan</h5>
          </div>
          <div class="modal-body"> Apakah anda yakin ingin menghapus data ini?
          </div>
          <div class="modal-footer">
            <a id="deleteLink" type="button" class="btn btn-outline-danger">Yes</a>
            <button type="button" class="btn btn-outline-success" data-dismiss="modal">No</button>
          </div>
        </div>
      </div>
    </div>
  
    <script>
      function delKonfirm(id){
        var link = document.getElementById('deleteLink')
        link.href = "{{URL::to('/mahasiswa/deletemhs/ ')}}" +id
        
        $('#deleteKonfirm').modal('show')
      }
      </script>
    </body>
</html>