
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">

    

    

<link href="https://getbootstrap.com/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.2/examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin w-100 m-auto">
  <form action="/user/cekLogin" method="POST">
  <div class= "card-header">
  @if  (session('alertlogout'))
  <div class="alert alert-success" role="alert">
    <strong>{{session('alertlogout')}}</strong> 
    </button>
  </div>
  @endif
  <div class="card-body">
      @csrf
    <img class="mb-4" src="https://yt3.ggpht.com/a/AGF-l78MPPw0HzRJekvPTDB2nL9SV781E3MzdQ4jOg=s900-c-k-c0xffffffff-no-rj-mo" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Form Login</h1>
    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted"> Template 2022</p>
  </form>
</main>
  </body>
</html>
