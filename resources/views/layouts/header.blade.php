<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD App</title>
    <link rel="stylesheet" href="{{url('css/style.css')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;1,700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;1,700&family=Work+Sans:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>



    <!-- header -->

    <header class="header">

        <div class="container flexx">

            <!-- Logo -->

            <div class="logo">

                <h2>Crud Application in laravel</h2>

            </div>
            <!-- Menu -->


            <ul class="menu">

                <li>
                    <a href="{{url('player/')}}">Players </a>
                </li>

                <li>
                <a href="{{url('team/')}}">teams </a>
                </li>

            </ul>


        </div>
    </header>

</body>
</html>