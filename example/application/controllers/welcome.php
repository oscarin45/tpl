<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('welcome_message');

		$this->load->library('tpl', array('DIR'=>base_url()));

		$this->tpl
		->load('welcome_message')
		->view('parser')//view http://ellislab.com/codeigniter/user-guide/libraries/parser.html
		->set('TITLE','Welcome to CodeIgniter')
		->set('META','template only user by codeigniter')
		->set(array(
			'DOC_TITLE'	=> 'View Documentation',
			'DOC_HTML'	=> '/docs/index.html'
			))
		->set_view('VIEW','doc')// ->set_view('VIEW','doc',array(),'parser/view') #Load view
		/* ->set_view(array(
			'view1'=>'doc1',
			'view1'=>'doc2',
			'view1'=>'doc3',

			'view4'=>array('doc4',array(),'parser/view')
			))
		*/
		->set_js('HEAD_JS','js/vendor/modernizr-2.6.2.min.js')
		->set_js('JS',array(
					'js/plugins.js',
					'js/main.js'
					),true)//TRUE = compress file
		->set_css('HEAD_CSS',array(
					'css/normalize.css',
        			'css/main.css'
					),true)
		->site()
		;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */