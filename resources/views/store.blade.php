@extends('layouts.app')

@section('content')
    <div class="h2 nice_title w-100 mb-5">
        Store
    </div>
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
            <tr>
                <td>4</td>
                <td><input hidden id="product1" name="" type="checkbox"><label class="nice_checkbox" for="product1"><div>&#10003;</div></label></td>
                <td>TV</td>
                <td>Electronics</td>
                <td>1200$</td>
                <td><button class="btn btn-success" type="submit">Buy</button></td>
            </tr>
            <tr>
                <td>4</td>
                <td><input hidden id="product2" name="" type="checkbox"><label class="nice_checkbox" for="product2"><div>&#10003;</div></label></td>
                <td>TV</td>
                <td>Electronics</td>
                <td>1200$</td>
                <td><button class="btn btn-success" type="submit">Buy</button></td>
            </tr>
            <tr>
                <td>4</td>
                <td><input hidden id="product3" name="" type="checkbox"><label class="nice_checkbox" for="product3"><div>&#10003;</div></label></td>
                <td>TV</td>
                <td>Electronics</td>
                <td>1200$</td>
                <td><button class="btn btn-success" type="submit">Buy</button></td>
            </tr>
            <tr>
                <td>4</td>
                <td><input hidden id="product4" name="" type="checkbox"><label class="nice_checkbox" for="product4"><div>&#10003;</div></label></td>
                <td>TV</td>
                <td>Electronics</td>
                <td>1200$</td>
                <td><button class="btn btn-success" type="submit">Buy</button></td>
            </tr>
            <tr>
                <td>4</td>
                <td><input hidden id="product5" name="" type="checkbox"><label class="nice_checkbox" for="product5"><div>&#10003;</div></label></td>
                <td>TV</td>
                <td>Electronics</td>
                <td>1200$</td>
                <td><button class="btn btn-success" type="submit">Buy</button></td>
            </tr>
            </tbody>
        </table>
    </form>
@endsection
@section('scripts')
    
@endsection