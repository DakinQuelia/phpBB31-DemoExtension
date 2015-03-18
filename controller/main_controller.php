<?php
/**
*
* @package phpBB Extension - Nom Extension
* @copyright (c) 2015 Votre Pseudo
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace votrepseudo\nomextension\controller;

use Symfony\Component\HttpFoundation\Response;

class main_controller
{
	protected $config;
	protected $db;
	protected $auth;
	protected $template;
	protected $user;
	protected $helper;
	protected $phpbb_root_path;
	protected $php_ext;

	/*
	*	Le Constructeur 
	*/
	public function __construct(\phpbb\config\config $config, \phpbb\request\request_interface $request, \phpbb\pagination $pagination, \phpbb\db\driver\driver_interface $db, \phpbb\auth\auth $auth, \phpbb\template\template $template, \phpbb\user $user, \phpbb\controller\helper $helper, $phpbb_root_path, $php_ext, $table_prefix)
	{
		$this->config = $config;
		$this->request = $request;
		$this->pagination = $pagination;
		$this->db = $db;
		$this->auth = $auth;
		$this->template = $template;
		$this->user = $user;
		$this->helper = $helper;
		$this->phpbb_root_path = $phpbb_root_path;
		$this->php_ext = $php_ext;
		$this->table_prefix = $table_prefix;
	}

	/*
	*	Auteur: Dakin Quelia
	*
	*	Méthode Principale qui va afficher le contenu de votre page
	*	Cette méthode sera appelée dans « routing.yml » lors de l'appel du fichier.
	*
	*	Par exemple, dans l'url on aura:  http://forum.votresite.fr/mapage
	*/
	public function main()
	{
		// On assigne les variables au template
		$this->template->assign_vars(array(
			'TITRE_PAGE'	=> $this->user->lang('TITRE_PAGE'),
			'VOTRETEXTE'	=> $this->user->lang('VOTRE_TEXTE'),
		));

		// On envoie l'en-tête
		page_header($this->user->lang('TITRE_PAGE'));
		
		// On définit le fichier template
		$this->template->set_filenames(array(
			'body' => 'nom_extension.html')
		);

		// On envoie le pied de page
		page_footer();
		
		return new Response($this->template->return_display('body'), 200);
	}
}