<?php

namespace App\Traits;

use App\Models\Package;
use App\Models\Product;
use App\Models\Seo;

trait PackageItemTrait{

    public function packages()
    {
        return $this->morphToMany(Package::class, 'package_items');
    }
    public function seo()
    {
        return $this->morphOne(Seo::class, 'seoable');
    }

}

?>