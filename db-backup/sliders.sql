/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE `sliders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `slider_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sliders` (`id`, `slider_location`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(3, '1', 'sliders/ENCf4su7ly1716168667.jpg', NULL, 1, '2024-05-20 01:31:07', '2024-05-20 01:31:07');
INSERT INTO `sliders` (`id`, `slider_location`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(4, '1', 'sliders/R8UYK612ni1716169122.jpg', NULL, 1, '2024-05-20 01:38:42', '2024-05-20 01:38:42');
INSERT INTO `sliders` (`id`, `slider_location`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(5, '1', 'sliders/2qgMc4K3xm1716169146.jpg', NULL, 1, '2024-05-20 01:39:06', '2024-05-20 01:39:06');
INSERT INTO `sliders` (`id`, `slider_location`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(6, '1', 'sliders/U8Izq8iGLJ1716169162.jpg', NULL, 1, '2024-05-20 01:39:22', '2024-05-20 01:39:22'),
(7, '1', 'sliders/WbLXhmKEEr1716169182.jpg', NULL, 1, '2024-05-20 01:39:42', '2024-05-20 01:39:42'),
(8, '1', 'sliders/iXI4kFMOQd1716169205.jpg', NULL, 1, '2024-05-20 01:40:05', '2024-05-20 01:40:05'),
(9, '1', 'sliders/0aDyjFMteD1716169395.jpg', NULL, 1, '2024-05-20 01:43:15', '2024-05-20 01:43:15'),
(10, '1', 'sliders/2uRe1F1oWr1716169419.jpg', NULL, 1, '2024-05-20 01:43:39', '2024-05-20 01:43:39'),
(11, '1', 'sliders/junpJqNAIx1716169449.jpg', NULL, 1, '2024-05-20 01:44:09', '2024-05-20 01:44:09'),
(12, '4', 'sliders/fI64Q3GPIE1716170839.jpg', NULL, 1, '2024-05-20 02:07:19', '2024-05-20 02:07:19'),
(13, '4', 'sliders/eWzU628EyV1716170848.jpg', NULL, 1, '2024-05-20 02:07:28', '2024-05-20 02:07:28'),
(14, '4', 'sliders/YQNLgtTYvq1716170859.jpg', NULL, 1, '2024-05-20 02:07:39', '2024-05-20 02:07:39'),
(15, '4', 'sliders/5Rfq6KxYOc1716170866.jpg', NULL, 1, '2024-05-20 02:07:46', '2024-05-20 02:07:46'),
(16, '4', 'sliders/TFL4Y34b5w1716170874.jpg', NULL, 1, '2024-05-20 02:07:54', '2024-05-20 02:07:54'),
(17, '4', 'sliders/iBvSPssUFO1716170889.jpg', NULL, 1, '2024-05-20 02:08:09', '2024-05-20 02:08:09'),
(18, '4', 'sliders/gePpIGTBt51716170898.jpg', NULL, 1, '2024-05-20 02:08:18', '2024-05-20 02:08:18'),
(19, '4', 'sliders/Ehih7YhPYI1716170920.jpg', NULL, 1, '2024-05-20 02:08:41', '2024-05-20 02:08:41'),
(20, '4', 'sliders/Ez9GC1aSOv1716170948.jpg', NULL, 1, '2024-05-20 02:09:08', '2024-05-20 02:09:08'),
(21, '4', 'sliders/8gvooi1BYi1716170968.jpg', NULL, 1, '2024-05-20 02:09:28', '2024-05-20 02:09:28'),
(22, '4', 'sliders/lR8QAcQXXw1716170984.jpg', NULL, 1, '2024-05-20 02:09:44', '2024-05-20 02:09:44'),
(23, '4', 'sliders/RAs4GyJx0z1716170991.jpg', NULL, 1, '2024-05-20 02:09:51', '2024-05-20 02:09:51');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;