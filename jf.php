<?php
class Jf extends CI_Controller {

	public $data = array();

	function __construct()
	{
		parent::__construct();

		$this->data['titre'] = "Portfolio of JF Tolaguera";
		$this->data['css'] = array('jf/main');
		$this->data['meta'] = array(
			array(
				'name'		=> 'theme-color',
				'content'	=> '#FFFFFF'
			),
			array(
				'name'		=> 'viewport',
				'content'	=> 'width=device-width, initial-scale=1.0, maximum-scale=1.0'
			),
			array(
				'name'		=> 'description',
				'content'	=> 'Portfolio of JF Tolaguera'
			),
			array(
				'name'		=> 'mobile-web-app-capable',
				'content'	=> 'yes'
			),
			array(
				'name'		=> 'apple-mobile-web-app-capable',
				'content'	=> 'yes'
			),
			array(
				'name'		=> 'apple-mobile-web-app-status-bar-style',
				'content'	=> 'black'
			),
			array(
				'name'		=> 'apple-mobile-web-app-title',
				'content'	=> 'Portfolio of JF Tolaguera'
			),
			array(
				'rel'		=> 'icon',
				'sizes'		=> '192x192',
				'href'		=> '/assets/img/jf/favicon.png'
			),
		);
		$this->data['special'] = array(
			array(
				'type'	=> 'text/css',
				'href' 	=> 'http://fonts.googleapis.com/css?family=Roboto:400,700|Roboto+Mono|Montserrat:700',
				'rel'	=> 'stylesheet'
			),
			array(
				'type'	=> 'image/x-icon',
				'href'	=> '/assets/memento/IconeMemento.png',
				'rel'	=> 'shortcut icon'
			),
			array(
				'href'	=> '/assets/img/jf/avatar.png',
				'rel'	=> 'apple-touch-icon-precomposed'
			)
		);

		$this->load->helper('url');
		$this->data['currentUrl'] = base_url() . 'index.php/jf/';
	}

	function index()
	{
		$this->load->view('common/headerview', $this->data);
		$this->load->view('jf/main');
		$this->load->view('jf/footer');
	}

	function work()
	{
		$this->load->view('common/headerview', $this->data);
		$this->load->view('jf/work');
		$this->load->view('jf/footer');
	}

	function process()
	{
		$this->load->view('common/headerview', $this->data);
		$this->load->view('jf/process');
		$this->load->view('jf/footer');
	}
}
?>
