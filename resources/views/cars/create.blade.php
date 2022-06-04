<!doctype html>
<html lang="en">
  <head>
    <title>Add cars</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>

  <div class="container w-25 border p-4 my-4">
      <form action="{{ route('cars')}}" method="post">
          @csrf

          <div class="mb-3">
            <label for="" class="form-label">Model</label>
            <input type="text" class="form-control" name="model" id="">
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Color</label>
            <input type="text" class="form-control" name="color" id="">
          </div>

          <button type="submit" class="btn btn-primary">New car</button>
      </form>
  </div>

  <div class="container w-25 border p-4 my-4">
      <h3>Cars</h3>
      <div class="list-group">
          <table class="table">
              <thead>
                  <tr>
                      <th>Model</th>
                      <th>Color</th>
                      <th></th>
                  </tr>
              </thead>
              <tbody>
              @foreach ($cars as $car)
                  <tr>
                      <td scope="row"><a href="{{ route('cars-edit',['id' => $car->id]) }}">{{$car->model}}</a></td>
                      <td>{{$car->color}}</td>
                      <td>
                          <form action="{{ route('cars-destroy',[$car->id]) }}" method="post">
                              @method('DELETE')
                              @csrf
                          <button type="submit" class="btn btn-danger">Eliminar</button>
                          </form>
                        </td>
                  </tr>
            @endforeach
              </tbody>
          </table>
          
      </div>
          

</div>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>