<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator App</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>

		<div class="container" style="margin-top: 50px">




        <form method="POST" action="{{ route('calculate.store') }}">
        @csrf
        <div class="form-group ">
           <label > <h4 class="mr-3" style="color:dodgerblue;">  Nnmber1:</h4> </label> 
            <input name="number1" type="text" class="form-control" style="width: 150px; display: inline" />
        </div>
        <div class="form-group">
            <label  >  <h5 class="mr-3" style="color:blue;">  Operation:</h5>  </label>
            <select name="operation">
                <option value="plus">Plus</option>
                <option value="minus">Minus</option>
                <option value="multiply">Multiply</option>
                <option value="divided by">Devide</option>
            </select>
        </div>
        <div class="form-group ">
            <label > <h4 class="mr-3" style="color:dodgerblue;">  Nnmber2:</h4> </label>
            <input name="number2" type="text" class="form-control" style="width: 150px; display: inline" />

        </div>
        <div class="row mt-4">
        <div class="col-md-12 text-left ml-5">
            <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
        </div>
        </div>
        </form>


    </div>
</body>
</html>
