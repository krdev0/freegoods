<?php

namespace App\Models;

class Item
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Item One',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, consequatur.'
            ],
            [
                'id' => 2,
                'title' => 'Item Two',
                'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda obcaecati et quasi. Quidem magnam unde aliquam magni autem quasi velit.'
            ],
        ];
    }

    public static function find($id)
    {
        $listings = self::all();

        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}
