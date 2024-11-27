-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 05, 2022 at 08:28 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ecom_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
                              `cat_id` int(11) NOT NULL,
                              `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
                          `order_id` int(11) NOT NULL,
                          `stripe_session_id` varchar(200) DEFAULT NULL,
                          `order_amount` int(11) DEFAULT NULL,
                          `order_transaction` varchar(255) DEFAULT NULL,
                          `order_status` varchar(255) DEFAULT NULL,
                          `order_currency` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
                            `product_id` int(11) NOT NULL,
                            `stripe_product_id` varchar(200) DEFAULT NULL,
                            `active` tinyint(1) NOT NULL DEFAULT '1',
                            `product_title` varchar(255) NOT NULL,
                            `product_category_id` int(11) NOT NULL,
                            `product_price` float NOT NULL,
                            `stripe_product_price` varchar(250) DEFAULT NULL,
                            `product_quantity` int(11) NOT NULL,
                            `product_description` text NOT NULL,
                            `short_desc` text NOT NULL,
                            `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
                          `slide_title` varchar(255) NOT NULL,
                          `slide_id` int(11) NOT NULL,
                          `slide_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
                         `user_id` int(11) NOT NULL,
                         `username` varchar(255) NOT NULL,
                         `email` varchar(255) NOT NULL,
                         `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
    ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
    ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
    ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
    ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
    ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
    ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
    MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
    MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
    MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
    MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
    MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
    MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
