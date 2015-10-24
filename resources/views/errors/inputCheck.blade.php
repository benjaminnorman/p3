<! doctype html>
<html>

<head>
    <title>Wrong Input!</title>
    <meta charset='utf-8'>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>

<body>
<header>
    <div align="center">
        <h2 align='center' class="bg-primary">YOU'VE MADE A BIG MISTAKE</h2>
        <img
                src='http://www.kitsune.addr.com/SF-Conversions/Rifts-NeoBSG-Race/Cylon_Centurions.jpg'
                style='width:700px'
                alt='Cylons'
                class='img-rounded'
                >

        <h3>Please enter your input within the bounds provided on the form!</h3>
        <br>
        <br>

        <button class="btn btn-danger" onclick="goBack()">Go Back</button>
        <script>
            function goBack() {
                window.history.back();
            }
        </script>
    </div>
</header>

<footer align="center" vertical-align="bottom">
    <br>
    <br>
    <br>
    &copy; {{ 'Benjamin Norman' }}
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>
</html>