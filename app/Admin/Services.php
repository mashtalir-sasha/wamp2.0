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
                        AdminFormElement::text('title', 'Название на главной [UKR]')->required(),
                        AdminFormElement::text('titleEN', 'Название на главной [ENG]')->required(),
                        AdminFormElement::text('titleRU', 'Название на главной [RUS]')->required(),
                    ];
                })
                ->addColumn(function () {
                    return [
                        AdminFormElement::textarea('text', 'Краткий текст на главной [UKR]')->required(),
                        AdminFormElement::textarea('textEN', 'Краткий текст на главной [ENG]')->required(),
                        AdminFormElement::textarea('textRU', 'Краткий текст на главной [RUS]')->required(),
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
                        AdminFormElement::text('page_title', 'Название на странице [UKR]')->required(),
                        AdminFormElement::text('page_titleEN', 'Название на странице [ENG]')->required(),
                        AdminFormElement::text('page_titleRU', 'Название на странице [RUS]')->required(),
                        AdminFormElement::text('page_note', 'Цитата на странице [ukr]'),
                        AdminFormElement::text('page_noteEN', 'Цитата на странице [ENG]'),
                        AdminFormElement::text('page_noteRU', 'Цитата на странице [RUS]'),
                        AdminFormElement::image('page_img', 'Картинка в IMac')->required(),
                    ];
                })
                ->addColumn(function () {
                    return [
                        AdminFormElement::wysiwyg('page_text', 'Описание на странице [UKR]')->required(),
                        AdminFormElement::wysiwyg('page_textEN', 'Описание на странице [ENG]')->required(),
                        AdminFormElement::wysiwyg('page_textRU', 'Описание на странице [RUS]')->required(),
                    ];
                }),
        ]);
        return $form;
    });
})->addMenuPage(Service::class, 2)
    ->setIcon('fa fa-cubes');