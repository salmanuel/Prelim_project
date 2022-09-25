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
            <div class="card-title"><strong>About.</strong></div>
            <p>
                This site is for my Prelim Project <br>
                on <a href="{{ url('http://lms.materdeicollege.com/course/view.php?id=1258') }}"> <span style="color:blue;"><strong><em>Integrative Programming Technnologies 1</em></strong></span> </a> <br>
                Facilitated by our very own Handsome Teacher <br>
                <strong><em>Mr.Benjie Lenteria </em></strong><br>
                <img src="https://scontent.fceb2-1.fna.fbcdn.net/v/t1.6435-9/91728799_1542582622585154_446836320027803648_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=174925&_nc_eui2=AeGgcyq5BdULHdnc04iwjnC-7XxYRNsgh2LtfFhE2yCHYmV46WuGxfgiGQ_5VnUIL4Lk5wAfdaeqGf-OLLIfiwtZ&_nc_ohc=Ok6ddKGkQcsAX_e3-yP&_nc_ht=scontent.fceb2-1.fna&oh=00_AT-fmEypzK655DXS00hhpbwZFqffSiK1jlIhitA_2gY6bA&oe=63491E99" class="rounded mx-auto d-block" style="width:390px;height:417px" alt="Mr. Benjie Lenteria">

            </p>
        </div> 
        </div>
</body>
</html>