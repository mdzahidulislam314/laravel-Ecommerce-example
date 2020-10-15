<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    public static function findByCode($code)
    {
        return self::where('code', $code)->first();
    }

    public function discount($total)
    {
        if ($this->type == 'Fixed') {
            return $this->value;
        } elseif ($this->type == 'Percent') {
            return round(($this->percent_off / 100) * $total);
        } else {
            return 0;
        }
    }
}
