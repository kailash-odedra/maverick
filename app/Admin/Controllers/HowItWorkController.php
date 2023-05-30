<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use \App\Models\HowItWork;

class HowItWorkController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'How It Works';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new HowItWork());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('section', __('Section'));
        $grid->column('active', __('Active'))->switch();

        $grid->filter(function($filter){

            $filter->disableIdFilter();
            $filter->like('title', 'Title');
            
        });

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(HowItWork::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('description', __('Description'));
        $show->field('active', __('Active'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new HowItWork());
        $form->text('title', __('Title'));
        $form->textarea('description', __('Description'));
        $form->select('section', __('Section'))
            ->options(['home' => 'Home', 'inner'=> 'Inner'])->default('home');
        $form->image('image', __('Image'));
        $form->switch('active', __('Active'))->default(1);

        return $form;
    }
}
