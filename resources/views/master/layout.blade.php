<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard</title>

    @include('master.top')

</head>

<body>

    @include('master.partials.header')

    @include('master.partials.sidebar')

    @yield('content')

    @include('master.partials.footer')

    @include('master.bottom')

</body>

</html>
