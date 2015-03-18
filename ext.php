<?php
/**
*
* @package phpBB Extension - Nom Extension
* @copyright (c) 2015 Votre pseudo
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace votrepseudo\nomextension;

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* Classe principale pour l'extension « Nom Extension ».
*/
class ext extends \phpbb\extension\base
{
	/**
	* Active l'extension si les prérequis sont rencontrés
	*
	* @return bool
	* @aceess public
	*/
	public function is_enableable()
	{
		// On récupère les paramètres de configuration
		$config = $this->container->get('config');

		// On vérifie la version phpBB requise au minimum !
		if (!version_compare($config['version'], '3.1.3', '>='))
		{
			return false;
		}
		
		return true;
	}
}