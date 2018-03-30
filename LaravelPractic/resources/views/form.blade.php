<html>
    <title>Message Mail</title>
 
    <body>
        {!! Form::open(['url'=>'send_mail']) !!}
        {{ Form::text('name') }}
        {{ Form::text('email') }}
        {{ Form::textarea('msg') }}
        {{ Form::submit('Send') }}

        {!!Form::close()!!}
    </body>
</html>

