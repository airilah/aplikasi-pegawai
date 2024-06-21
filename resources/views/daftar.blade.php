<!doctype html>
<html lang="en">
    <head>
        @include('template.head')
    </head>
  <body>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 m-2 p-3 bg-white shadow w-80">
            <div class="col-md-6 d-flex justify-content-center align-items-center flex-column img-konten">
                <img src="{{ asset('assets/img/admin.png') }}" class="img-fluid rounded" style="width: 300px;">
            </div>
            <div class="col-md-6">
                <form action="/tambah_user" method="POST">
                    @csrf
                    <div class="header-text mb-4">
                        <h3 class="text-center"> SIGN UP</h3>
                    </div>
                    <div class="input-group mb-3">
                        <label for="nama" class="w-100 fw-bold">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Your Nama" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <label for="email" class="w-100 fw-bold">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Your Email" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <label for="password" class="w-100 fw-bold">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Your Password" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <input type="hidden" name="role" value="admin">
                    <div class="input-group mb-3">
                        <button type="submit" class="btn btn-success btn-lg w-100 fs-6"> Daftar </button>
                    </div>
                    <div class="input-group mb-3">
                        <p class="text-center w-100">Sudah punya akun? <a href="/">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>
