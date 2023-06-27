<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  <div class="container">
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
      {{ Session::get('success')}}
    </div>
    @endif
    <form action="{{route('register')}}" method="POST" class="ms-auto me-auto mt-auto" style="width: 500px;">
      @csrf
      <h1 class="card-title">Register</h1>
      <div class="mb-3 mt-5">
        <label class="form-label">firstname</label>
        <input type="text" class="form-control" name="firstname">
      </div>
      <div class="mb-3">
        <label class="form-label">lastname</label>
        <input type="text" class="form-control" name="lastname">
      </div>

      <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="email" class="form-control" name="email">
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
      </div>

      <button type="submit" class="btn btn-primary">Register</button>
    </form>
  </div>

</body>

</html>