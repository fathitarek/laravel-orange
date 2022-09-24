<html>
<body>
{{ Form::open(array('url' => 'category_update')) }}

    {{Form::text('name',$category->name)}}
    {{Form::text('description',$category->description)}}
    {{Form::hidden('id',$category->id)}}

{{Form::submit('Click Me!')}}
{{ Form::close() }}





</body>
</html>