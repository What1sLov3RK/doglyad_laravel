DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
                            `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                            `category_id` int NOT NULL,
                            `title` varchar(255) NOT NULL,
                            `description` varchar(255) NOT NULL,
                            `img` varchar(255) NOT NULL,
                            `price` int NOT NULL,
                            PRIMARY KEY (`id`)
);
INSERT INTO `products` VALUES (1,1,'ECO Засіб','Товар для прання','images/goods2.jpg',200),(2,2,'ECO Засіб','Товар для миття','images/goods3.jpg',300),(3,3,'ECO Засіб','Товар для прибирання','images/goods4.jpg',400),(4,3,'ECO Засіб','Товар для прибирання','images/goods3.jpg',500),(5,4,'ECO Засіб','Товар для дому','images/goods2.jpg',800);
