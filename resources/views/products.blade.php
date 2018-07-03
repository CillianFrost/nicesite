@extends('layouts.app')

@section('content')
    <div class="h2 nice_title w-100 mb-5">Products</div>
    <form class="row mx-auto products_interface">
        <table class="table mb-5 col-md-12 col-12 nice_table table_col_width_fix">
            <thead>
            <tr>
                <th>#</th>
                <th><div class="nice_checkbox"></div></th>
                <th>Product</th>
                <th>Category</th>
                <th>Price</th>
                <th>Status</th>
                <th>Store</th>
            </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>
                            {{ $product->id }}
                        </td>
                        <td>
                            <input hidden id="product-{{ $product->slug }}" name="" type="checkbox">
                            <label class="nice_checkbox" for="product-{{ $product->slug }}">
                                <div>
                                    &#10003;
                                </div>
                            </label>
                        </td>
                        <td>
                            {{ $product->name }}
                        </td>
                        <td>
                            {{ $product->category }}
                        </td>
                        <td>
                            ${{ $product->price }}
                        </td>
                        <td class="text-warning">
                            {{ $product->status }}
                        </td>
                        <td>
                            <a href="#" class="btn btn-success">Put Up</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </form>

    <div class="h2 nice_title w-100 mb-5">Create new product</div>

    <form action="{{ route('products.store') }}" method="post">
        @csrf
        <div class="row mb-3">
            <div class="form-group col-md-3">
                <label class="text-warning mb-3 font-weight-bold" for="name">
                    <span>
                        Product
                    </span>
                </label>
                <input class="form-control" type="text" name="name" id="name">
            </div>

            <div class="form-group col-md-3">
                <label class="text-warning mb-3 font-weight-bold" for="category">
                    <span>
                        Category
                    </span>
                </label>
                <input class="form-control" type="text" name="category" id="category">
            </div>

            <div class="form-group col-md-3">
                <label class="text-warning mb-3 font-weight-bold" for="price">
                    <span>
                        Price
                    </span>
                </label>
                <input class="form-control" type="text" name="price" id="price">
            </div>

            <div class="form-group col-md-3">
                <label class="text-warning mb-3 font-weight-bold" for="slug">
                    <span>
                        Slug
                    </span>
                </label>
                <input class="form-control" type="text" name="slug" id="slug">
            </div>
        </div>

        <div class="row mb-5">
            <button class="btn btn-warning col-md-1 ml-3" type="submit">
                <span class="h5 text-uppercase font-weight-bold">
                    Create
                </span>
            </button>
        </div>
    </form>
@endsection

@section('scripts')
    
@endsection