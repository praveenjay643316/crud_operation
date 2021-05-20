<!DOCTYPE html>
<html lang="en">
   <head>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Add Post</title>
      <style>
         body {
         background: #f7f7f7;
         }
         .form-box {
         max-width: 500px;
         margin: auto;
         padding: 50px;
         background: #ffffff;
         border: 10px solid #f2f2f2;
         }
         h1, p {
         text-align: center;
         }
         input, textarea {
         width: 100%;
         }
      </style>
   </head>
   <body>
      <div class="form-box">
         @if(Session::has('post_add'))
         <span>{{Session::get('post_add')}}</span>
         <a href="{{route('post.list')}}">VIEW DETAILS</a>
         @endif
         <h1>ADD DETAILS</h1>
         <form method="post" action="{{route('save.post')}}">         
            <!--<h1>Cross Site Request Forgery (CSRF or XSRF) </h1>-->
            @csrf
            <div class="form-group">
               <label for="name">Name</label>
               <input class="form-control" id="name" type="text" name="name" >
               <span>@error('name'){{$message}}@enderror</span>
            </div>
            <div class="form-group">
               <label for="message">Description</label>
               <textarea class="form-control" id="description" name="description"  ></textarea>
               <span>@error('description'){{$message}}@enderror</span>
            </div>
            <input class="btn btn-primary" type="submit" value="Submit" />
      </div>
      </form>
      </div>
      </form>
   </body>
</html>