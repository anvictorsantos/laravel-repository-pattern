<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>
<body>
    <table>
        <tr>
          <th>Nome</th>
          <th>Valor</th>
        </tr>
        @foreach ($products as $product)
        <tr>
          <td>{{ $product->nome }}</td>
          <td>R$ {{ $product->valor }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>