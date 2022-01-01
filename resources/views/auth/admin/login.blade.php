<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>CMS · Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">



    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->

    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="/css/signin.css" rel="stylesheet">
</head>
<body class="text-center">

<main class="form-signin">
    <form action="{{route('login.authenticate')}}" method="post">
        @csrf
        <img class="mb-4" src="/img/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror "
                   id="floatingInput" placeholder="name@example.com"
                   value="{{old('email','')}}"
            >
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" name="password"
                   class="form-control @error('password') is-invalid @enderror"
                   id="floatingPassword" placeholder="Password" >
            @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" name="remember" value="yes"> Remember me
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
    </form>
</main>
</body>
</html>
