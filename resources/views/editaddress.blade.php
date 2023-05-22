<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<h3>Add Address</h3>
<form action="{{route('updateaddress')}}" method="post" class="form-signin">
    @csrf
  <!-- Email input -->
  <input type="hidden" name="id" value="{{ encrypt($address->id) }}">
  <div class="form-outline mb-4">
    <input type="text" name="place" value="{{$address->place}}" class="form-control" />
    <label  for="form2Example1" class="sr-only">Place</label>
  </div>

  <div class="form-outline mb-4">
    <input type="text" name="phone" value="{{$address->phone}}" class="form-control" />
    <label  for="form2Example1" class="sr-only">Phone</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="text" name="pincode" value="{{$address->pin}}" class="form-control" />
    <label class="sr-only" for="form2Example2">Pin Code</label>
  </div>

  <!-- 2 column grid layout for inline styling -->


    <button type="submit" class="btn btn-primary btn-block mb-4">Update</button>

</form>