-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15-Nov-2016 às 23:16
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel5`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estados`
--

CREATE TABLE `estados` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sigla` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `historico` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `estados`
--

INSERT INTO `estados` (`id`, `user_id`, `nome`, `sigla`, `historico`, `created_at`, `updated_at`) VALUES
(1, 1, 'São Paulo', 'SP', 'No início do século XVI, o litoral paulista já tinha sido visitado por navegadores portugueses e espanhóis, mas somente em 1532 se deu a fundação da primeira povoação de origem europeia, São Vicente, na atual Baixada Santista, por Martim Afonso de Sousa. Com a criação da Vila de São Vicente, instalou-se, o primeiro parlamento na América: a Câmara da Vila de São Vicente. Realizaram-se também as primeiras eleições em continente americano. A procura de metais preciosos levou os portugueses a ultrapassarem a Serra do Mar, pelo antigo caminho indígena do Peabiru e, em 1554, no planalto existente após a Serra do Mar, foi fundada a vila de São Paulo de Piratininga pelos jesuítas liderados por Manuel da Nóbrega. Até o fim do século XVI, os portugueses fundaram outras vilas no entorno do planalto, como Santana de Parnaíba, garantindo, assim, a segurança e subsistência da vila de São Paulo.', '2016-11-14 17:12:04', '2016-11-14 17:12:04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_09_28_005242_create_roles_table', 2),
(4, '2016_09_28_005317_create_permissions_table', 2),
(5, '2016_09_26_235536_create_Post_laravel_table', 3),
(6, '2016_11_14_135240_create_estados_table', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `label` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `label`, `created_at`, `updated_at`) VALUES
(4, 'View_user', 'Visualizar usuário', '2016-11-01 16:50:30', '2016-11-01 16:50:30'),
(5, 'Edit_user', 'Editar usuário', '2016-11-01 16:51:00', '2016-11-01 16:51:00'),
(6, 'Delete_user', 'Deletar usuário', '2016-11-01 16:52:43', '2016-11-01 16:52:43'),
(7, 'Insert_user', 'Adicionar usuário', '2016-11-01 16:53:36', '2016-11-01 16:53:36'),
(8, 'View_role', 'Visualizar role', '2016-11-01 16:54:48', '2016-11-01 16:54:48'),
(9, 'Insert_role', 'Adicionar role', '2016-11-01 16:55:20', '2016-11-01 16:55:20'),
(10, 'Role_permission', 'Relação role permission', '2016-11-01 16:56:14', '2016-11-01 16:56:14'),
(11, 'View_permission', 'Visualizar permission', '2016-11-01 16:56:56', '2016-11-01 16:56:56'),
(12, 'Insert_permission', 'Adicionar permission', '2016-11-01 16:57:27', '2016-11-01 16:57:27'),
(14, 'Edit_estado', 'Editar estado', '2016-11-14 18:18:04', '2016-11-14 18:18:04'),
(15, 'Insert_estado', 'Inserir estado', '2016-11-14 18:19:05', '2016-11-14 18:19:05'),
(16, 'Delete_estado', 'Excluir estado', '2016-11-14 18:19:33', '2016-11-14 18:19:33'),
(17, 'View_estado', 'Visualizar estado', '2016-11-14 18:20:31', '2016-11-14 18:20:31'),
(18, 'permission_ajax', 'permissão ajax', '2016-11-15 22:59:02', '2016-11-15 22:59:02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`) VALUES
(12, 4, 1),
(13, 5, 1),
(14, 6, 1),
(15, 7, 1),
(16, 8, 1),
(17, 9, 1),
(18, 10, 1),
(19, 11, 1),
(20, 12, 1),
(31, 4, 3),
(33, 14, 1),
(34, 15, 1),
(35, 16, 1),
(36, 17, 1),
(37, 14, 2),
(38, 15, 2),
(39, 16, 2),
(40, 17, 2),
(41, 15, 4),
(42, 17, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `label` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `roles`
--

INSERT INTO `roles` (`id`, `name`, `label`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Administrador do sistema', '2016-10-19 04:18:18', '2016-10-19 04:18:18'),
(2, 'Editor', 'Editor de post', '2016-10-19 04:33:37', '2016-10-19 04:33:37'),
(3, 'Contribuidor', 'Contribuidor de conteúdo', '2016-10-25 18:08:14', '2016-10-25 18:08:14'),
(4, 'Cadastrado', 'Usuário cadastrado', '2016-10-25 18:11:10', '2016-10-25 18:11:10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`) VALUES
(24, 8, 1),
(25, 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar_img` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default_avatar.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `avatar_img`) VALUES
(1, 'Lucas Dutra', 'lucasdutra@laravel.com', '$2y$10$f6TBQm53D5nlFGbu8chxxOLSwt5Cwaw/XJZW.La2yEjawhpD5.gjO', 'OzXHyKWrciZlPlnfzwZFYKFXC1hujE1K4rZpZrldCxLNt1I6X7TTzRozKceN', '2016-10-19 01:42:23', '2016-11-15 23:42:57', 'default_avatar.jpg'),
(8, 'admin', 'admin@laravel.com', '$2y$10$SrVtKkHVWgi550VNylhaVuEJTsjv5L/K7oxwsWUPHYeAU1YO5iOAm', 'z70JVHtKxE7FCWAFMFB2MTIQ8Rkr4S8DGos0F9Tg', '2016-11-15 23:41:20', '2016-11-15 23:41:20', 'default_avatar.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estados_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estados`
--
ALTER TABLE `estados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `estados`
--
ALTER TABLE `estados`
  ADD CONSTRAINT `estados_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
