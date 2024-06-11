<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <br>
        <br>
        <br>
        <br>
        
        <form action="#" method="post" >
            <input type="text" class="form-control" name="task" value="{{$taskdata->task}}"/>     <br>
            <input type="hidden" name="id" value="{{$taskdata->id}}">      
            <input type="submit" class="btn btn-warning" value="Update">
            &nbsp;&nbsp; <input type="button" class="btn btn-danger" value="Cancel" >
        </form>
    </div>
</body>
</html>