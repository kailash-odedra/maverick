<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use App\Models\About;

class AboutController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'About';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new About());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('image', __('Image'))->image();
        $grid->column('active', __('Active'))->switch();

        $grid->filter(function($filter){

            $filter->disableIdFilter();
            $filter->like('title', 'Title');
           
        });
        

        return $grid;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new About());

        $form->text('title', __('Title'));
        $form->image('image', __('Image'));
        $form->textarea('description', __('Description'));
        $form->switch('active', __('Active'))->default(1);

        return $form;
    }
}
