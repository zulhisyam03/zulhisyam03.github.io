<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="path/to/dist/feather.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>

</head>
<body class="bg-dark">
    @if ($message = session()->has('succes'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Selamat, </strong> {{ session()->get('succes') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    
    <div class="container mt-5">
        <div class="position-absolute top-50 start-50 translate-middle bg-light px-2">
            <h2 align='center' class="bg-success text-light p-2">Kirim Whatsapp</h2>
            <form action="/formSend" method="POST">
                @csrf
                <div class="row mb-3">
                    <label for="" class="col-3 label">Nomor Telp.</label>
                    <div class="col-9">
                        <input type="text" name="noHp" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-3 label">Pesan</label>
                    <div class="col-9">
                        <textarea class="form-control" name="pesan" id="" cols="30" rows="3"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button class="btn btn-success"><i data-feather="send"></i> Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        feather.replace()
      </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>