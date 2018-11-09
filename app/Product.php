<?php
/**
 * Created by PhpStorm.
 * User: HeadHunter
 * Date: 09.11.2018
 * Time: 0:41
 */

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model {

    protected $table = 'product';

    protected $guarded = [];
}