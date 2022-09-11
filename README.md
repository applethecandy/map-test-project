<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Тестовый проект "Карта"

ТЗ:

Сделать небольшое приложение по работе с яндекс картами.
1) регистрация и авторизация, для незалогиненных пользователей показывать главную страницу с описанием приложения просто
2) залогиненному пользователю показывать: 
   1) яндекс-карту центрированную на его местоположении
   2) слева от карты список локаций (изначально список пустой). формат: название, долгота, широта. у каждого элемента списка кнопки редактировать и удалить
   3) над списком форма для добавления локации, три инпута соответственно название, долгота, широта
   4) каждая локация из списка должна быть отмечена на карте маркером
   5) список должен быть свой у каждого юзера
3) при заполнении формы для добавления локации, локация должна добавляться в список и должен появляться маркер на карте
4) при нажатии на удаление локации она должна пропадать из списка и маркер должен исчезать с карты
5) при нажатии на редактирование локации, должна появляться отредактировать ее название и координаты, в случае смены координат маркер также должен переместиться на карте
6) при клике на локацию в списке карта должна центрироваться на маркере этой локации
7) при клике на маркер должен вылезать балун с текстом - название локации этого маркера
8) админка через laravel backpack в админке показать просто список пользователей, в админку должен быть доступ только у админов соответственно

### Сайт доступен по ссылке [map.projects.smolyakov.dev](https://map.projects.smolyakov.dev)

## Подробнее о сайте

Использовался Laravel 9, PHP 8.1.8, библиотеки Tailwind, FontAwesome, AlpineJS, Axios.

Для создания админ-пользователя можно использовать тинкер:
```php
User::create(['email' => 'test@email.com', 'name' => 'test', 'password' => Hash::make('password')])->assignRole('admin') 
```

<p align="center"><img src="https://sun9-55.userapi.com/impg/rNBmcM5NeJXGNHJZJJBA_wZeBChvTu0AFlV_3A/RmJHsJB02J4.jpg?size=1066x537&quality=96&sign=e2187f0fddba7432abcdb9e367d4de2b&type=album" alt="Site preview"></p>
