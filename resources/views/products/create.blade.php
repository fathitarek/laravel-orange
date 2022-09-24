
<html>
<body>

@if ($errors->any())
<ul>
@foreach ( $errors->all() as $error )
   <li>{{$error}}</li> 
@endforeach
  </ul>  
@endif


{{ Form::open(array('url' => 'products/store')) }}

    {{Form::text('name')}}





 {{ Form::select('category_id',$categories,null,['placeholder' => 'Select Category...','class'=> 'form-control','id'=>'country_id'],['option'=>'categories']) }}



    

{{Form::submit('Click Me!')}}
{{ Form::close() }}





</body>
</html>