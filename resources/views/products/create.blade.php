<h1>Create new Product</h1>
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <input type="text" placeholder="Enter Product Name" name="name" /><br><br>
    <textarea placeholder="Enter Product Details" name="description"></textarea><br> <br>
    <button type="submit">Submit</button>
</form>