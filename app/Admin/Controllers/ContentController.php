<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use \App\Models\Content;
use App\Models\SubscriptionPlan;

class ContentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Content';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Content());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('main_title', __('Main Title'));
        $grid->column('title', __('Title'));
        $grid->column('description', __('Description'));
        $grid->column('active', __('Active'))->switch();

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
        $show = new Show(Content::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
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
        $form = new Form(new Content());

        $form->text('name', __('Name'))->rules('required');
        $form->text('main_title', __('Main Title'));
        $form->text('title', __('Title'));
        $form->text('description', __('Description'));
        $form->image('image', __('Image'));
        // $form->video('video', __('Video'));
        $form->switch('active', __('Active'))->default(1);

        return $form;
    }
}
