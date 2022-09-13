<h1>Product Lists</h1>
<a href="/products/create">Add New Products</a>
@if (count($products) > 0)
    @foreach ($products as $product)
        <div class="product-item">
            <h3><a href="/products/{{$product->id}}">{{$product->name}}</a></h3>
            <p>{{$product->description}}</p>
        </div>
    @endforeach
@else
    <p>No Products Found.</p>
@endif