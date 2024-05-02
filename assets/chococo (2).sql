-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 03 mai 2024 à 01:56
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `chococo`
--

-- --------------------------------------------------------

--
-- Structure de la table `catalog`
--
DROP TABLE `chococo`;
CREATE TABLE `catalog` (
  `catalog_id` int(11) NOT NULL,
  `catalog_name` varchar(100) NOT NULL,
  `catalog_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `catalog`
--

INSERT INTO `catalog` (`catalog_id`, `catalog_name`, `catalog_image`) VALUES
(1, 'test', '../../assets/catalog_image/chocolat_enrobé.jpg'),
(2, 'test2', '../../assets/catalog_image/patte_tartiner.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `quantity` int(11) NOT NULL,
  `Product_id` int(11) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `number` int(8) NOT NULL,
  `zip` int(4) NOT NULL,
  `city` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `pays` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `Product_id` int(11) NOT NULL,
  `Product_image` varchar(100) NOT NULL,
  `Product_price` float NOT NULL,
  `Product_name` varchar(100) NOT NULL,
  `type_produit` varchar(20) NOT NULL,
  `catalog_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`Product_id`, `Product_image`, `Product_price`, `Product_name`, `type_produit`, `catalog_id`) VALUES
(3, '../../assets/product_images/8f22cf4e9743685f072c4e763cdbad98(1).jpg', 10, 'testing', 'produit', 1),
(4, '../../assets/product_images/193a47a9-9eec-42fc-ad55-82fdb7102606.jpg', 20, 'testingooo', 'produit', 1),
(5, '../../assets/product_images/a6e3a88a55e24f91e90e30cfc2040cbc.jpg', 50, 'oh shit', 'produit', 1),
(6, '../../assets/product_images/pic.png', 300, 'nice', 'produit', 2),
(7, '../../assets/product_images/tetiana-bykovets-H22N-9s8AUw-unsplash.jpg', 10, 'yo bro', 'produit', 1),
(8, '../../assets/COFFRETS/test.jpg', 100, 'COFFRET1', 'coffret', NULL),
(9, '../../assets/COFFRETS/test.jpg', 200, 'COFFRET2', 'coffret', NULL),
(10, '../../assets/COFFRETS/test.jpg', 450, 'COFFRET3', 'coffret', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `recipes`
--

CREATE TABLE `recipes` (
  `recipe_id` int(11) NOT NULL,
  `recipe_about` text NOT NULL,
  `recipe_image` text NOT NULL,
  `recipe_ingredients` text NOT NULL,
  `recipe_steps` text NOT NULL,
  `recipe_tutorial` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `recipes`
--

INSERT INTO `recipes` (`recipe_id`, `recipe_about`, `recipe_image`, `recipe_ingredients`, `recipe_steps`, `recipe_tutorial`) VALUES
(0, 'These classic cookies are a go-to sweet treat that are easy to whip up and store well-if they last! We use two kinds of sugar: granulated for crunch and brown for chewiness.', '../../assets/RECIPES_IMGs/T.jpg', '1/4 cups flour | \r\n1 teaspoon baking soda | \r\nFine salt | \r\n1 1/2 sticks  unsalted butter, at room temperature | \r\n3/4 cup brown sugar | \r\n2/3 cup  sugar | \r\n1 teaspoon pure vanilla extract | \r\n2 large eggs.', 'preheat to 375 degrees | \r\nWhisk together the flour, baking soda and 1 teaspoon salt in a large bowl | \r\n\r\nBeat the butter and  sugars on medium-high speed in the bowl of a stand mixer in a large bowl until light and fluffy | Add the eggs, one at time. Beat in the vanilla | Reduce the speed to medium, add the flour mixture and beat until just incorporated | Stir in the chocolate chips | \r\n\r\nScoop 12 tablespoons of dough onto each prepared baking sheet | Roll the dough into balls with slightly wet hands | Bake, rotating the cookie sheets from upper to lower racks halfway through, until golden but still soft in the center. Let cool for a few minutes on the baking sheet, and then transfer to a rack to cool | \r\n\r\nLet the baking sheets cool completely, Store the cookies in a container at room temperature for up to 5 days.\r\n\r\n', ''),
(1, 'The easiest Chocolate Cake recipe you ll ever make and it only needs a few simple ingredients! Plus the cake batter is made in one bowl and no mixer is required.', '../../assets/RECIPES_IMGs/TT.jpg', '142g flour | \r\n200g sugar | \r\n35g  cocoa powder | \r\n1/2 tsp baking soda | \r\n1/2 tsp salt | \r\n1 cup buttermilk | \r\n1/2 cup vegetable oil | \r\n2 tsp vanilla extract | \r\n2 large eggs | \r\n6 oz. semi-sweet chocolate | \r\n3/4 cup heavy cream.', 'Preheat oven to 350 degrees | \r\nIn a large mixing bowl whisk together flour, sugar, 6 Tbsp cocoa, the baking soda, and salt | \r\nAdd buttermilk, oil, vanilla and eggs | \r\nWhisk mixture until very well blended | \r\nPour into prepared baking dish | \r\nBake in preheated oven until toothpick inserted into the center of cake comes out clean, about 27 to 35 minutes | \r\nPlace finely chopped chocolate in a medium heat proof mixing bowl | \r\nHeat heavy cream in a small saucepan over stovetop on medium heat until just simmering | \r\n\r\nPour hot cream over chocolate chocolate then stir with a rubber spatula until melted and smooth. Let it cool until it\'s a thicker consistency.', ''),
(2, 'Experience the wonder of Chocolate Satin, a classic recipe refined over the years. Mixing rich chocolate with silky smoothness, every bite is a treat for your taste buds. Enjoy it on its own or with your favorite dessert. Treat yourself to Chocolate Satin  it s pure deliciousness!', '../../assets/RECIPES_IMGs/TTT.jpg', '300 g bittersweet chocolate, finely chopped | \r\n1/2 teaspoon fine sea salt | \r\n1 teaspoon pure vanilla extract | \r\n500 ml heavy cream | \r\n3 large egg whites at room temperature | \r\n1 cup (120 g) sugar', '\r\nPlace the chocolate in the metal bowl. Sprinkle with the salt and vanilla extract | \r\nIn the saucepan, bring the cream just to a simmer over medium heat | Pour the hot cream into the bowl with the chocolate and, working rapidly, mix with a wooden spoon to melt the chocolate until you have a smooth and glossy texture, about 2 minutes | Let cool | \r\nIn the bowl of the mixer, whisk the egg whites at the highest speed until frothy | Add the sugar 1 tablespoon at a time and whisk at the highest speed until satiny and stiff peaks form | \r\nIncorporate one-quarter of the egg white mixture into the chocolate, gently whisking | Then, add the remaining whipped egg white on top | Fold in by hand using a spatula or large spoon: cut through both mixtures, draw along the bottom, bring up the sides, and fold gently until just mixed | Rotate the bowl during folding for efficient blending | \r\nPour the mixture into the serving bowl | Refrigerate  at least 6 hours | The dessert will be firmer than a mousse | Scoop into ice cream bowls with an ice cream scoop or large, rounded spoon | Serve chilled.', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`catalog_id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `Product_id` (`Product_id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Product_id`),
  ADD KEY `catalog_id` (`catalog_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `catalog`
--
ALTER TABLE `catalog`
  MODIFY `catalog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `Product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`Product_id`) REFERENCES `products` (`Product_id`);

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`catalog_id`) REFERENCES `catalog` (`catalog_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
