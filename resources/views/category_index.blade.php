<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    </head>
    <body>
<h4>Number of categories is {{$cat}}</h4>
        <table border=3>
            <tr>
                <td>id</td>
                <td>name</td>
                <td>description</td>
                <td>products</td>
                <td>image</td>
                <td>actions</td>
            </tr>
            @foreach ($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
 <td>
                @foreach ( $category->products as  $product)
                    {{$product->name}}
                @endforeach
               </td>
               <td><img src="/{{$category->image}}"></td>
                <td>
                <a href="show/{{$category->id}}">show</a>    
                <a href="edit/{{$category->id}}">Edit</a>    
                <a href="delete/{{$category->id}}">Delete</a>    
                </td>
            </tr>
                
            @endforeach
           
        </table>
         {{$categories->links()}}
    </body>
</html>