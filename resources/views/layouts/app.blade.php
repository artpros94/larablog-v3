<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <title>@yield('title')</title>
</head>
<body>

<div class="wrapper">
    
    <div class="container">
        <header class="header">
            @include('elems.header')
        </header>
    </div>

    <div class="content">
       <div class="container">
        <div class="row">
                <div class="col-8">
                    @yield('content')
                </div>
                <div class="col-4">
                    @include('elems.sidebar')
                </div>
            </div>
       </div>
    </div>

    <div class="container">
        <div class="footer">
            @include('elems.footer')
        </div>
    </div>

</div>
    
</body>
</html>