<?php

namespace NguyenManh1997\LaravelVietNamDatabase\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';
    protected $fillable = [
    	'province_id',
		'name',
		'type'
    ];
}
