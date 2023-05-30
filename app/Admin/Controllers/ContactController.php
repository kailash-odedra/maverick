<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use App\Models\Contact;

class ContactController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Contact';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Contact());
        
        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('subject', __('Subject'));
        $grid->column('message', __('Message'));

        $grid->filter(function($filter){

            $filter->disableIdFilter();
            $filter->like('name', 'Name');
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
        $form = new Form(new Contact());

        $form->text('name', __('Name'));
        $form->text('email', __('Email'));
        $form->textarea('subject', __('Subject'));
        $form->textarea('message', __('Message'));

        return $form;
    }
}
