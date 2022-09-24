
<html>
<body>

@if ($errors->any())
<ul>
@foreach ( $errors->all() as $error )
   <li>{{$error}}</li> 
@endforeach
  </ul>  
@endif

{{ Form::open(array('url' => 'category/store','files'=>true)) }}

    {{Form::text('name')}}
    {{Form::text('description')}}
    {{Form::file('image')}}

{{Form::submit('Click Me!')}}
{{ Form::close() }}





</body>
</html>