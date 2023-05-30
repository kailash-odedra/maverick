<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use App\Models\Team;

class TeamController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Team';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Team());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('image', __('Image'))->image();
        $grid->column('active', __('Active'))->switch();

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
        $form = new Form(new Team());

        $form->text('name', __('Name'));
        $form->text('designation', __('Designation'));
        $form->image('image', __('Image'));
        $form->textarea('details', __('Details'));
        $form->switch('active', __('Active'))->default(1);

        return $form;
    }
}
