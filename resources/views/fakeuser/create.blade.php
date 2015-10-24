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

<div class="form-group" align="center">
    <form method='POST' action=''>
        <br><br>
        <div class="alert alert-info"><h3>Enter Number of Users: </h3></div>
        <label>Number of Users  <b>(Min 1, Max 100)</b>: <br>
            <input type="text" name="numUsers" class="form-control">
        </label>
    </form>
</div>
<footer>
    &copy; {{ 'Benjamin Norman' }}
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>
</html>