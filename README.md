# GauthierRecipesCMS

		INSERT INTO `users` (`id`, `username`, `email`, `role`, `password`, `created_at`, `updated_at`) VALUES
		(1, 'Ryan Gauthier', 'ryan.eugene.gauthier@gmail.com', 'Admin', 'aBleSIPlE', '2018-01-08 12:52:58', '2018-01-08 12:52:58'),
		(2, 'Sara Gauthier', 's.alsop97@gmail.com', 'Admin', 'nCiTChsTE', '2018-01-08 12:55:58', '2018-01-08 12:55:58')


INSERT INTO `posts` (`id`, `user_id`, `title`, `slug`, `views`, `image`, `body`, `published`, `created_at`, `updated_at`) VALUES
(1, 1, '5 Habits that can improve your life', '5-habits-that-can-improve-your-life', 0, 'banner.jpg', 'Read every day', 1, '2018-02-04 07:58:02', '2018-02-01 19:14:31'),
(2, 1, 'Second post on LifeBlog', 'second-post-on-lifeblog', 0, 'banner.jpg', 'This is the body of the second post on this site', 0, '2018-02-05 11:40:14', '2018-02-01 13:04:36')
