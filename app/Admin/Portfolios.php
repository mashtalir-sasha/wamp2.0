<?php

use App\Portfolio;
use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Page;

AdminSection::registerModel(Portfolio::class, function (ModelConfiguration $model) {

    $model->setTitle('Портфолио');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('title')->setLabel('Заголовок'),
            AdminColumn::text('created_at')->setLabel('Дата создания'),
            AdminColumn::text('updated_at')->setLabel('Дата изменения'),
        ]);
        return $display;
    });

    $model->onCreateAndEdit(function () {

        $form = AdminForm::panel();
        $form->setHtmlAttribute('enctype', 'multipart/form-data');

        $form->addBody([
            AdminFormElement::columns()
                ->addColumn(function () {
                    return [
                         AdminFormElement::select('page_id', 'Выберите страницу услуги')->setModelForOptions(new Page)->setDisplay('meta_title')->required(),
                    ];
                }, 6)
                ->addColumn(function () {
                    return [
                         AdminFormElement::text('title', 'Заголовок')->required(),
                         AdminFormElement::text('titleEN', 'Заголовок [ENG]')->required(),
                    ];
                }, 6)
                ->addColumn(function () {
                    return [
                         AdminFormElement::images('images', 'Картинки')->required(),
                    ];
                }, 12),
        ]);
        return $form;
    });
})->addMenuPage(Portfolio::class, 3)
    ->setIcon('fa fa-file-image-o');