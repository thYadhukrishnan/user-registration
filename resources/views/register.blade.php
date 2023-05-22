<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<h3>Registration</h3>
<form action="{{route('saveuser')}}" method="post" class="form-signin">
    @csrf
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="text" name="name" class="form-control" />
    <label  for="form2Example1" class="sr-only">Name</label>
  </div>

  <div class="form-outline mb-4">
    <input type="email" name="email" class="form-control" />
    <label  for="form2Example1" class="sr-only">Email address</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" name="password" class="form-control" />
    <label class="sr-only" for="form2Example2">Password</label>
  </div>

  <div class="form-outline mb-4">
    <input type="password" name="cpassword" class="form-control" />
    <label class="sr-only" for="form2Example2">Confirm Password</label>
  </div>

  <!-- 2 column grid layout for inline styling -->


    <button type="submit" class="btn btn-primary btn-block mb-4">Register</button>
</form>

<script>
    function validateForm() {
        var password = document.getElementsByName('password')[0].value;
        var confirmPassword = document.getElementsByName('cpassword')[0].value;
    
        if (password !== confirmPassword) {
            alert("Password and Confirm Password do not match.");
            return false; 
        }
    
        return true; 
    }
</script>
