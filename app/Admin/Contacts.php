<?php

use App\Contact;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Contact::class, function (ModelConfiguration $model) {

    $model->disableCreating();
    $model->disableDeleting();

    $model->setTitle('Контакты');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('addr')->setLabel('Адрес'),
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
                        AdminFormElement::textarea('addr', 'Адрес')->required(),
                        AdminFormElement::textarea('addrEN', 'Адрес [ENG]')->required(),
                    ];
                })
                ->addColumn(function () {
                    return [
                        AdminFormElement::text('email', 'E-mail')->required(),
                        AdminFormElement::text('phone', 'Телефон, формат (ХХХ) ХХХ-ХХ-ХХ')->required(),
                    ];
                })
                ->addColumn(function () {
                    return [
                        AdminFormElement::text('facebook', 'Ссылка на Facebook'),
                        AdminFormElement::text('linkedin', 'Ссылка на Linkedin'),
                        AdminFormElement::text('youtube', 'Ссылка на Youtube'),
                    ];
                })
                ->addColumn(function () {
                    return [
                        AdminFormElement::textarea('map', 'Карта Гугл')->required(),
                    ];
                }),
        ]);
        return $form;
    });
})->addMenuPage(Contact::class, 7)
    ->setIcon('fa fa-info');