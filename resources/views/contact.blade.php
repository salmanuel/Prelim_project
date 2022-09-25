<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prelim Project</title>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
<nav class="nav nav-tabs nav justify-content-end">
        <a href="{{url('/')}}" class="nav-link">Home</a>
        <a href="{{url('/about')}}" class="nav-link">About</a>
        <a href="{{url('/contact')}}" class="nav-link">Contact</a>
        </nav>
        <div class="card shadow-sm mx-auto" style= "width: 500px">
        <div class="text-center">
            <div class="card-body"></div>
            <div class="card-title"><strong></strong></div>
            <p>
                You can contact me through my gmail account
                <a href="{{ url('https://mail.google.com/') }}"> <span style="color:blue;">salutanemanuelle@gmail.com</span> </a> 
                
            </p>
            <p>
                Or you can call or message me on<br><span style="color:blue;">+639*********</span>
            </p>
        </div>
        </div>
    
    
</body>
</html>