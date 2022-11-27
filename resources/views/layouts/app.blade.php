<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
    @yield('content')
    <script>
        function toggleForm(){
            let container = document.querySelector('.container')
            let section = document.querySelector('section')
            container.classList.toggle('active')
            section.classList.toggle('active')
        }
    </script>
</body>
</html>
