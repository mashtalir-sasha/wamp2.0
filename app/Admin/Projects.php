<?php

use App\Project;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Project::class, function (ModelConfiguration $model) {

    $model->setTitle('Кейсы');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('title')->setLabel('Заголовок'),
            AdminColumn::image('image')->setLabel('Картинка'),
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
                        AdminFormElement::text('type', 'Тип проекта')->required(),
                        AdminFormElement::text('typeEN', 'Тип проекта [ENG]')->required(),
                    ];
                })
                ->addColumn(function () {
                    return [
                        AdminFormElement::text('title', 'Заголовок')->required(),
                        AdminFormElement::text('titleEN', 'Заголовок [ENG]')->required(),
                        AdminFormElement::text('sub_title', 'Подзаголовок'),
                        AdminFormElement::text('sub_titleEN', 'Подзаголовок [ENG]'),
                    ];
                })
                ->addColumn(function () {
                    return [
                        AdminFormElement::image('image', 'Картинка')->required(),
                    ];
                }),
        ]);
        $tabs = AdminDisplay::tabbed([
            'Русский' => new \SleepingOwl\Admin\Form\FormElements([
                AdminFormElement::text('strategy1', 'Стратегия, по пунктам 1-10'),
                AdminFormElement::text('strategy2'),
                AdminFormElement::text('strategy3'),
                AdminFormElement::text('strategy4'),
                AdminFormElement::text('strategy5'),
                AdminFormElement::text('strategy6'),
                AdminFormElement::text('strategy7'),
                AdminFormElement::text('strategy8'),
                AdminFormElement::text('strategy9'),
                AdminFormElement::text('strategy10'),
            ]),
            'English' => new \SleepingOwl\Admin\Form\FormElements([
                AdminFormElement::text('strategy1EN', 'Стратегия, по пунктам 1-10 [ENG]'),
                AdminFormElement::text('strategy2EN'),
                AdminFormElement::text('strategy3EN'),
                AdminFormElement::text('strategy4EN'),
                AdminFormElement::text('strategy5EN'),
                AdminFormElement::text('strategy6EN'),
                AdminFormElement::text('strategy7EN'),
                AdminFormElement::text('strategy8EN'),
                AdminFormElement::text('strategy9EN'),
                AdminFormElement::text('strategy10EN'),
            ]),
        ]);
        $form->addBody([
            AdminFormElement::columns()
                ->addColumn(function () {
                    return [
                        AdminFormElement::textarea('task', 'Задача'),
                        AdminFormElement::textarea('taskEN', 'Задача [ENG]'),
                    ];
                })
                ->addColumn(function () {
                    return [
                        AdminFormElement::textarea('solution', 'Решение'),
                        AdminFormElement::textarea('solutionEN', 'Решение [ENG]'),
                    ];
                })
                ->addColumn(function () use ($tabs) {
                    return [
                        $tabs
                    ];
                }),
        ]);
        $form->addBody([
            AdminFormElement::columns()
                ->addColumn(function () {
                    return [
                        AdminFormElement::text('result_title1', 'Результат 1 - Заголовок'),
                        AdminFormElement::text('result_title1EN', 'Результат 1 - Заголовок [ENG]'),
                        AdminFormElement::textarea('result_text1', 'Результат 1 - Текст'),
                        AdminFormElement::textarea('result_text1EN', 'Результат 1 - Текст [ENG]'),
                    ];
                })
                ->addColumn(function () {
                    return [
                        AdminFormElement::text('result_title2', 'Результат 2 - Заголовок'),
                        AdminFormElement::text('result_title2EN', 'Результат 2 - Заголовок [ENG]'),
                        AdminFormElement::textarea('result_text2', 'Результат 2 - Текст'),
                        AdminFormElement::textarea('result_text2EN', 'Результат 2 - Текст [ENG]'),
                    ];
                })
                ->addColumn(function () {
                    return [
                        AdminFormElement::text('result_title3', 'Результат 3 - Заголовок'),
                        AdminFormElement::text('result_title3EN', 'Результат 3 - Заголовок [ENG]'),
                        AdminFormElement::textarea('result_text3', 'Результат 3 - Текст'),
                        AdminFormElement::textarea('result_text3EN', 'Результат 3 - Текст [ENG]'),
                    ];
                })
                ->addColumn(function () {
                    return [
                        AdminFormElement::text('result_title4', 'Результат 4 - Заголовок'),
                        AdminFormElement::text('result_title4EN', 'Результат 4 - Заголовок [ENG]'),
                        AdminFormElement::textarea('result_text4', 'Результат 4 - Текст'),
                        AdminFormElement::textarea('result_text4EN', 'Результат 4 - Текст [ENG]'),
                    ];
                }),
        ]);
        return $form;
    });
})->addMenuPage(Project::class, 4)
    ->setIcon('fa fa-briefcase');