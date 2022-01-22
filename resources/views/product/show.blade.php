<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product</h1>
   
    <img width="400px"  src="{{$product['url']}}">
    <div>
        <span>name : {{$product['name']}}</span>
        <br>
        <span>Price {{$product['price']}}</span>
        <br>
        <input type="number" name="quantity" min="1" value="1">
        <button type="button" class="addToCart">Add to cart</button>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.1/js.cookie.min.js" integrity="sha512-Meww2sXqNHxI1+5Dyh/9KAtvI9RZSA4c1K2k5iL02oiPO/RH3Q30L3M1albtqMg50u4gRTYdV4EXOQqXEI336A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        Cookies.set('foo', 'bar')
        let productName = "{{$product['name']}}"
        document.querySelector('.addToCart').addEventListener('click',()=>{
            let quantityInput = document.querySelector("input[name='quantity']").value;
            let quantity = parseInt(Cookies.get('quantity')) || 0;
            let addQuantity = parseInt(quantityInput) || 0;
            let newQuantity = quantity + addQuantity;
            Cookies.set('quantity',newQuantity)
            console.log(` ${productName} : add ${newQuantity} `)
        })
    </script>
</body>
</html>