<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        

        <style>
            body {
                font-family: 'Nunito', sans-serif;
               
            }
            .container{
               
                margin-top: 20%;
            }
        </style>
    </head>
    <body style="background-color: rgb(24, 21, 21)">
        

        <div class="container">
            <div class="text-center">
                 <h1 style="color: burlywood"><b>Welcome!</b></h1>
            </div>
            
            <div class="text-center" >
                <a class="btn btn-primary" href="{{ route('todo.view') }}" role="button">Click Here</a>
            </div>
                    
        </div>
        
        
        
        
        
    </body>
</html>
