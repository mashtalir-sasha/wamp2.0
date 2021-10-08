<?php

use App\Service;
use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Page;

AdminSection::registerModel(Service::class, function (ModelConfiguration $model) {

    $model->setTitle('Услуги');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('title')->setLabel('Название'),
            AdminColumn::text('text')->setLabel('Краткий текст'),
            AdminColumn::image('page_img')->setLabel('Картинка в IMac'),
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
                         AdminFormElement::select('page_id', 'Выберите страницу для Услуги')->setModelForOptions(new Page)->setDisplay('meta_title')->required(),
                    ];
                })
                ->addColumn(function () {
                    return [
                         AdminFormElement::checkbox('is_anchor', 'Добавить якорную ссылку?'),
                    ];
                }),
        ]);
        $form->addBody([
            AdminFormElement::columns()
                ->addColumn(function () {
                    return [
                        AdminFormElement::text('title', 'Название на главной')->required(),
                        AdminFormElement::text('titleEN', 'Название на главной [ENG]')->required(),
                    ];
                })
                ->addColumn(function () {
                    return [
                        AdminFormElement::textarea('text', 'Краткий текст на главной')->required(),
                        AdminFormElement::textarea('textEN', 'Краткий текст на главной [ENG]')->required(),
                    ];
                })
                ->addColumn(function () {
                    return [
                        AdminFormElement::file('ico', 'Иконка')->required(),
                        AdminFormElement::text('price', 'Цена')->required(),
                    ];
                }),
        ]);
        $form->addBody([
            AdminFormElement::columns()
                ->addColumn(function () {
                    return [
                        AdminFormElement::text('page_title', 'Название на странице')->required(),
                        AdminFormElement::text('page_titleEN', 'Название на странице [ENG]')->required(),
                        AdminFormElement::text('page_note', 'Цитата на странице'),
                        AdminFormElement::text('page_noteEN', 'Цитата на странице [ENG]'),
                        AdminFormElement::image('page_img', 'Картинка в IMac')->required(),
                    ];
                })
                ->addColumn(function () {
                    return [
                        AdminFormElement::wysiwyg('page_text', 'Описание на странице')->required(),
                        AdminFormElement::wysiwyg('page_textEN', 'Описание на странице [ENG]')->required(),
                    ];
                }),
        ]);
        return $form;
    });
})->addMenuPage(Service::class, 2)
    ->setIcon('fa fa-cubes');