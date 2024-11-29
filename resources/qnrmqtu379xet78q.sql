-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 27 nov. 2024 à 18:58
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Base de données : `qnrmqtu379xet78q`
--

-- --------------------------------------------------------
CREATE DATABASE IF NOT EXISTS qnrmqtu379xet78q;
USE qnrmqtu379xet78q;
--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
                              `cat_id` int(11) NOT NULL,
                              `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
                          `order_id` int(11) NOT NULL,
                          `stripe_session_id` varchar(200) DEFAULT NULL,
                          `order_amount` int(11) DEFAULT NULL,
                          `order_transaction` varchar(255) DEFAULT NULL,
                          `order_status` varchar(255) DEFAULT NULL,
                          `order_currency` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
                            `product_id` int(11) NOT NULL,
                            `stripe_product_id` varchar(200) DEFAULT NULL,
                            `active` tinyint(1) NOT NULL DEFAULT 1,
                            `product_title` varchar(255) NOT NULL,
                            `product_category_id` int(11) NOT NULL,
                            `product_price` float NOT NULL,
                            `stripe_product_price` varchar(250) DEFAULT NULL,
                            `product_quantity` int(11) NOT NULL,
                            `product_description` text NOT NULL,
                            `short_desc` text NOT NULL,
                            `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reports`
--

CREATE TABLE `reports` (
                           `report_id` int(11) NOT NULL,
                           `product_id` int(11) DEFAULT NULL,
                           `stripe_product_id` varchar(200) DEFAULT NULL,
                           `stripe_price_id` varchar(200) DEFAULT NULL,
                           `stripe_product_customer_id` varchar(250) DEFAULT NULL,
                           `order_id` int(11) DEFAULT NULL,
                           `product_price` float DEFAULT NULL,
                           `product_title` varchar(255) DEFAULT NULL,
                           `product_quantity` int(11) DEFAULT NULL,
                           `product_total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
                         `user_id` int(11) NOT NULL,
                         `username` varchar(255) NOT NULL,
                         `email` varchar(255) NOT NULL,
                         `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
    ADD PRIMARY KEY (`cat_id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
    ADD PRIMARY KEY (`order_id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
    ADD PRIMARY KEY (`product_id`);

--
-- Index pour la table `reports`
--
ALTER TABLE `reports`
    ADD PRIMARY KEY (`report_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
    ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
    MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
    MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
    MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT pour la table `reports`
--
ALTER TABLE `reports`
    MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
    MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;
