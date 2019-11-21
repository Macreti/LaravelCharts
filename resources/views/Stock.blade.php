<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Stock Management</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
          <br />
          <form action="{{url('stock/add')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
               <label for="stockName">Stock Name:</label>
               <input type="text" class="form-control" id="stockName" name="stockName">
             </div>
             <div class="form-group">
               <label for="stockPrice">Stock Price:</label>
               <input type="text" class="form-control" id="stockPrice" name="stockPrice">
             </div>
             <div class="form-group">
               <label for="stockPrice">Stock Year:</label>
               <select class="form-control"  name="stockYear">
                  <option value="1991">1991</option>
                  <option value="1992">1992</option>
                  <option value="1993">1993</option>
                  <option value="1994">1994</option>
                  <option value="1995">1995</option>
                  <option value="1996">1996</option>
              </select>
            </div>
             <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>