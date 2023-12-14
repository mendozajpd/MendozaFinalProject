<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Meyawo landing page.">
    <meta name="author" content="Devcrud">
    <title>Login | Jean Paul D. Mendoza Jr.</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Meyawo main styles -->
    <link rel="stylesheet" href="assets/css/meyawo.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <!-- page header -->
    <header id="home" class="header">
        <div class="overlay"></div>
        <div class="row mt-5">
            <div class="col-md-12 container text-center" style="background-color: white; padding: 25px">
                <div class="form-group">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username" required> <br>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required> <br>
                        <button class="btn btn-primary" type="submit">LOGIN</button>
                    </form>
                    <br>
                    <a href="{{ route('home') }}">Go back</a>
                </div>
            </div> <!-- end of inputs -->
        </div>
    </header><!-- end of page header -->



    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Meyawo js -->
    <script src="assets/js/meyawo.js"></script>

</body>

</html>
