<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>layOut</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class=" bg-success-subtle text-center py-2">
                <h2>ELouquent-Orm CRUD</h2>
            </div>
        </div>
        <div class="row">
            <div class=" bg-primary text-center py-2">
                <h3>@yield('title')</h3>
            </div>
        </div>
        <div class="row">
            <x-alert message="{{session('status')}}"/>
        </div>
        <div class="row">
            <div class="">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>