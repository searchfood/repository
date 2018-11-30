USE `db_searchfood` ;

-- INSERT da tabela `restaurant_status`
INSERT INTO `restaurant_status` (`id`, `status`) VALUES (NULL, 'Inativo'), (NULL, 'Ativo'), (NULL, 'Bloqueado');

-- INSERT da tabela `user_status`
INSERT INTO `user_status` (`id`, `status`) VALUES (NULL, 'Inativo'), (NULL, 'Ativo'), (NULL, 'Bloqueado');

-- INSERT da tabela `price_calculation`
INSERT INTO `price_calculation` (`id`, `price_calculation`) VALUES (NULL, 'Menos Preço'), (NULL, 'Maior Preço'), (NULL, 'Media dos Preços'), (NULL, 'Soma Total');