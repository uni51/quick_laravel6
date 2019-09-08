<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>速習Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
</head>
<body>
<table class="table">
    <tr>
        <th>書名</th>
        <th>価格</th>
        <th>出版社</th>
        <th>刊行日</th>
        <th></th>
    </tr>
    @forelse ($records as $record)
        <tr>
            <td>{{ $record->title }}</td>
            <td>{{ $record->price }}円</td>
            <td>{{ $record->publisher }}</td>
            <td>{{ $record->published }}</td>
        </tr>
    @empty
        <p>データは存在しません。</p>
    @endforelse
</table>
</body>
</html>
