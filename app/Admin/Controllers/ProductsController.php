<?php

namespace App\Admin\Controllers;

use App\Models\Products;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Products';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Products());

        $grid->column('id', __('Id'));
        $grid->column('Name', __('Name'));
        $grid->column('Description', __('Description'));
        $grid->column('Price', __('Price'));
        $grid->column('Stars', __('Stars'));
        $grid->column('image_url', __('Image url'));
        $grid->column('Location', __('Location'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('type_id', __('Type id'));

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
        $show = new Show(Products::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('Name', __('Name'));
        $show->field('Description', __('Description'));
        $show->field('Price', __('Price'));
        $show->field('Stars', __('Stars'));
        $show->field('image_url', __('Image url'));
        $show->field('Location', __('Location'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('type_id', __('Type id'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Products());

        $form->textarea('Name', __('Name'));
        $form->textarea('Description', __('Description'));
        $form->number('Price', __('Price'));
        $form->number('Stars', __('Stars'));
        $form->textarea('image_url', __('Image url'));
        $form->textarea('Location', __('Location'));
        $form->number('type_id', __('Type id'));

        return $form;
    }
}
