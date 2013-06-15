<?php

/*
 * Desenvolvido por: Jackson Andrade Goulart
 * Github: jacksongoulart
 */

namespace GEREMIN\DAO;

abstract class Factory{

	const MongoDB = 1;

	public abstract function getUsuarioDAO();

	public abstract function getCertificadoDao();

	public static function getFactory($factory) {
		switch ($factory){
			case (self::MongoDB):
				return new mongodb\Factory();
			default:
				return null;
		}
	} 
}

?>