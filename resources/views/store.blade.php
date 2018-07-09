@extends('layouts.app')

@section('content')
    <div class="h2 nice_title w-100 mb-5">
        Store
    </div>
    @if($store_products->count())
        <form class="row mx-auto store_interface">
            <table class="table mb-5 col-md-12 col-12 nice_table table_col_width_fix">
                <thead>
                <tr>
                    <th>@sortablelink('id', '#')</th>
                    <th><div class="nice_checkbox"></div></th>
                    <th>@sortablelink('name', 'Product')</th>
                    <th>@sortablelink('category', 'Category')</th>
                    <th>@sortablelink('price', 'Price')</th>
                    <th>Buy</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($store_products as $item)
                        @if($item->status == 'store')
                            <tr>
                                <td>
                                    {{ $item->id }}
                                </td>
                                <td>
                                    <input hidden id="product-{{ $item->slug }}" name="" type="checkbox">
                                    <label class="nice_checkbox" for="product-{{ $item->slug }}">
                                        <div>
                                            &#10003;
                                        </div>
                                    </label>
                                </td>
                                <td>
                                    {{ $item->name }}
                                </td>
                                <td>
                                    {{ $item->category }}
                                </td>
                                <td>
                                    ${{ $item->price }}
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