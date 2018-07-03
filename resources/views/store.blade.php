@extends('layouts.app')

@section('content')
    <div class="h2 nice_title w-100 mb-5">
        Store
    </div>
    @if($products)
        <form class="row mx-auto store_interface">
            <table class="table mb-5 col-md-12 col-12 nice_table table_col_width_fix">
                <thead>
                <tr>
                    <th>#</th>
                    <th><div class="nice_checkbox"></div></th>
                    <th>Product</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Buy</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        @if($product->status == 'store')
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
                                <td>
                                    <a href="#" class="btn btn-success">Buy</a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </form>
    @endif
@endsection
@section('scripts')
    
@endsection