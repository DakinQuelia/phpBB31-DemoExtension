<?php
/**
*
* Package phpBB Extension - Nom Extension
*
* @copyright (c) 2015 Votre pseudo
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace votrepseudo\nomextension\migrations;

class nomextension_v_0_0_1 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['nomextension_version']) && version_compare($this->config['nomextension_version'], '0.0.1', '>=');
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\dev');
	}

	public function update_data()
	{
		return array(
			// Current version
			array('config.add', array('nomextension_version', '0.0.1')),
		);
	}

	public function revert_data()
	{
		// Remove
		return array(
			array('config.remove', array('nomextension_version')),
		);
	}
}