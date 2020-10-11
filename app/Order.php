<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    const STATUS_PENDING = 1;
    const STATUS_PROCESSING = 2;
    const STATUS_COMPLETE = 3;
    const STATUS_CANCELLED = 4;

    const PAYMENT_STATUS_UNPAID = 1;
    const PAYMENT_STATUS_PARTIAL = 2;
    const PAYMENT_STATUS_PAID = 3;

    protected $fillable = [
        'customer_id', 'billing_email', 'billing_name', 'billing_address','shipping_address', 'billing_city','order_status','payment_status',
        'billing_province', 'billing_postalcode', 'billing_phone', 'billing_name_on_card', 'billing_discount',
        'billing_discount_code', 'billing_subtotal', 'billing_tax', 'billing_total', 'payment_gateway', 'error',
    ];

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product')->withPivot('quantity');
    }

    // util
    public function statusHtml()
    {
        $html = '';
        switch ($this->order_status) {
            case self::STATUS_PENDING:
                $html = '<span class="badge badge-primary">PENDING</span>';
                break;
            case self::STATUS_CANCELLED:
                $html = '<span class="badge badge-danger">CANCELLED</span>';
                break;
            case self::STATUS_COMPLETE:
                $html = '<span class="badge badge-success">COMPLETE</span>';
                break;
            case self::STATUS_PROCESSING:
                $html = '<span class="badge badge-info">PROCESSING</span>';
                break;
        }
        return $html;
    }

    public function paymentStatusHtml()
    {
        $html = '';
        switch ($this->payment_status) {
            case self::PAYMENT_STATUS_UNPAID:
                $html = '<span class="badge badge-danger">UNPAID</span>';
                break;
            case self::PAYMENT_STATUS_PARTIAL:
                $html = '<span class="badge badge-info">PARTIALLY PAID</span>';
                break;
            case self::PAYMENT_STATUS_PAID:
                $html = '<span class="badge badge-success">PAID</span>';
                break;
        }
        return $html;
    }
}
