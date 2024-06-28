<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>pagination::bootstrap-4</p>
    {{$data->links('pagination::bootstrap-4')}}
    <p>pagination::bootstrap-5</p>
    {{$data->links('pagination::bootstrap-5')}}
    <p>pagination::default</p>
    {{$data->links('pagination::default')}}
    <p>pagination::semantic-ui</p>
    {{$data->links('pagination::semantic-ui')}}
    <p>pagination::simple-bootstrap-4</p>
    {{$data->links('pagination::simple-bootstrap-4')}}
    <p>pagination::simple-bootstrap-5</p>
    {{$data->links('pagination::simple-bootstrap-5')}}
    <p>pagination::simple-default</p>
    {{$data->links('pagination::simple-default')}}
</body>
</html>
