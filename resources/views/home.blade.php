<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <div class="container">
        <header class="d-flex flex-wrap justify-content-md-between py-3 mb-4 border-bottom">


            <ul class="nav col-12 col-md-auto mb-2  mb-md-0">
                <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>

            </ul>

            <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </header>
    </div>
    
    <div class="container">
        <h1>Helloooo, {{ Auth::user()->firstname }} </h1>

    </div>

</body>

</html>