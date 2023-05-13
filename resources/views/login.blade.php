<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Add Bootstrap stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<style>
    body,
    html {
        height: 100%;
        font-family: 'Poppins', sans-serif;
    }

    .container {
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .no-underline {
        text-decoration: none;
    }

</style>

<body>
    <div class="container">
        <div class="card col-md-4 p-5 shadow p-3 bg-body rounded">
          @if($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
          @endif
            <h4 class="fw-bold mb-3">Login</h4>
            <form class="col-md-12 needs-validation" action="" method="POST" novalidate>
                @csrf
              <div class="col-md-12 mb-3">
                    <div class="form-group mb-3">
                        <label for="name">Email</label>
                        <input type="email" class="form-control mt-2" name="email" id="email" placeholder="Enter your email">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control mt-2" id="password" name="password"
                            placeholder="Enter your password">
                            @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary col-md-12 mb-3">Login</button>
            </form>

        </div>
    </div>

    <!-- Add Bootstrap script -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
