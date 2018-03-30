<HTML>
    <HEAD>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, maximum-scale=1">
        <TITLE>{{ $title }}</TITLE>
        <LINK rel="icon" href="favicon.png" type="image/png">
        <LINK href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
        <LINK href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" >
    
        <script type="text/javascript" src="{{ asset('assets/js/jquery-1.11.0.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/bootstrap-filestyle.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/ckeditor/ckeditor.js') }}"></script>



    </HEAD>
    <BODY>
        <HEADER id="header_wrapper">
            @yield('header')
            
            @if(count($errors) > 0 )
            <DIV class="alert alert-danger">
                <UL>
                    @foreach($errors->all() as $error)
                    <LI>{{ $error }}</LI>
                    @endforeach
                </UL>
            </DIV>
            @endif
            @if(session('status'))
            <DIV class="alert alert-success">
                {{ session('status') }}
            </DIV>
            @endif
        </HEADER>
        @yield('content')
    </BODY>
</HTML>

