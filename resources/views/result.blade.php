
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container"> 
    <div class="row mt-5 mb-5 "> 
        <div class="col-md-12 text-center ">  <h1 style="color:chocolate;">  All Operation In Calculater </h1> </div>        

</div> 

<table class="table mt-3 table-hover">
        <thead>
            <tr>
                <th>Number1</th>
                <th>Operation </th>
                <th> Number2</th>
                <th> Result </th>
                <th> Date </th>
            </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
            <tr>
                <td>{{ $item->num1 }}</td>
                <td>{{ $item->oper }}</td>
                <td>{{ $item->num2 }}</td>
                <td> {{ $item->result  }}</td>
                <td> {{ $item->date }}  </td>
            </tr>
            
            @endforeach
        </tbody>
    </table>

<a class="btn btn-primary mt-5 mb-5" href="{{ route('calculate.create') }}"> Calculater </a>

    </div>
</body>
</html>