<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head_edit')
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    @include('partials.navbar_edit')

    @yield('content')

    @include('partials.footer_edit')

    @include('partials.scripts')
    
</body>

</html>
