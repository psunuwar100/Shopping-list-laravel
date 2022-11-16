<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">Welcome To Outdoor</h1>
    <form class="col-6 mx-auto" method="post" action="{{route('saveProducts')}}">
      @csrf
  <div class="mb-3">
    <label for="Batch" class="form-label">Batch</label>
    <input type="text" name="batchName" class="form-control" id="">
  </div>
  <div class="mb-3">
    <label for="Quantity" class="form-label">Quantity</label>
    <input type="text" name="batchQuantity" class="form-control" id="">
  </div>
  <div class="mb-3">
      <label for="Status" class="form-label">Status</label>
      <select class="form-select" name="Status" aria-label="Default select example">
          <option value="Small">Small</option>
          <option value="Medium">Medium</option>
          <option value="Large">Large</option>
        </select>
    </div>
    <div class="mb-3">
      <label for="Remarks" class="form-label">Remarks</label>
      <input type="textarea" name="Remarks" class="form-control" id="">
    </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<table class="table table-hover w-75 mx-auto my-3">
            <thead>
                <tr class="table-primary">
                    <th scope="col">SN</th>
                    <th scope="col">Batch</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Status</th>
                    <th scope="col">Remarks</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-success">
                        @foreach($items as $value)
                        <tr class="table-primary">
                          <th scope="row">{{$loop->index+1}}</th>
                          <td>{{$value->batchName}}</td>
                          <td>{{$value->batchQuantity}}</td>
                          <td>{{$value->status}}</td>
                          <td>{{$value->remarks}}</td>
                            <td>
                                <a class="btn btn-primary" href="/edit/{{$value->id}}">Edit</a>
                                <a class="btn btn-danger" href="/delete/{{$value->id}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                </tr>
            </tbody>
        </table>

</body>
</html>