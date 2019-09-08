<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>速習Laravel</title>
</head>
<body>
{!! $msg !!}

<p>{{ $msg }}</p>

<p>@{{ $msg }}</p>

@verbatim
    <p>{{ $msg }}</p>
@endverbatim
</body>
</html>
