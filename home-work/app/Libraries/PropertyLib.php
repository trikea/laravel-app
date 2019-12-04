<?php
 
namespace App\Libraries;
 
class PropertyLib
{
    public static function createPropertyPriceHistory($new, $old = false)
    {
        $data['rent_price'] = $new->rent_price;
        $data['sold_price'] = $new->sold_price;
        $data['list_price'] = $new->list_price;
        $data['sale_price'] = $new->sale_price;
        if($old) {
            if($new->rent_price != $old->rent_price || $new->sold_price != $old->sold_price || $new->list_price != $old->list_price || $new->sale_price != $old->sale_price) {
                $data['rent_price'] = $old->rent_price;
                $data['sold_price'] = $old->sold_price;
                $data['list_price'] = $old->list_price;
                $data['sale_price'] = $old->sale_price;
                $new->property_price_histories()->create($data);
            }
        } 
        else {
            if($new->rent_price || $new->sold_price || $new->list_price || $new->sale_price) $new->property_price_histories()->create($data);
        }
    }
}