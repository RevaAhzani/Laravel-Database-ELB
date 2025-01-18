<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tambah Data Siswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap');
            * {
                font-family: 'Poppins', sans-serif;
            }

            .container {
                text-align: center;
            }

            h2 {
                font-weight: 600;
            }

            .mb-3 {
                text-align: start;
                font-weight: 500;
            }
        </style>
    </head>
    <body>
        <div class="container"><br><br>
            <div class="row d-flex justify-content-center">
                <div class="col-5">
                    <div class="card">
                        <div class="card-header">
                            <br><h2>Tambah Data</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama</label>
                                    <input type="input" name="nama" class="form-control" id="" placeholder="Masukkan nama lengkap">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Kelas</label>
                                    <input type="input" name="kelas" class="form-control" id="" placeholder="Masukkan kelas">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Jurusan</label>
                                    <input type="input" name="jurusan" class="form-control" id="" placeholder="Masukkan jurusan">
                                </div>
                                <div class="mb-3">
                                    <!-- <input type="submit" class="btn btn-primary"> -->
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>