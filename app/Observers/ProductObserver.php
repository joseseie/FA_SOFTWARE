<?php

namespace App\Observers;

use App\Models\Product;

class ProductObserver
{

    public function saving(Product $object) {

//        dd('saving product...', $object);
        $object->user_id = auth()->id();

    }
}
