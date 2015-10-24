<! doctype html>
<html>

<head>
    <title>Show Fake User</title>
    <meta charset='utf-8'>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>

<body>
    <div align="center">
        <header>
            <h2 align='center' class="bg-primary">Fake User Generator</h2>
            <img
                src='http://static.comicvine.com/uploads/original/11111/111116692/3233266-6113705236-56080.jpg'
                style='width:700px'
                alt='Rorschach'
                class='img-rounded'
            >
        </header>
    </div>

<section align="center">
    @foreach ($usersArray as $user)
        <br>
    <div class="panel panel-default">
        <div class="panel-body">
            <h3>
                {{ $user['name']  }}
                <h4>
                {{ $user['address'] }}
                </h4>
            </h3>
        </div>
    </div>
    @endforeach

</section>

<footer>
    &copy; {{ 'Benjamin Norman' }}
</footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>
</html>