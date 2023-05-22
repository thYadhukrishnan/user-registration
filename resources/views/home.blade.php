<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<h3>Address</h3>


<table class="table">
    <tr>
        <th>Place</th>
        <th>Phone</th>
        <th>Pin Code</th>
        <th>Actions</th>
    </tr>

    @foreach ($address as $item)

    <tr>
        <td>{{$item->place}}</td>
        <td>{{$item->phone}}</td>
        <td>{{$item->pin}}</td>
        <td><a href="{{route('editaddress',[encrypt($item->id)])}}" class="btn btn-primary">Edit</a>
            <a href="{{route('deleteaddress',[encrypt($item->id)])}}" class="btn btn-danger">delete</a></td>
    </tr>
        
    @endforeach


</table>

<a href="{{route('addaddress')}}" class="btn btn-primary">Add</a>

<a href="{{route('logout')}}" class="btn btn-primary">Logout</a>