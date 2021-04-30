<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body style="background-color: black;">
    <div class="container">
        <div class="text-center">
            <br/>
                <h1 style="color: cornsilk">Todo Application</h1>
            <br/>

                <div class="row">
                    <div class="col-md-12">
                        @foreach ($errors->all() as $error )
                            <div class="alert alert-danger" role="alert">
                                {{ $error }}
                            </div>
                        @endforeach
                        <form method="POST" action="{{ route('todo.save') }}">
                            {{ csrf_field() }}
                        <input type="text" class="form-control" name="task" placeholder="Enter Your Task"><br/>
                        <input type="submit" value="Add Task" class="btn btn-primary">
                        </form>
                        <br/><br/>
                        <table class="table table-dark">
                            <th>Task</th>
                            <th>Completed or Not</th>
                            <th>Action</th>
                            @foreach ($datas as $data)
                            <tr>
                            
                                <td>{{ $data->task }}</td>
                                <td>
                                    @if ($data->iscompleted)
                                    <button class="btn btn-success">Completed</button>
                                    @else
                                    <button class="btn btn-warning">Not Complete</button>
                                    
                                    @endif
                                </td>
                                <td>
                                    @if ($data->iscompleted)
                                        <a href="/notcompleted/{{ $data->id }}" class="btn btn-danger">Mark As not Completed</a>
                                        
                                    @else
                                        <a href="/completed/{{ $data->id }}" class="btn btn-primary">Mark As Completed</a>
                                        
                                    @endif
                                    <a href="/deleted/{{ $data->id }}" class="btn btn-warning">Delete</a>
                                    
                                    
                                </td>
                                
                                
                            </tr>
                        @endforeach
                        </table>
                    </div>
                </div>
        </div>
    </div>
</body>
</html>