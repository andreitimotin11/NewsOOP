<?php
/*
 * Created by PhpStorm.
 * User: Andrei
 * Date: 04.12.2016
 * Time: 18:28
 *  Используя изученную концепцию MVC создайте сайт - новостную ленту
5. Список страниц:
5.1 Главная страница со всеми новостями, отсортированными по дате в обратном порядке и ссылками на каждую новость
5.2. Страница конкретной новости
5.3. Форма добавления новости на сайт
 */

require_once __DIR__ . "/controllers/NewsController.php";
$controller = new NewsController();
$controller->actionAll();