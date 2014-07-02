CREATE TABLE IF NOT EXISTS `consumo_internet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `download_mensal` varchar(20) NOT NULL,
  `upload_mensal` varchar(20) NOT NULL,
  `download_diario` varchar(20) NOT NULL,
  `upload_diario` varchar(20) NOT NULL,
  `memoria_livre` int(11) NOT NULL,
  `memoria_usada` int(11) NOT NULL,
  `memoria_total` int(11) NOT NULL,
  `total_disco` varchar(20) NOT NULL,
  `total_disco_usado` varchar(20) NOT NULL,
  `total_disco_livre` varchar(20) NOT NULL,
  `total_disco_porcentagem_usado` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
