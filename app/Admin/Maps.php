<?php

use App\Map;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Map::class, function (ModelConfiguration $model) {

    $model->setTitle('Карта клиентов');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('place')->setLabel('Страна'),
            AdminColumn::text('text')->setLabel('Текст'),
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
                        AdminFormElement::text('place', 'Страна')->required(),
                        AdminFormElement::text('placeEN', 'Страна [ENG]')->required(),
                    ];
                })
                ->addColumn(function () {
                    return [
                        AdminFormElement::text('title', 'Заголовок')->required(),
                        AdminFormElement::text('titleEN', 'Заголовок [ENG]')->required(),
                    ];
                })
                ->addColumn(function () {
                    return [
                        AdminFormElement::textarea('text', 'Текст')->required(),
                        AdminFormElement::textarea('textEN', 'Текст [ENG]')->required(),
                    ];
                }),
        ]);
        $form->addBody([
            AdminFormElement::columns()
                ->addColumn(function () {
                    return [
                        AdminFormElement::text('position_top', 'Позиционирование по CSS, свойство TOP')->required(),
                    ];
                })
                ->addColumn(function () {
                    return [
                        AdminFormElement::text('position_left', 'Позиционирование по CSS, свойство LEFT'),
                    ];
                })
                ->addColumn(function () {
                    return [
                        AdminFormElement::text('position_right', 'Позиционирование по CSS, свойство RIGHT'),
                    ];
                }),
        ]);
        return $form;
    });
})->addMenuPage(Map::class, 6)
    ->setIcon('fa fa-map-o');