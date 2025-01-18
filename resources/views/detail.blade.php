<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detail Data Siswa</title>
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

            span {
                font-weight: 600;
            }
            
            p {
                text-align: start;
            }

            .mb-3 {
                padding-left: 10px;
            }
        </style>
    </head>
    <body>
        <div class="container"><br><br>
            <div class="row d-flex justify-content-center">
                <div class="col-5">
                    <div class="card">
                        <div class="card-header">
                            <br><h2>Detail Data Siswa</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('detail', $students->id) }}" method="">
                                @csrf
                                <div class="mb-3">
                                    <p><span>Nama : </span>{{ $students->nama }}</p>
                                </div>
                                <div class="mb-3">
                                    <p><span>Kelas : </span>{{ $students->kelas }}</p>
                                </div>
                                <div class="mb-3">
                                    <p><span>Jurusan : </span>{{ $students->jurusan }}</p>
                                </div>
                                <a href="/datasiswa" class="btn btn-secondary">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>