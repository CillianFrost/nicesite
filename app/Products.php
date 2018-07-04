<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Products extends Model

{
    use Sortable;

    public $sortable = ['id',
                        'name',
                        'category',
                        'price',
                        'status'];

    public $table = 'products';
}
