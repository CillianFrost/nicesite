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
        <tr>
            <td>4</td>
            <td><input hidden id="product1" name="" type="checkbox"><label class="nice_checkbox" for="product1">
                <div>
                    &#10003;
                </div>
            </label>
            </td>
            <td>TV</td>
            <td>Electronics</td>
            <td>1200$</td>
            <td>in store</td>
            <td><button class="btn btn-success" type="submit">Put Up</button></td>
        </tr>
        <tr>
            <td>4</td>
            <td><input hidden id="product2" name="" type="checkbox"><label class="nice_checkbox" for="product2"><div>&#10003;</div></label></td>
            <td>TV</td>
            <td>Electronics</td>
            <td>1200$</td>
            <td>in store</td>
            <td><button class="btn btn-success" type="submit">Put Up</button></td>
        </tr>
        <tr>
            <td>4</td>
            <td><input hidden id="product3" name="" type="checkbox"><label class="nice_checkbox" for="product3"><div>&#10003;</div></label></td>
            <td>TV</td>
            <td>Electronics</td>
            <td>1200$</td>
            <td>in store</td>
            <td><button class="btn btn-success" type="submit">Put Up</button></td>
        </tr>
        <tr>
            <td>4</td>
            <td><input hidden id="product4" name="" type="checkbox"><label class="nice_checkbox" for="product4"><div>&#10003;</div></label></td>
            <td>TV</td>
            <td>Electronics</td>
            <td>1200$</td>
            <td>in store</td>
            <td><button class="btn btn-success" type="submit">Put Up</button></td>
        </tr>
        <tr>
            <td>4</td>
            <td><input hidden id="product5" name="" type="checkbox"><label class="nice_checkbox" for="product5"><div>&#10003;</div></label></td>
            <td>TV</td>
            <td>Electronics</td>
            <td>1200$</td>
            <td>in store</td>
            <td><button class="btn btn-success" type="submit">Put Up</button></td>
        </tr>
        </tbody>
    </table>
    </form>
    <div class="h2 nice_title w-100 mb-5">Create new product</div>
    <form action="" method="post">
    <div class="row mb-3">
        <div class="form-group col-md-3">
        <label class="text-warning mb-3 font-weight-bold" for="Product"><span>Product</span></label>
        <input class="form-control" type="text" name="Product" id="Product">
        </div>
        <div class="form-group col-md-3">
        <label class="text-warning mb-3 font-weight-bold" for="Category"><span>Category</span></label>
        <input class="form-control" type="text" name="Category" id="Category">
        </div>
        <div class="form-group col-md-3">
        <label class="text-warning mb-3 font-weight-bold" for="Price"><span>Price</span></label>
        <input class="form-control" type="text" name="Price" id="Price">
        </div>
    </div>
    <div class="row mb-5">
        <button class="btn btn-warning col-md-1 ml-3" type="submit"><span class="h5 text-uppercase font-weight-bold">Create</span></button>
    </div>
    </form>
@endsection

@section('scripts')
    
@endsection