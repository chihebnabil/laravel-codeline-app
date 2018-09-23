<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 23/09/2018
 * Time: 19:55
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Country extends Model {


    /**
     * @return mixed
     */
    public function films() {
        return $this->hasMany(Film::class);
    }
}