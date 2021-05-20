<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>View Posts</title>
      <style>
         table {
         font-family: arial, sans-serif;
         border-collapse: collapse;
         width: 60%;
         }
         td, th {
         border: 1px solid #dddddd;
         text-align: left;
         padding: 8px;
         }
         tr:nth-child(even) {
         background-color: #dddddd;
         }
         .w-5{
             display:none;
         }
      </style>
   </head>
   <body>
      @if(Session::has('delete_add'))
      <span>{{Session::get('delete_add')}}</span>
      @endif
      <a href="{{route('post.add')}}">ADD POST</a>
      <table>
         <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Actions</th>
         </tr>
         @foreach($posts as $post)
         <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->name}}</td>
            <td>{{$post->description}}</td>
            <td>
               <a href="/edit-list/{{$post->id}}">EDIT</a>
               <a href="/delete-list/{{$post->id}}">DELETE</a>
         </tr>
         @endforeach
      </table>
      <span>
      {{$posts->links()}}
      </span>
   </body>
</html>