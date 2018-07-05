@extends('layouts.app')

@section('content')
    <div class="h2 nice_title w-100 mb-5">
        Charts {{ $charts_day_current }}
    </div>
    <section class="row align-items-center justify-content-around mb-4 charts_interface">
        <div class="col-md-2 col-6 text-center">
            <svg width="150" height="150" viewbox="0 0 100 100">
                <circle cx="50" cy="50" r="40" stroke="#ebebeb" stroke-width="5" fill="none"></circle>
                <circle cx="50" cy="50" r="40" stroke="#df691a" stroke-width="5" fill="none" stroke-dasharray="251.327" stroke-dashoffset="{{ $charts_day_current }}"></circle>
                <text class="h4" text-anchor="middle" x='50' y='58' fill="#ebebeb" transform="rotate(90 50 50)">
                    {{ $soldout }}
                </text>
            </svg>
            <div class="h2">Day</div>
        </div>
        <div class="col-md-2 col-6 text-center">
            <svg width="150" height="150" viewbox="0 0 100 100">
                <circle cx="50" cy="50" r="40" stroke="#ebebeb" stroke-width="5" fill="none"></circle>
                <circle cx="50" cy="50" r="40" stroke="#df691a" stroke-width="5" fill="none" stroke-dasharray="251.327" stroke-dashoffset="{{ $charts_week_current }}"></circle>
                <text class="h4" text-anchor="middle" x='50' y='58' fill="#ebebeb" transform="rotate(90 50 50)">
                    {{ $soldout }}
                </text>
            </svg>
            <div class="h2">Week</div>
        </div>
        <div class="col-md-2 col-6 text-center">
            <svg width="150" height="150" viewbox="0 0 100 100">
                <circle cx="50" cy="50" r="40" stroke="#ebebeb" stroke-width="5" fill="none"></circle>
                <circle cx="50" cy="50" r="40" stroke="#df691a" stroke-width="5" fill="none" stroke-dasharray="251.327" stroke-dashoffset="{{ $charts_month_current }}"></circle>
                <text class="h4" text-anchor="middle" x='50' y='58' fill="#ebebeb" transform="rotate(90 50 50)">
                    {{ $soldout }}
                </text>
            </svg>
            <div class="h2">Month</div>
        </div>
        <div class="col-md-2 col-6 text-center">
            <svg width="150" height="150" viewbox="0 0 100 100">
                <circle cx="50" cy="50" r="40" stroke="#ebebeb" stroke-width="5" fill="none"></circle>
                <circle cx="50" cy="50" r="40" stroke="#df691a" stroke-width="5" fill="none" stroke-dasharray="251.327" stroke-dashoffset="{{ $charts_year_current }}"></circle>
                <text class="h4" text-anchor="middle" x='50' y='58' fill="#ebebeb" transform="rotate(90 50 50)">
                    {{ $soldout }}
                </text>
            </svg>
            <div class="h2">Year</div>
        </div>
    </section>
    <div class="h2 nice_title w-100 mb-4">
        Sales
    </div>
    @if($products)
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
                                    <i class="fas fa-pencil-alt"></i>
                                </td>
                                <td>
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </form>
    @else
        <div class="h1 text-warning text-center">
            Nothing in the store right now. Put up something from <a href="{{ route('products') }}"</a>
        </div>
    @endif
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