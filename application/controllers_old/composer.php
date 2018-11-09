<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class composer extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('user_agent');
    }

    function index() {
        $response = array(
            'AUTHOR' => array(
                'NAME' => 'PRIYAMBODO',
                'PHONE' => '+62 896-2013-2007',
                'ROLE' => 'DEVELOPER',
                'HOMEPAGE' => 'www.maspriyambodo.com',
                'MAIL1' => 'info@maspriyambodo.com',
                'MAIL2' => 'maspriyambodo@gmail.com',
                'BLOGSPOT' => 'www.massprii.blogspot.com',
                'FACEBOOK' => 'www.facebook.com/nohackeron',
                'GITHUB' => 'www.github.com/maspriyambodo',
                'INSTAGRAM' => 'www.instagram.com/priyambodoss'
            ),
            'DETAIL' => array(
                'DESCRIPTION' => 'company profile and system of PT MARSIT BANGUN SEJAHTERA',
                'OWN' => 'Maruli Tua H Sitohang, SE, MM',
                'SINCE' => 'BEKASI, INDONESIA | 2017',
                'BUSINESS FIELD' => 'FINANCIAL SERVICES',
                'TYPE' => 'COMPANY'
            ),
            'SPECIFICATION' => array(
                'VERSION' => 'PHP VERSION' . " " . phpversion(),
                'FRAMEWORK' => 'CODEIGNITER' . " " . CI_VERSION,
                'JAVASCRIPT FRAMEWORK' => 'jQuery 3.2.1',
                'JAVASCRIPT UI' => 'jQuery UI 1.12.1',
                'WEB FRAMEWORK' => 'Bootstrap 4.0.0-beta.3',
                'WEB UI' => 'animate.css'
            ),
            'USER AGENT' => array(
                'BROWSER' => $this->agent->browser() . ' ' . $this->agent->version(),
                'PLATFORM' => $this->agent->platform(),
                'AGENT' => $this->agent->agent_string()
            )
        );

        $this->output
                ->set_status_header(200)
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                ->_display();
        exit;
    }

}
