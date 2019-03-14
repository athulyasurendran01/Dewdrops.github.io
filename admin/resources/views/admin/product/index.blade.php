@extends('admin.layout.admin')
@section('content')
<h3>Products</h3>
<div class="row">
    <ul>
        @forelse($products as $product)
        <li>
            <h4>Name of Product: {{$product->name}}</h4>
        </li>
        @empty
        <h4>No products</h4>
        @endforelse
    </ul>
</div>
@endsection