-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 27 sep. 2021 à 21:40
-- Version du serveur : 8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `application`
--

-- --------------------------------------------------------

--
-- Structure de la table `embauches`
--

DROP TABLE IF EXISTS `embauches`;
CREATE TABLE IF NOT EXISTS `embauches` (
  `mat_ENT` int NOT NULL,
  `mat_ENP` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `embauches`
--

INSERT INTO `embauches` (`mat_ENT`, `mat_ENP`) VALUES
(23412341, 0),
(445566, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

DROP TABLE IF EXISTS `employes`;
CREATE TABLE IF NOT EXISTS `employes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nom` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Prénom` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Matricule` int NOT NULL,
  `Date_naiss` date NOT NULL,
  `Lieu_naiss` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nationnalité` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `nbrEnfantC` int DEFAULT NULL,
  `numActNaiss` bigint NOT NULL,
  `CIN_N` bigint DEFAULT NULL,
  `PassportN` bigint DEFAULT NULL,
  `TéléphoneE` bigint NOT NULL,
  `Email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Groupage` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Situ_fami` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Matricule` (`Matricule`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `employes`
--

INSERT INTO `employes` (`id`, `Nom`, `Prénom`, `Matricule`, `Date_naiss`, `Lieu_naiss`, `Nationnalité`, `nbrEnfantC`, `numActNaiss`, `CIN_N`, `PassportN`, `TéléphoneE`, `Email`, `Groupage`, `Situ_fami`) VALUES
(25, 'Chabane', 'Juba', 400, '2021-09-11', 'Dellys', 'Algeria', 0, 34353, 45645457, 45, 4234234, 'kheira@mazouz.com', 'A+', 'Célibataire'),
(27, 'Mazouz', 'Kheira', 300, '2021-09-12', 'Dellys', 'Afghanistan', 3, 867657, 86756, NULL, 666, 'kheira@mazouz.com', 'A+', 'Marié(e)');

-- --------------------------------------------------------

--
-- Structure de la table `entreprises`
--

DROP TABLE IF EXISTS `entreprises`;
CREATE TABLE IF NOT EXISTS `entreprises` (
  `Nom` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Matricule` int NOT NULL,
  `DateCréation` date NOT NULL,
  `NumAdCnas` bigint NOT NULL,
  `Email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `NomGérant` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `PrénomGérant` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Téléphone` int NOT NULL,
  PRIMARY KEY (`Matricule`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `entreprises`
--

INSERT INTO `entreprises` (`Nom`, `Matricule`, `DateCréation`, `NumAdCnas`, `Email`, `NomGérant`, `PrénomGérant`, `Téléphone`) VALUES
('Sarl youvax', 1122, '2021-08-05', 23213543653645, 'bboy-na@live.fr', 'Juba', 'Chabane', 552063532),
('ezfezf', 55556, '2021-08-03', 44433, 'rgre@ggz.com', 'ezgze', 'zefze', 55435),
('ezfze', 56543, '2021-09-01', 778880043, 'GZEG@gGG.com', 'gzeg', 'mmee', 55433566),
('gebnn', 65532, '2021-09-03', 566446, 'GEE@GG.com', 'nezbb', 'JJE', 4423),
('ergerg', 76446, '2021-09-22', 976433445, 'GR@GVVV.com', 'GGZE', 'HRRBH', 3355445),
('ggggg', 88888, '2021-09-08', 1341435, 'RTTT@HHH.com', 'YYYY', 'RRRR', 98904),
('RGERG', 334558, '2021-08-05', 777666666, 'GZZEf@BGG.com', 'HHER', 'GREG', 998888),
('ergherjrttj', 445566, '2021-08-04', 687658999, 'UYTRT@ezt.com', 'rtjrtjrtku', 'tyuktyrt', 657433),
('UUU', 555555, '2021-09-23', 9787665, 'RT@GGG.fr', 'TTTT', 'JJJ', 6775333),
('TERTYER', 1122999, '2021-08-06', 9980087, 'GGG@HHH.com', 'YERTER', 'NGRBDF', 778888),
('LKHBLKJ', 3453566, '2021-09-07', 7923311, 'TRTJ@KJH.COM', 'gerher', 'jyktyk', 45535),
('ERHERH', 7764544, '2021-09-10', 6845455, 'RGE@rzzz.fr', 'GERHER', 'GERHE', 632322),
('ergherjrttj', 8977887, '2021-08-04', 687658999, 'UYTRT@ezt.com', 'rtjrtjrtku', 'tyuktyrt', 657433),
('RGERG', 12233455, '2021-08-05', 777666666, 'GZZEf@BGG.com', 'HHER', 'GREG', 998888),
('jhjrt', 23412341, '2021-08-09', 789876, 'grhr@ckk.com', 'ereve', 'ggrhh', 8887);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_08_11_220718_laratrust_setup_tables', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2021-08-11 21:16:27', '2021-08-11 21:16:27'),
(2, 'users-read', 'Read Users', 'Read Users', '2021-08-11 21:16:27', '2021-08-11 21:16:27'),
(3, 'users-update', 'Update Users', 'Update Users', '2021-08-11 21:16:27', '2021-08-11 21:16:27'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2021-08-11 21:16:27', '2021-08-11 21:16:27'),
(5, 'payments-create', 'Create Payments', 'Create Payments', '2021-08-11 21:16:27', '2021-08-11 21:16:27'),
(6, 'payments-read', 'Read Payments', 'Read Payments', '2021-08-11 21:16:27', '2021-08-11 21:16:27'),
(7, 'payments-update', 'Update Payments', 'Update Payments', '2021-08-11 21:16:27', '2021-08-11 21:16:27'),
(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2021-08-11 21:16:27', '2021-08-11 21:16:27'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2021-08-11 21:16:27', '2021-08-11 21:16:27'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2021-08-11 21:16:27', '2021-08-11 21:16:27'),
(11, 'module_1_name-create', 'Create Module_1_name', 'Create Module_1_name', '2021-08-11 21:16:27', '2021-08-11 21:16:27'),
(12, 'module_1_name-read', 'Read Module_1_name', 'Read Module_1_name', '2021-08-11 21:16:27', '2021-08-11 21:16:27'),
(13, 'module_1_name-update', 'Update Module_1_name', 'Update Module_1_name', '2021-08-11 21:16:27', '2021-08-11 21:16:27'),
(14, 'module_1_name-delete', 'Delete Module_1_name', 'Delete Module_1_name', '2021-08-11 21:16:27', '2021-08-11 21:16:27');

-- --------------------------------------------------------

--
-- Structure de la table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(9, 3),
(10, 1),
(10, 2),
(10, 3),
(11, 4),
(12, 4),
(13, 4),
(14, 4);

-- --------------------------------------------------------

--
-- Structure de la table `permission_user`
--

DROP TABLE IF EXISTS `permission_user`;
CREATE TABLE IF NOT EXISTS `permission_user` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  KEY `permission_user_permission_id_foreign` (`permission_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'administrateur', 'Administrateur', 'Administrateur', '2021-08-11 21:16:27', '2021-08-11 21:16:27'),
(2, 'comptable', 'Comptable', 'Comptable', '2021-08-11 21:16:27', '2021-08-11 21:16:27'),
(3, 'employe', 'Employe', 'Employe', '2021-08-11 21:16:27', '2021-08-11 21:16:27');

-- --------------------------------------------------------

--
-- Structure de la table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
CREATE TABLE IF NOT EXISTS `role_user` (
  `role_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  KEY `role_user_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 4, 'App\\Models\\User'),
(2, 1, 'App\\Models\\User'),
(2, 3, 'App\\Models\\User'),
(2, 6, 'App\\Models\\User'),
(2, 7, 'App\\Models\\User'),
(2, 8, 'App\\Models\\User'),
(2, 9, 'App\\Models\\User'),
(2, 10, 'App\\Models\\User'),
(2, 11, 'App\\Models\\User'),
(2, 13, 'App\\Models\\User'),
(2, 15, 'App\\Models\\User'),
(2, 16, 'App\\Models\\User'),
(3, 2, 'App\\Models\\User');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kayn', 'bboy-na@live.fr', NULL, '$2y$10$8HE9LTJmPWn6.Vxf5Fv8VuQyUth0ZloZ6W3gCYrXvfm34slcWwVVG', NULL, '2021-08-11 21:27:27', '2021-08-11 21:27:27'),
(2, 'loki', 'youminemyou@gmail.com', NULL, '$2y$10$zjteDbNStyyexTWHwP1kxu9rBvW7nk0J6yKb1QBGRbYxorqHaVGie', NULL, '2021-08-11 21:41:10', '2021-08-11 21:41:10'),
(3, 'kaijo', 'elaecho6@gmail.com', NULL, '$2y$10$cjIDK5CqzvEZLO6ju40etOFhyXADjqB3D8.L5x0Pz4loSaKd8hoXS', NULL, '2021-08-13 21:50:14', '2021-08-13 21:50:14'),
(4, 'yasuo', 'erenmikasarmin@gmail.com', NULL, '$2y$10$4vEn5gxbsU6eNB3i/1yFfufzhAwVhynNFKStuOLMX08lakI9XgGB2', NULL, '2021-09-02 08:45:42', '2021-09-02 08:45:42'),
(6, 'gojo', 'bboy-you@hotmail.fr', NULL, '$2y$10$mGhwBkbZ0zTrkNSu8q0CPOAWpVCpxB80gig1JXlSfzzOWNGABs4I2', NULL, '2021-09-04 11:08:04', '2021-09-04 11:08:04'),
(16, 'Mikasa', 'ZEGZEG@ZERZE.com', NULL, '$2y$10$BwZjVNGkXtC3NCSMRrXezues.FCs/uKNluBn5LFxB2UAHXD/.Bxd.', NULL, '2021-09-04 11:31:23', '2021-09-04 11:31:23');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
