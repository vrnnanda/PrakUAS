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
            <div class="col-lg-12 bg-primary py-4">
            </div>
            <div class="row">
                <div class="col-lg-2 vh-100">
                    <div class="nav flex-column nav-pills mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="/mahasiswa" role="tab" aria-controls="v-pills-profile" aria-selected="false">Mahasiswa</a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-messages" aria-selected="false">Dosen</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false">Skripsi</a>
                </div>
            </div>
        </div>
                <div class="col-lg-10 vh-100">
                    <div class="card mt-4">
                        <div class="card-header">
                            <h2> Edit Data Mahasiswa</h2>
                        </div>
                        <div class="card-body">
                        <div class="container-fluid mt-4">
                            @php
                                $minat = explode (',', $mahasiswa -> bidangminat);
                            @endphp
                             <form action="/mahasiswa/updatemhs/{{ $mahasiswa -> id }}" method="POST" class="pt-2 pb-2">
                                  @csrf
                                  @method('PUT')
                                  <div class="form-group w-25">
                                      <label> NIM Mahasiswa: </label>
                                      <input type="number" name="nim" class="form-control" value="{{$mahasiswa-> nim}}" readonly>
                                      <label> Nama Mahasiswa: </label>
                                      <input type="text" name="nama" class="form-control" value="{{$mahasiswa-> nama}}" required>
                                    </div>
                                    <label> Jenis Kelamin: </label>
                                    <div class="form-check w-25">
                                        <input type="radio" name="gender" value="Laki-laki" {{$mahasiswa -> gender == 'Laki-laki' ? 'checked':''}} 
                                        class="form-check-input">
                                        <label> Laki-laki</label>
                                        <div class="from-check w-25">
                                            <input type="radio" name="gender" value="Perempuan"  {{$mahasiswa -> gender == 'Perempuan' ? 'checked':''}} 
                                            class="form-check-input">
                                            <label> Perempuan</label>
                                        </div>
                                    </div>
                                    <div class="form-group w-25">
                                        <label> Jurusan: </label>
                                        <select name="jurusan" class="form-control">
                                            <option value="Informatika" {{$mahasiswa -> jurusan == 'Informatika' ? 'selected':''}}> Informatika</option>
                                            <option value="Sistem Informasi"  {{$mahasiswa -> jurusan == 'Sistem Informasi' ? 'selected':''}}> Sistem Informasi</option>
                                            <option value="Akuntansi"  {{$mahasiswa -> jurusan == 'Akuntansi' ? 'selected':''}}> Akuntansi</option>
                                            <option value="Teologi"  {{$mahasiswa -> jurusan == 'Teologi' ? 'selected':''}}> Teologi</option>
                                            <option value="Bioteknologi"  {{$mahasiswa -> jurusan == 'Bioteknologi' ? 'selected':''}}> Bioteknologi</option>
                                            <option value="Manajemen"  {{$mahasiswa -> jurusan == 'Manajemen' ? 'selected':''}}> Manajemen</option>
                                            <option value="Arsitektur"  {{$mahasiswa -> jurusan == 'Arsitektur' ? 'selected':''}}> Arsitektur</option>
                                            <option value="Kedokteran"  {{$mahasiswa -> jurusan == 'Kedokteran' ? 'selected':''}}> Kedokteran</option>
                                        </select>
                                    </div>
                                    <label> Bidang Minat: </label>
                                    <div class="form-check w-25">
                                        <input type="checkbox" name="minat[]" value="Melukis" {{ in_array('Melukis', $minat) ? 'checked': ''}} 
                                        class="form-check-input">
                                        <label>Melukis</label>
                                    </div>
                                    <div class="form-check w-25">
                                        <input type="checkbox" name="minat[]" value="Menyanyi"  {{ in_array('Menyanyi', $minat) ? 'checked': ''}} 
                                        class="form-check-input">
                                        <label>Menyanyi</label>
                                    </div>
                                    <div class="form-check w-25">
                                        <input type="checkbox" name="minat[]" value="Tari"  {{ in_array('Tari', $minat) ? 'checked': ''}} 
                                        class="form-check-input">
                                        <label>Tari</label>
                                    </div>
                                    <div class="form-check w-25">
                                        <input type="checkbox" name="minat[]" value="Futsal"  {{ in_array('Futsal', $minat) ? 'checked': ''}} 
                                        class="form-check-input">
                                        <label>Futsal</label>
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