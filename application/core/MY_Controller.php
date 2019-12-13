<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

class MY_Controller extends CI_Controller {
	
    /**
     * Dados de acesso
     *
     * @access	public
     * @param array de variaveis
     */
    public $data = array();
    
    /**
     * Nome da view
     *
     * @access	public
     * @param	string
     */
    public $content = 'home';

    public function __construct()
    {
        parent::__construct();
    }
    
    /**
     * Verifica se o usuário está logado no sistema
     * Caso positivo o monta a pagina selecionada ou a pagina padrão
     *
     * @access	public
     * @param	string Nome da view a ser carregada
     */
    public function usable($content)
    {
        //
        // Gera o Conteudo
        //
        $this->content = $content;

        // 
        // Carrega os CSS
        //
        $this->data['CssProjects'] = load_css(array('bootstrap/css/bootstrap-reboot.min', 'bootstrap/css/bootstrap-grid.min', 'bootstrap/css/bootstrap.min'));
													
        //
        // Carrega o Javascript
        //
        $this->data['Javascripts'] = load_js(array('jquery/jquery.min'));

        //
        // Carrega a View
        //
        $this->load->view($this->content, $this->data);
    }
}
