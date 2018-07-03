@extends('layouts.app')

@section('content')
    <div class="h2 nice_title w-100 mb-5">
        Charts
    </div>
    <section class="row align-items-center justify-content-around mb-4">
        <div class="col-md-2 col-6 mb-3 chart_wrapper">
            <div class="nice_charts mx-auto mb-3">
                <span>
                    20
                </span>
            </div>
            <div class="h3 text-center font-weight-light">
                Date
            </div>
        </div>
        <div class="col-md-2 col-6 mb-3 chart_wrapper">
            <div class="nice_charts mx-auto mb-3">
                <span>
                    21
                </span>
            </div>
            <div class="h3 text-center font-weight-light">
                Date
            </div>
        </div>
        <div class="col-md-2 col-6 mb-3 chart_wrapper">
            <div class="nice_charts mx-auto mb-3">
                <span>
                    22
                </span>
            </div>
            <div class="h3 text-center font-weight-light">
                Date
            </div>
        </div>
        <div class="col-md-2 col-6 mb-3 chart_wrapper">
            <div class="nice_charts mx-auto mb-3">
                <span>
                    23
                </span>
            </div>
            <div class="h3 text-center font-weight-light">
                Date
            </div>
        </div>
    </section>
    <div class="h2 nice_title w-100 mb-4">
        Sales
    </div>
    <form class="row mx-auto sales_interface">
        <table class="table mb-5 col-md-12 col-12 nice_table table_col_width_fix">
            <thead>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        <div class="nice_checkbox"></div>
                    </th>
                    <th>
                        Product
                    </th>
                    <th>
                        Category
                    </th>
                    <th>
                        Price
                    </th>
                    <th></th>
                    <th></th>
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
                        <td>
                            <i class="fas fa-pencil-alt"></i>
                        </td>
                        <td>
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </form>
    <div class="h2 nice_title w-100 mb-4">
        We Recommend
    </div>
    <section class="row align-items-center justify-content-between mb-5 we_recommend">
        <a href='#' class="col-md-4 mb-3 order-2 order-md-1">
            <img class="img rounded img-fluid" src="{{ asset('img/1.jpg') }}" data-rjs="2">
        </a>
        <a href='#' class="col-md-4 mb-3 order-3 order-md-2">
            <img class="img rounded img-fluid" src="{{ asset('img/2.jpg') }}" data-rjs="2">
        </a>
        <a href='#' class="col-md-4 mb-3 order-1 order-md-3">
            <img class="img rounded img-fluid" src="{{ asset('img/3.jpg') }}" data-rjs="2">
        </a>
    </section>
@endsection
@section('scripts')
    <script src="{{ asset('js/retina.min.js') }}"></script>
@endsection