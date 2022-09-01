-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Час створення: Вер 01 2022 р., 15:48
-- Версія сервера: 8.0.30-0ubuntu0.20.04.2
-- Версія PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- База даних: `test`
--

--
-- Дамп даних таблиці `product_bundles`
--

INSERT INTO `product_bundles` (`product_bundles_id`, `product_bundles_discount`, `product_bundles_created`, `product_bundles_is_active`, `product_bundles_start_date`, `product_bundles_end_date`) VALUES
(1, 10, '2022-08-31 16:17:13', 1, '2022-08-31', '2022-08-31'),
(2, 20, '2022-08-31 16:17:13', 0, '2022-08-30', '2022-08-31');

--
-- Дамп даних таблиці `product_data`
--

INSERT INTO `product_data` (`product_data_id`, `product_name`) VALUES
(1, 'Мобільний телефон Samsung A032F Galaxy A03 Core 2/32GB Ceramic Black (SM-A032FCKDSEK)'),
(2, 'Мобільний телефон Xiaomi Redmi 9A 2/32GB Glacial Blue UA'),
(3, 'Чохол для мобільного телефону Samsung A032F Galaxy A03 прозорий'),
(4, 'Чохол для мобільного телефону Samsung A032F Galaxy A03 червоний'),
(5, 'Чохол для мобільного телефону Samsung A032F Galaxy A03 чорний'),
(6, 'Чохол для мобільного телефону Xiaomi Redmi 9A прозорий'),
(7, 'Чохол для мобільного телефону Xiaomi Redmi 9A червоний'),
(8, 'Чохол для мобільного телефону Xiaomi Redmi 9A чорний');

--
-- Дамп даних таблиці `product_to_product_bundle`
--

INSERT INTO `product_to_product_bundle` (`product_to_product_bundles_id`, `product_data_id`, `product_bundles_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(6, 3, 1),
(7, 4, 1),
(8, 5, 1),
(3, 6, 2),
(4, 7, 2),
(5, 8, 2);
COMMIT;