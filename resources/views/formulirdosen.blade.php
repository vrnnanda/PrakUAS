<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Tambah Data</title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 bg-primary py-2">
            </div>
            <div class="row">
                <div class="col-lg-2 vh-100">
                    <div class="nav flex-column nav-pills mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="/mahasiswa" role="tab" aria-controls="v-pills-profile" aria-selected="false">Mahasiswa</a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-messages" aria-selected="false">Dosen</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false">Matakuliah</a>
                </div>
            </div>
        </div>
                <div class="col-lg-10 vh-100">
                    <div class="card mt-4">
                        <div class="card-header">
                            <h2> Create User </h2>
                        </div>
                        <div class="card-body">
                        <div class="container-fluid mt-4">
                             <form action="/userdosen/simpanuserdosen" method="POST" class="pt-2 pb-2">
                                  @csrf 
                                  <div class="form-group w-25">
                                      <label> NIK User </label>
                                      <input type="text" name="nik" class="form-control" required autofocus>
                                      <label> Nama User </label>
                                      <input type="text" name="nama" class="form-control" required>
                                      <label> Nomor. Hp</label>
                                      <input type="text" name="no" class="form-control" required>
                                      <label> Password: </label>
                                      <input type="password" name="pass" class="form-control" required>
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>