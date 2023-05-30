<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use App\Models\Subportfolio;
use App\Models\Category;

class SubportfolioController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Subportfolio';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Subportfolio());

        $grid->column('id', __('Id'));
        $grid->column('Title', __('Title'));
        $grid->column('Image', __('Image'))->image();
        $grid->column('Active', __('Active'))->switch();

        $grid->filter(function($filter){

            $filter->disableIdFilter();
            $filter->like('Title', 'Title');
            $filter->in('type')->multipleSelect([
                'subscription' => 'subscription',
                'retail' => 'retail',
                'addon' => 'addon'
            ]);
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
        $form = new Form(new Subportfolio());

        $form->text('Title', __('Title'));
        $form->image('Image', __('Image'));
        $form->textarea('Description', __('Discription'));
        $form->select('Category_Id', __('Category'))->options(Category::pluck('title', 'id'));
        $form->switch('Active', __('Active'))->default(1);

        return $form;
    }
}
