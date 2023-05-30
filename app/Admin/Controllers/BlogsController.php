<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use App\Models\Blog;
use App\Models\Blogs;

class BlogsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string 
     * 
     */
    protected $title = 'Blogs';


    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
    
        $grid = new Grid(new Blogs());

        $grid->column('id', __('Id'));
        $grid->column('Title', __('Title'));
        $grid->column('Image', __('Image'))->image();
        $grid->column('Active', __('Active'))->switch();
        
        $grid->filter(function($filter){

            $filter->disableIdFilter();
            $filter->like('Title', 'title');
        
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
        $form = new Form(new Blogs());

        $form->text('Title', __('Title'));
        $form->text('Slug', __('Slug'));
        $form->image('Image', __('Image'));
        $form->textarea('Description', __('Description'));
        $form->switch('Active', __('Active'))->default(1);

        return $form;
    }
}
