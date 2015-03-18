<?php
/**
*
* @package phpBB Extension - Nom Extension
* @copyright (c) 2015 Votre pseudo
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
    exit;
}

if (empty($lang) || !is_array($lang))
{
    $lang = array();
}

$lang = array_merge($lang, array(
    'TITRE_PAGE'    => 'Mon titre',
    'VOTRE_TEXTE'   => 'Mon propre texte blabla'
)); 