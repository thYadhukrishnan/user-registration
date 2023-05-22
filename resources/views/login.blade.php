<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<h3>Sign In</h3>
<form action="{{route('dologin')}}" method="post" class="form-signin">
    @csrf
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" name="email" class="form-control" />
    <label  for="form2Example1" class="sr-only">Email address</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" name="password" class="form-control" />
    <label class="sr-only" for="form2Example2">Password</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="true" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Remember me </label>
      </div>
    </div>

    <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
</form>

<a href="{{route('register')}}" class="btn btn-primary">Register</a>