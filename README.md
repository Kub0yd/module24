# ПРАКТИКА (модуль 24) - Продвинутый Backend
Разработка в качестве домашнего задания курса **"Веб-разработчик"** на платформе [Skillfactory](https://skillfactory.ru/).

Тема: "MVC - архитектура"


### Структура
* [Application](./Application/) - папка со структурой фреймворка

    * [Controllers](./Application/Controllers/) - контроллеры проекта для каждой страницы сайта
        * [controller_addresses](./Application/Controllers/controller_addresses.php) - контроллер страницы Контакты
        * [controller_feedback.php](./Application/Controllers/controller_feedback.php) - контроллер страницы Отзывы
        * [controller_main.php](./Application/Controllers/controller_main.php) - контроллер главной страницы 
    * [Core](./Application/Core/) - базовые файлы Model, View и Controller с соответствующими классами.
        * [Controller.php](./Application/Core/Controller.php) - объявление класса Controller
        * [Model.php](./Application/Core/Model.php) - объявление класса Model
        * [Route.php](./Application/Core/Route.php) - файл, отвечающий за маршрутизацию всего приложения
        * [View.php](./Application/Core/View.php) - объявление класса View
    * [CSS](./Application/CSS/) - оформление сайта
    * [images](./Application/images/) - используемые изображения
    * [Models](./Application/Models/)- все модели проекта для каждой страницы сайта.
        * [model_addresses.php](./Application/Models/model_addresses.php) -  файл с моделью подгружаемых данных на страницу Контакты
    * [Views](./Application/Views/) - все представления проекта для каждой страницы сайта.
        * [feedback_view.php](./Application/Views/feedback_view.php) - код представления страницы Отзывы
        * [main_view.php)(./Application/Views/main_view.php) - код представления главной страницы
        * [template_view.php](./Application/Views/template_view.php) - шаблон сайта
        * [view_contacts.php](./Application/Views/view_contacts.php) - код представления страницы Контакты
    * [bootstrap.php](./Application/bootstrap.php) - подгрузчик компонентов
* [index.php](./index.php) - основной файл фреймворка
## Используемые технологии
* PHP
* HTML
* CSS


