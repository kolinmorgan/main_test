<html>
    <head>

    </head>
    <body>


        <h1>Send Mail</h1>
        {!! Form::open(['url' => 'send-mail']) !!}
        {{ Form::text('name') }} <br>
        {{ Form::text('email') }}<br>
        {{ Form::textarea('message') }}<br>
        {{ Form::submit('Send') }}<br>

        {!! Form::close() !!}
    </body>
</html>