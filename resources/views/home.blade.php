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
    <section class="row mx-auto">
    <table class="table mb-5 col-md-12 col-12 nice_table table_col_width_fix">
        <thead>
        <tr>
            <th>
                #
            </th>
            <th>
                <input type="checkbox" disabled>
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
        <tr>
            <td>
                4
            </td>
            <td>
                <input type="checkbox">
            </td>
            <td>
                TV
            </td>
            <td>
                Electronics
            </td>
            <td>
                1200$
            </td>
            <td>
                <i class="fas fa-pencil-alt"></i>
            </td>
            <td>
                <i class="fa fa-trash" aria-hidden="true"></i>
            </td>
        </tr>
        <tr>
            <td>4</td>
            <td><input type="checkbox"></td>
            <td>TV</td>
            <td>Electronics</td>
            <td>1200$</td>
            <td><i class="fas fa-pencil-alt"></i></td>
            <td><i class="fa fa-trash" aria-hidden="true"></i></td>
        </tr>
        <tr>
            <td>4</td>
            <td><input type="checkbox"></td>
            <td>TV</td>
            <td>Electronics</td>
            <td>1200$</td>
            <td><i class="fas fa-pencil-alt"></i></td>
            <td><i class="fa fa-trash" aria-hidden="true"></i></td>
        </tr>
        <tr>
            <td>4</td>
            <td><input type="checkbox"></td>
            <td>TV</td>
            <td>Electronics</td>
            <td>1200$</td>
            <td><i class="fas fa-pencil-alt"></i></td>
            <td><i class="fa fa-trash" aria-hidden="true"></i></td>
        </tr>
        <tr>
            <td>4</td>
            <td><input type="checkbox"></td>
            <td>TV</td>
            <td>Electronics</td>
            <td>1200$</td>
            <td><i class="fas fa-pencil-alt"></i></td>
            <td><i class="fa fa-trash" aria-hidden="true"></i></td>
        </tr>
        </tbody>
    </table>
    </section>
    <div class="h2 nice_title w-100 mb-4">
        We Recommend
    </div>
    <section class="row align-items-center justify-content-between mb-5">
        <div class="col-md-4 mb-3">
            <img class="img rounded img-fluid" src="{{ asset('img/1.jpg') }}">
        </div>
        <div class="col-md-4 mb-3">
            <img class="img rounded img-fluid" src="{{ asset('img/2.jpg') }}">
        </div>
        <div class="col-md-4 mb-3">
            <img class="img rounded img-fluid" src="{{ asset('img/3.jpg') }}">
        </div>
    </section>
@endsection