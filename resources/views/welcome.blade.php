<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Clinic Management System</title>
        <link href="{{URL::to('css/bootstrap.min.css')}}" rel="stylesheet">
        <style type="text/css">
            .input-group{
                margin-bottom: 10px;
            }
            .well{
                margin-top: 10%;
                opacity: 0.9;
                border-top-left-radius: 100px;
                border-bottom-right-radius: 90px;
            }

             body{
              

              background: url("{{URL::to('images/bg2.jpg')}}") no-repeat center center fixed; 
              -webkit-background-size: cover;
              -moz-background-size: cover;
              -o-background-size: cover;
              background-size: cover;

            }
        </style>
    </head>
    <body>
       <div class="container">
           
           <div class="col-md-6 well">
               
               <p class="text-center">
                   <img src="{{URL::to('images/Logo.jpg')}}" width="150px">
               </p>
               <h2 class="text-center">Clinic Management System</h2>
                @include('Shared.notification')
               <form action="{{route('login_check')}}" method="POST">

                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="email" type="text" class="form-control" name="username" placeholder="Username" required="">
                  </div>

                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required="">
                  </div>

                  <div class="form-group">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
                  </div>
                </form>
           </div>
       </div>
    </body>
</html>
