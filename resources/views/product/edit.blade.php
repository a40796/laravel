<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('products.update',['product' => $product['id'] ]) }}" >
        @csrf 
        @method('PUT')
        <input type="text" name="title">
        <button type="submit">Submit</button>
    </form>
</body>
</html>