<! doctype html>
<html>

<head>
    <title>Lorem Ipsum Generator</title>
    <meta charset='utf-8'>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>

<body>
<header>
    <div align="center">
    <h2 align='center' class="bg-primary">Lorem Ipsum Generator</h2>
        <img
            src='https://i.guim.co.uk/img/static/sys-images/Books/Pix/pictures/2010/12/31/1293798468140/Detail-of-Plato-and-Arist-007.jpg?w=620&q=85&auto=format&sharp=10&s=acc4efb5ebc8cc1f26f6733f4844b136'
            style='width:700px'
            alt='Plato'
            class='img-rounded'
        >
    </div>
</header>

<section align="center">
    @foreach ($paragraphs as $paragraph)
        <br>
                <h5>
                    {{ $paragraph }}
                </h5>
    @endforeach
</section>

<footer>
    &copy; {{ 'Benjamin Norman' }}
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>
</html>