<?php

namespace App\Admin\Selectables;

use App\Models\Price;
use Encore\Admin\Grid\Filter;
use Encore\Admin\Grid\Selectable;

class Prices extends Selectable
{
    public $model = Price::class;

    public static function display()
    {
        return function ($value) {

            // If `$value` is an array, it means it is used in the `collaborators` column, and the user’s name field separated by a semicolon `;` is displayed
            if (is_array($value)) {
                return implode(';', array_column($value,'name'));
            }

            // Otherwise it is used in the `author_id` column, which directly displays the user’s `name` field
            return "tes";
        };
    }

    public function make()
    {
        $this->column('id');
        $this->column('title');
        $this->column('zoho_code', 'Zoho addon code');
        $this->column('quantity_start');
        $this->column('quantity_end');
        $this->column('subscriptionPlan.zoho_code', 'Zoho Plan Code');

        $this->filter(function (Filter $filter) {
            $filter->like('title');
            $filter->like('subscriptionPlan.zoho_code');
        });
    }
}