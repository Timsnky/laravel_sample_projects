<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel Form</title>
	<style>
		.input {
			width: 200px;
		}

	</style>

</head>
<body>
{{ Form::open(array('url' => '/submit')) }}

<div class="form-group">
	{{ Form::label('name','Name', array('class' => 'input')) }}
	{{ Form::text('name','', array('class' => 'input form-control', 'placeholder' => 'Enter your full names')) }}
	<br></br>
</div>
<div class="form-group">
	{{ Form::label('phone','Phone Number', array('class' => 'input')) }}
	{{ Form::text('phone','', array('class' => 'input form-control', 'placeholder' => 'Enter your phone number')) }}
	<br></br>
</div>
<div class="form-group">
	{{ Form::label('email','Email', array('class' => 'input')) }}
	{{ Form::email('email','', array('class' => 'input', 'placeholder' => 'example@gmail.com')) }}
	<br></br>
</div>
<div class="form-group">
	{{ Form::label('age','Age', array('class' => 'input')) }}
	{{ Form::number('age','', array('class' => 'input', 'placeholder' => 'Enter your Age')) }}
	<br></br>
</div>
<div class="form-group">
	{{ Form::submit('Submit Data') }}
	<br></br>
</div>
{{ Form::close() }}



{{ Form::open(array('url' => '/display')) }}
<div class="form-group">
	{{ Form::submit('Display Data') }}
</div>
{{ Form::close() }}

{{ isset($content) ? $content : '' }}
</body>
</html>
