<?php

use App\Client;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Client::class, function (ModelConfiguration $model) {

    $model->setTitle('Лого клиентов');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('name')->setLabel('Название'),
            AdminColumn::image('image')->setLabel('Лого'),
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
                        AdminFormElement::text('name', 'Название')->required(),
                        AdminFormElement::text('nameEN', 'Название [ENG]')->required(),
                    ];
                })
                ->addColumn(function () {
                    return [
                        AdminFormElement::image('image', 'Лого')->required(),
                    ];
                }),
        ]);
        return $form;
    });
})->addMenuPage(Client::class, 5)
    ->setIcon('fa fa-picture-o');