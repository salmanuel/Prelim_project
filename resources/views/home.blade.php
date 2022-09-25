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
    <div class="card shadow-sm mx-auto" style= "width: 700px">
        <div class="text-center">
        <div class="card-body"></div>
        <div class="card-title"><strong>Welcome!</strong></div>
        <p>
            Hi! This is my <strong><em>Prelim Project</em></strong>. <br>
            While you are here, please enjoy this cute picture of a puppy. <br>
            Also a <a href="{{ url('https://youtu.be/dQw4w9WgXcQ') }}"> <span style="color:blue;">video</span> </a> to pass time.
            <img src="https://www.rd.com/wp-content/uploads/2018/02/30_Adorable-Puppy-Pictures-that-Will-Make-You-Melt_124167640_YamabikaY.jpg?fit=700,467" class="img-thumbnail" style="width:700px;height:467px" alt="cute puppy">
        </p>
    </div>
    </div>
    

    
</body>
</html>