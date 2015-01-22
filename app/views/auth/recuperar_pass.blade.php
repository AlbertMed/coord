<meta charset="utf-8">

{{ Form::open() }}

 Matrícula:{{Form::text('matricula', Input::old('matricula')) }}
<br>
 Curp:{{Form::text('curp', Input::old('curp')) }}
<br>

{{Form::submit('login')}}
{{Form::close()}}

