<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel 6 Crud</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">LSAPP</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="">Product</a></li>
                    <li><a href="">Product Category</a></li>
                    <li><a href="">Product Status</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">    
            @yield('main')
        </div>
    </body>
</html>