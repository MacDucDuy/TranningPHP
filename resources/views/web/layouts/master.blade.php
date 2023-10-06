<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('web.layouts.partials.style')
    @include('web.layouts.partials.scripts')

    <title>Document</title>
</head>

<body>
    @include('web.layouts.partials.header')
    <div class="container my-3">
        @yield('content')
    </div>
    @include('web.layouts.partials.footer')

</body>

@include('web.layouts.partials.components.slider')

</html>
