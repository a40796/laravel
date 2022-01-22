<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>products</h1>
    <div>
        <a href="{{route('products.create')}}">create</a>
    </div>
    @foreach ($products as $product)
    <a href="{{ route('products.show', ['product' => $product['id'] ]) }}">
        <img width="400px" src="{{$product['url']}}" alt="">
    </a>
    <div>
        <a href="{{route('products.edit', ['product' => $product['id'] ])}}">edit</a>
        <form method="POST" action="{{ route('products.destroy',['product' => $product['id'] ]) }}" >
        @csrf 
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    </div>
    <hr>
    @endforeach
  
</body>
</html>