<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThemNxb extends Model
{
    protected $table = 'tbl_them_nxb';
    public function product()
    {
        return $this->belongsTo(Product::class,'nxb_id', 'nxb_id');
    }
    

}
