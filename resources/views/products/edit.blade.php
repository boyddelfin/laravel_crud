<h1>Update {{$product->name}}</h1>
<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" placeholder="Enter Product Name" name="name" value="{{$product->name}}" /><br><br>
    <textarea placeholder="Enter Product Details" name="description">{{$product->description}}</textarea><br> <br>
    <button type="submit">Submit</button>
</form>