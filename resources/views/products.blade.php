@extends('layouts.app')

@section('content')
    <div class="h2 nice_title w-100 mb-5">Products</div>
    @if($products->count())
        <form class="row mx-auto products_interface">
            <table class="table mb-5 col-md-12 col-12 nice_table">
                <thead>
                <tr>
                    <th>@sortablelink('id', '#')</th>
                    <th><div class="nice_checkbox"></div></th>
                    <th>@sortablelink('name', 'Product')</th>
                    <th>@sortablelink('category', 'Category')</th>
                    <th>@sortablelink('price', 'Price')</th>
                    <th>@sortablelink('status', 'Status')</th>
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
                                @if($product->status == 'store')
                                    <a href="#" class="btn col-md-12 btn-info">Get back</a>
                                @elseif($product->status == 'sold out')
                                    <a href="#" class="btn col-md-12 btn-warning">Sell again</a>
                                @else
                                    <a href="#" class="btn col-md-12 btn-success">Put Up</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </form>
    @else
        <div class="h1 text-warning text-center">
            Nothing in the store right now. Make php artisan migrate --seed to see test data.
        </div>
    @endif
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
    <example-component></example-component>

@endsection

@section('scripts')
    <script src="{{ asset('public/js/manifest.js') }}"></script>
    <script src="{{ asset('pucblic/js/vendor.js') }}"></script>
    <script src="{{ asset('public/js/app.js') }}"></script>
@endsection