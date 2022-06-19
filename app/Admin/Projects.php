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
                        AdminFormElement::text('type', 'Тип проекта [UKR]')->required(),
                        AdminFormElement::text('typeEN', 'Тип проекта [ENG]')->required(),
                        AdminFormElement::text('typeRU', 'Тип проекта [RUS]')->required(),
                        AdminFormElement::text('link', 'Ссылка на проект'),
                    ];
                })
                ->addColumn(function () {
                    return [
                        AdminFormElement::text('title', 'Заголовок [UKR]')->required(),
                        AdminFormElement::text('titleEN', 'Заголовок [ENG]')->required(),
                        AdminFormElement::text('titleRU', 'Заголовок [RUS]')->required(),
                        AdminFormElement::text('sub_title', 'Подзаголовок [UKR]'),
                        AdminFormElement::text('sub_titleEN', 'Подзаголовок [ENG]'),
                        AdminFormElement::text('sub_titleRU', 'Подзаголовок [RUS]'),
                    ];
                })
                ->addColumn(function () {
                    return [
                        AdminFormElement::image('image', 'Картинка')->required(),
                    ];
                }),
        ]);
        $tabs = AdminDisplay::tabbed([
            'УКраїнська' => new \SleepingOwl\Admin\Form\FormElements([
                AdminFormElement::text('strategy1', 'Стратегия, по пунктам 1-10 [UKR]'),
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
            'Русский' => new \SleepingOwl\Admin\Form\FormElements([
                AdminFormElement::text('strategy1RU', 'Стратегия, по пунктам 1-10'),
                AdminFormElement::text('strategy2RU'),
                AdminFormElement::text('strategy3RU'),
                AdminFormElement::text('strategy4RU'),
                AdminFormElement::text('strategy5RU'),
                AdminFormElement::text('strategy6RU'),
                AdminFormElement::text('strategy7RU'),
                AdminFormElement::text('strategy8RU'),
                AdminFormElement::text('strategy9RU'),
                AdminFormElement::text('strategy10RU'),
            ]),
        ]);
        $form->addBody([
            AdminFormElement::columns()
                ->addColumn(function () {
                    return [
                        AdminFormElement::textarea('task', 'Задача [UKR]'),
                        AdminFormElement::textarea('taskEN', 'Задача [ENG]'),
                        AdminFormElement::textarea('taskRU', 'Задача [RUS]'),
                    ];
                })
                ->addColumn(function () {
                    return [
                        AdminFormElement::textarea('solution', 'Решение [UKR]'),
                        AdminFormElement::textarea('solutionEN', 'Решение [ENG]'),
                        AdminFormElement::textarea('solutionRU', 'Решение [RUS]'),
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
                        AdminFormElement::text('result_title1', 'Результат 1 - Заголовок [UKR]'),
                        AdminFormElement::text('result_title1EN', 'Результат 1 - Заголовок [ENG]'),
                        AdminFormElement::text('result_title1RU', 'Результат 1 - Заголовок [RUS]'),
                        AdminFormElement::textarea('result_text1', 'Результат 1 - Текст [UKR]'),
                        AdminFormElement::textarea('result_text1EN', 'Результат 1 - Текст [ENG]'),
                        AdminFormElement::textarea('result_text1RU', 'Результат 1 - Текст [RUS]'),
                    ];
                })
                ->addColumn(function () {
                    return [
                        AdminFormElement::text('result_title2', 'Результат 2 - Заголовок [UKR]'),
                        AdminFormElement::text('result_title2EN', 'Результат 2 - Заголовок [ENG]'),
                        AdminFormElement::text('result_title2RU', 'Результат 2 - Заголовок [RUS]'),
                        AdminFormElement::textarea('result_text2', 'Результат 2 - Текст [UKR]'),
                        AdminFormElement::textarea('result_text2EN', 'Результат 2 - Текст [ENG]'),
                        AdminFormElement::textarea('result_text2RU', 'Результат 2 - Текст [RUS]'),
                    ];
                })
                ->addColumn(function () {
                    return [
                        AdminFormElement::text('result_title3', 'Результат 3 - Заголовок [UKR]'),
                        AdminFormElement::text('result_title3EN', 'Результат 3 - Заголовок [ENG]'),
                        AdminFormElement::text('result_title3RU', 'Результат 3 - Заголовок [RUS]'),
                        AdminFormElement::textarea('result_text3', 'Результат 3 - Текст [UKR]'),
                        AdminFormElement::textarea('result_text3EN', 'Результат 3 - Текст [ENG]'),
                        AdminFormElement::textarea('result_text3RU', 'Результат 3 - Текст [RUS]'),
                    ];
                })
                ->addColumn(function () {
                    return [
                        AdminFormElement::text('result_title4', 'Результат 4 - Заголовок [UKR]'),
                        AdminFormElement::text('result_title4EN', 'Результат 4 - Заголовок [ENG]'),
                        AdminFormElement::text('result_title4RU', 'Результат 4 - Заголовок [RUS]'),
                        AdminFormElement::textarea('result_text4', 'Результат 4 - Текст [UKR]'),
                        AdminFormElement::textarea('result_text4EN', 'Результат 4 - Текст [ENG]'),
                        AdminFormElement::textarea('result_text4RU', 'Результат 4 - Текст [RUS]'),
                    ];
                }),
        ]);
        return $form;
    });
})->addMenuPage(Project::class, 4)
    ->setIcon('fa fa-briefcase');