<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    protected $fillable = [
        'name', 'price', 'description', 'image_url'
    ];

    public function productReviews()
    {
        return $this->hasMany('App\Models\ProductReview', 'product_id');
    }

    public function orderProducts($order_by) {
        $query = 'SELECT * FROM products ORDER BY created_at DESC';

        if ($order_by == 'best_seller') {
            $query = "SELECT p.*, oi.quantity FROM products AS p LEFT JOIN ( SELECT product_id, SUM(quantity) as quantity from order_items GROUP BY product_id) AS oi ON oi.product_id = p.id ORDER BY oi.quantity DESC;";

        } else if ($order_by == 'terbaik') {
            $query = "SELECT * FROM products ORDER BY created_at DESC";

        } else if ($order_by == 'termurah') {
            $query = "SELECT * FROM products ORDER BY price ASC";

        } else if ($order_by == 'termahal') {
            $query = "SELECT * FROM products ORDER BY price DESC";

        } else if ($order_by == 'terbaru') {
            $query = "SELECT * FROM products ORDER BY created_at DESC";

        }

        return DB::select($query);
    }
}
