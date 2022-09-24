<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    </head>
    <body>

        <table border=3>
            <tr>
                <td>id</td>
                <td>name</td>
                <td>Category</td>
                <td>actions</td>
            </tr>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->category->name}}</td>
                <td>
                <a href="show/{{$product->id}}">show</a>    
                <a href="edit/{{$product->id}}">Edit</a>    
                <a href="delete/{{$product->id}}">Delete</a>    
                </td>
            </tr>
                
            @endforeach
           
        </table>
         {{$products->links()}}
    </body>
</html>