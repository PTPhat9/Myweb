<?php 

namespace Myweb\Contracts\Products;

interface Products
{
    public function getFeaturedProducts(int $limit);
}