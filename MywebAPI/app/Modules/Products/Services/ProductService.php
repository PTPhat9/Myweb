<?php 

namespace Myweb\Modules\Products\Services;

use Myweb\Contracts\Products\Products;
use Myweb\Modules\Products\Models\Product;
use Myweb\Modules\Products\Models\Category;

class ProductService implements Products
{
    public function getFeaturedProducts(int $limit)
    {   
        $categories = Category::all();
        // $a = Category::find(1)->products->where('featured', '1')->take($limit);
        // $a = Product::where('id', '1')->first();
        
        $featuredProducts = [];
        foreach ($categories as $category)
        {   
            
                $products = Category::find($category->id)->products->where('featured', '1')->take($limit)->toArray();
                $featuredProducts[$category->name] = $products;
        }
        return $featuredProducts;
        
    }
}
