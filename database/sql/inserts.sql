USE `db_searchfood` ;

-- INSERT da tabela `restaurant_status`
INSERT INTO `delivery_status` (`id`, `status`) VALUES (NULL, 'Desativado'), (NULL, 'Ativado'), (NULL, 'Bloqueado');

-- INSERT da tabela `user_status`
INSERT INTO `user_status` (`id`, `status`) VALUES (NULL, 'Inativo'), (NULL, 'Ativo'), (NULL, 'Bloqueado');

-- INSERT da tabela `price_calculation`
INSERT INTO `price_calculation` (`id`, `price_calculation`) VALUES (NULL, 'Menor Preço'), (NULL, 'Maior Preço'), (NULL, 'Media dos Preços'), (NULL, 'Soma Total');

-- INSERT da tabela `restaurants`
INSERT INTO `restaurants` (`id`, `restaurant_name`, `cnpj`, `restaurant_phone`, `address`, `neighborhood`, `city`, `state`, `cep`, `kitchen_type_id`, `delivery_status`, `profile_picture`, `owner_name`, `cpf`, `owner_email`, `owner_phone`, `email`, `password`) VALUES (NULL, 'Pizzaria Santos', '82.641.325/0001-18', '(63)3451-2234', 'Rua A', 'Centro', 'Campos Belos', 'GO', '73840-000', '1', '1', NULL, 'Danilo', '076.445.791-84', 'danilo@email.com', '(62)99940-9208', 'pizzariasantos@email.com', '25d55ad283aa400af464c76d713c07ad');