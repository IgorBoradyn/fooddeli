-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Sty 2022, 04:36
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `fooddeli`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `clients`
--

CREATE TABLE `clients` (
  `ID` int(11) NOT NULL,
  `phone` text COLLATE utf8_polish_ci NOT NULL,
  `street` text COLLATE utf8_polish_ci NOT NULL,
  `street_number` text COLLATE utf8_polish_ci NOT NULL,
  `flat_number` text COLLATE utf8_polish_ci DEFAULT NULL,
  `city` text COLLATE utf8_polish_ci NOT NULL,
  `postcode` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `clients`
--

INSERT INTO `clients` (`ID`, `phone`, `street`, `street_number`, `flat_number`, `city`, `postcode`) VALUES
(2, '600728172', 'a', 'a', 'a', 'a', '11-309'),
(3, '600517361', 'b', 'b', 'b', 'b', '11-231');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `couriers`
--

CREATE TABLE `couriers` (
  `ID` int(11) NOT NULL,
  `status` text COLLATE utf8_polish_ci NOT NULL DEFAULT 'not_working'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `couriers`
--

INSERT INTO `couriers` (`ID`, `status`) VALUES
(4, 'not_working'),
(5, 'not_working');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `opinions`
--

CREATE TABLE `opinions` (
  `ID` int(11) NOT NULL,
  `restaurant_ID` int(11) NOT NULL,
  `klient_ID` int(11) NOT NULL,
  `rating` double NOT NULL,
  `description` text COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `opinions`
--

INSERT INTO `opinions` (`ID`, `restaurant_ID`, `klient_ID`, `rating`, `description`) VALUES
(1, 1, 2, 4, 'Lorem Ipsum'),
(2, 1, 3, 5, NULL),
(3, 2, 2, 2, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `ID_client` int(11) NOT NULL,
  `ID_restaurant` int(11) NOT NULL,
  `ID_products_list` int(11) NOT NULL,
  `ID_courier` int(11) DEFAULT NULL,
  `city` text COLLATE utf8_polish_ci NOT NULL,
  `postcode` text COLLATE utf8_polish_ci NOT NULL,
  `street` text COLLATE utf8_polish_ci NOT NULL,
  `street_number` text COLLATE utf8_polish_ci NOT NULL,
  `flat_number` text COLLATE utf8_polish_ci DEFAULT NULL,
  `price` double NOT NULL,
  `payment_type` enum('Gotówka','PayU','Karta kredytowa','PayPal') COLLATE utf8_polish_ci NOT NULL,
  `status` enum('Nieopłacone','Opłacone','Odebrane','Dostarczone','Anulowane') COLLATE utf8_polish_ci NOT NULL DEFAULT 'Nieopłacone',
  `collection_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `ID_restaurant` int(11) NOT NULL,
  `name` text COLLATE utf8_polish_ci NOT NULL,
  `description` text COLLATE utf8_polish_ci NOT NULL,
  `photo` text COLLATE utf8_polish_ci NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `products`
--

INSERT INTO `products` (`ID`, `ID_restaurant`, `name`, `description`, `photo`, `price`) VALUES
(1, 1, 'McZestaw BigMac', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum non vestibulum enim, sed dapibus augue. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas sollicitudin nec nulla vitae varius. Pellentesque ut augue id nunc viverra aliquet.', 'photos/mcdonalds/products_photos/mczestaw_bigmac.avif', 22.5),
(2, 1, 'McZestaw McRoyal', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum non vestibulum enim, sed dapibus augue. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas sollicitudin nec nulla vitae varius. Pellentesque ut augue id nunc viverra aliquet.', 'photos/mcdonalds/products_photos/mczestaw_mcroyal.avif', 22),
(3, 1, 'McZestaw WieśMac', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum non vestibulum enim, sed dapibus augue. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas sollicitudin nec nulla vitae varius. Pellentesque ut augue id nunc viverra aliquet.', 'photos/mcdonalds/products_photos/mczestaw_wiesmac.avif', 22),
(4, 2, 'Kubełek 15 Hot Wings', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum non vestibulum enim, sed dapibus augue. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas sollicitudin nec nulla vitae varius. Pellentesque ut augue id nunc viverra aliquet.', 'photos/kfc/products_photos/kubelki_2os-hot_wings.avif', 35.99),
(5, 2, 'Kubełek 11/11', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum non vestibulum enim, sed dapibus augue. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas sollicitudin nec nulla vitae varius. Pellentesque ut augue id nunc viverra aliquet.', 'photos/kfc/products_photos/kubelki_2os-11_11.png', 49.99),
(6, 2, 'Kubełek Classic', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum non vestibulum enim, sed dapibus augue. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas sollicitudin nec nulla vitae varius. Pellentesque ut augue id nunc viverra aliquet.', 'photos/kfc/products_photos/kubelki_2os-classic.avif', 41.99),
(10, 3, 'Pizza Pepperoni', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum non vestibulum enim, sed dapibus augue. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas sollicitudin nec nulla vitae varius. Pellentesque ut augue id nunc viverra aliquet.', 'photos/telepizza/products_photos/pizza_pepperoni.avif', 29.99),
(11, 3, 'Pizza Hwajska', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum non vestibulum enim, sed dapibus augue. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas sollicitudin nec nulla vitae varius. Pellentesque ut augue id nunc viverra aliquet.', 'photos/telepizza/products_photos/pizza_hawajska.avif', 29.99),
(12, 3, 'Pizza Neapolitana', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum non vestibulum enim, sed dapibus augue. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas sollicitudin nec nulla vitae varius. Pellentesque ut augue id nunc viverra aliquet.', 'photos/telepizza/products_photos/pizza_neapolitana.avif', 34.99);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products_list`
--

CREATE TABLE `products_list` (
  `ID` int(11) NOT NULL,
  `ID_product` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `restaurants`
--

CREATE TABLE `restaurants` (
  `ID` int(11) NOT NULL,
  `name` text COLLATE utf8_polish_ci NOT NULL,
  `location` text COLLATE utf8_polish_ci NOT NULL,
  `open_hours` longtext COLLATE utf8_polish_ci NOT NULL,
  `min_delivery_value` double NOT NULL,
  `delivery_cost` double NOT NULL,
  `city` text COLLATE utf8_polish_ci NOT NULL,
  `postcode` text COLLATE utf8_polish_ci NOT NULL,
  `adress` text COLLATE utf8_polish_ci NOT NULL,
  `email` text COLLATE utf8_polish_ci NOT NULL,
  `phone` text COLLATE utf8_polish_ci NOT NULL,
  `photo` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `restaurants`
--

INSERT INTO `restaurants` (`ID`, `name`, `location`, `open_hours`, `min_delivery_value`, `delivery_cost`, `city`, `postcode`, `adress`, `email`, `phone`, `photo`) VALUES
(1, 'McDonald\'s', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d2357.958713312154!2d20.475916520875636!3d53.77242233071135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x46e27ed5bbf88009%3A0x4314c1d59b0e3b92!2smcdonalds!3m2!1d53.7731624!2d20.477505999999998!5e0!3m2!1spl!2spl!4v1643257596611!5m2!1spl!2spl\" class=\"border\" width=\"100%\" height=\"350px\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '{\"Monday\": {\"open\": \"11:00\", \"close\": \"21:30\"},\"Thuesday\": {\"open\": \"11:00\", \"close\": \"21:30\"},\"Wednesday\": {\"open\": \"11:00\", \"close\": \"21:30\"},\"Thursday\": {\"open\": \"11:00\", \"close\": \"21:30\"},\"Friday\": {\"open\": \"11:00\", \"close\": \"21:30\"},\"Saturday\": {\"open\": \"11:00\", \"close\": \"21:30\"},\"Sunday\": {\"open\": \"11:00\", \"close\": \"21:30\"}}', 30, 6, 'Olsztyn', '10-009', 'Plac Franklina Roosevelta 1', 'mcdonalds@gmail.com', '503 017 764', 'photos/mcdonalds/restaurant_photo/mcdonalds.png'),
(2, 'KFC', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d2646.477445138071!2d20.48012669042294!3d53.77626429003829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x46e27ed3bf7453bf%3A0xba12cc02bd41e5a6!2skfc!3m2!1d53.778020299999994!2d20.4809902!5e0!3m2!1spl!2spl!4v1643258014386!5m2!1spl!2spl\" class=\"border\" width=\"100%\" height=\"350px\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '{\"Monday\": {\"open\": \"11:00\", \"close\": \"20:30\"},\"Thuesday\": {\"open\": \"11:00\", \"close\": \"20:30\"},\"Wednesday\": {\"open\": \"11:00\", \"close\": \"20:30\"},\"Thursday\": {\"open\": \"11:00\", \"close\": \"20:30\"},\"Friday\": {\"open\": \"11:00\", \"close\": \"20:30\"},\"Saturday\": {\"open\": \"11:00\", \"close\": \"20:30\"},\"Sunday\": {\"open\": \"11:00\", \"close\": \"20:30\"}}', 40, 2.99, 'Olsztyn', '10-576', 'aleja Marszałka Józefa Piłsudskiego 2/8', 'kfc@gmail.com', '801 464 646', 'photos/kfc/restaurant_photo/kfc.png'),
(3, 'Telepizza', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d1229125.0863266164!2d19.490783673316734!3d53.008948233877646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x46e27ed3e8dca67b%3A0x1ff1c0a6cd14e5!2stelepizza%20olsztyn!3m2!1d53.777721799999995!2d20.479478099999998!5e0!3m2!1spl!2spl!4v1643258793569!5m2!1spl!2spl\" class=\"border\" width=\"100%\" height=\"350px\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '{\"Monday\": {\"open\": \"11:00\", \"close\": \"22:45\"},\"Thuesday\": {\"open\": \"11:00\", \"close\": \"22:45\"},\"Wednesday\": {\"open\": \"11:00\", \"close\": \"22:45\"},\"Thursday\": {\"open\": \"11:00\", \"close\": \"22:45\"},\"Friday\": {\"open\": \"11:00\", \"close\": \"22:45\"},\"Saturday\": {\"open\": \"11:00\", \"close\": \"22:45\"},\"Sunday\": {\"open\": \"11:00\", \"close\": \"22:45\"}}', 15, 0, 'Olsztyn', '11-041', 'Seweryna Pieniężnego 8', 'telepizza@gmail.com', '89 535 11 66', 'photos/telepizza/restaurant_photo/telepizza.png');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `ID_client` int(11) NOT NULL,
  `ID_restaurant` int(11) NOT NULL,
  `ID_products_list` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `email` text COLLATE utf8_polish_ci NOT NULL,
  `password` text COLLATE utf8_polish_ci NOT NULL,
  `first_name` text COLLATE utf8_polish_ci NOT NULL,
  `last_name` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`ID`, `email`, `password`, `first_name`, `last_name`) VALUES
(2, 'a@a.a', 'P@ssw0rd', 'a', 'a'),
(3, 'b@b.b', 'P@ssw0rd', 'b', 'b'),
(4, 'kurier1@gmail.com', 'P@ssw0rd', 'Łukasz', 'Kowalski'),
(5, 'kurier2@gmail.com', 'P@ssw0rd', 'Adrian', 'Kolarz');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `clients`
--
ALTER TABLE `clients`
  ADD KEY `ID` (`ID`);

--
-- Indeksy dla tabeli `couriers`
--
ALTER TABLE `couriers`
  ADD KEY `ID` (`ID`);

--
-- Indeksy dla tabeli `opinions`
--
ALTER TABLE `opinions`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `restaurant_ID` (`restaurant_ID`),
  ADD KEY `klient_ID` (`klient_ID`);

--
-- Indeksy dla tabeli `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_courier` (`ID_courier`),
  ADD KEY `ID_client` (`ID_client`),
  ADD KEY `ID_restaurant` (`ID_restaurant`),
  ADD KEY `ID_products_list` (`ID_products_list`) USING BTREE;

--
-- Indeksy dla tabeli `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_restaurant` (`ID_restaurant`);

--
-- Indeksy dla tabeli `products_list`
--
ALTER TABLE `products_list`
  ADD KEY `ID_product` (`ID_product`),
  ADD KEY `ID` (`ID`);

--
-- Indeksy dla tabeli `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD KEY `ID_restaurant` (`ID_restaurant`),
  ADD KEY `ID_client` (`ID_client`),
  ADD KEY `ID_products_list` (`ID_products_list`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `opinions`
--
ALTER TABLE `opinions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT dla tabeli `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `couriers`
--
ALTER TABLE `couriers`
  ADD CONSTRAINT `couriers_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `opinions`
--
ALTER TABLE `opinions`
  ADD CONSTRAINT `opinions_ibfk_1` FOREIGN KEY (`restaurant_ID`) REFERENCES `restaurants` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `opinions_ibfk_2` FOREIGN KEY (`klient_ID`) REFERENCES `clients` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`ID_restaurant`) REFERENCES `restaurants` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`ID_client`) REFERENCES `clients` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`ID_products_list`) REFERENCES `products_list` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`ID_restaurant`) REFERENCES `restaurants` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `products_list`
--
ALTER TABLE `products_list`
  ADD CONSTRAINT `products_list_ibfk_1` FOREIGN KEY (`ID_product`) REFERENCES `products` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD CONSTRAINT `shopping_cart_ibfk_1` FOREIGN KEY (`ID_client`) REFERENCES `clients` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shopping_cart_ibfk_2` FOREIGN KEY (`ID_restaurant`) REFERENCES `restaurants` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
