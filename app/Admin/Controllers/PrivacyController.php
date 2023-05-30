<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use \App\Models\Privacy;

class PrivacyController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Privacy Policy';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Privacy());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
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
        $show = new Show(Privacy::findOrFail($id));

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
        $form = new Form(new Privacy());
        $form->text('title', __('Title'));
        $form->ckeditor('description', __('Description'))
            ->options(getCkOptions())
            ->rules('required');
        $form->switch('active', __('Active'))->default(1);

        return $form;
    }
}
