<?php

use App\Page;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Page::class, function (ModelConfiguration $model) {

    $model->setTitle('Страницы услуг');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('title')->setLabel('Заголовок'),
            AdminColumn::text('slug')->setLabel('slug'),
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
                        AdminFormElement::text('slug', 'slug')->required()->unique(),
                    ];
                }, 12)
                ->addColumn(function () {
                    return [
                        AdminFormElement::textarea('meta_title', 'Meta Title [RUS]')->required(),
                        AdminFormElement::textarea('meta_titleEN', 'Meta Title [ENG]')->required(),
                    ];
                }, 4)
                ->addColumn(function () {
                    return [
                        AdminFormElement::textarea('meta_description', 'Meta Description [RUS]')->required(),
                        AdminFormElement::textarea('meta_descriptionEN', 'Meta Description [ENG]')->required(),
                    ];
                }, 4)
                ->addColumn(function () {
                    return [
                        AdminFormElement::textarea('meta_keywords', 'Meta Keywords [RUS]'),
                        AdminFormElement::textarea('meta_keywordsEN', 'Meta Keywords [ENG]'),
                    ];
                }, 4),
        ]);

        $form->addBody([
            AdminFormElement::columns()
                ->addColumn(function () {
                    return [
                        AdminFormElement::textarea('title', 'Заголовок')->required(),
                        AdminFormElement::textarea('titleEN', 'Заголовок [ENG]')->required(),
                    ];
                })
                ->addColumn(function () {
                    return [
                        AdminFormElement::textarea('text', 'Текст [RUS]')->required(),
                        AdminFormElement::textarea('textEN', 'Текст [ENG]')->required(),
                    ];
                })
                ->addColumn(function () {
                    return [
                        AdminFormElement::image('image', 'Фоновая картинка'),
                    ];
                }),
        ]);
        return $form;
    });
})->addMenuPage(Page::class, 1)
    ->setIcon('fa fa-file');