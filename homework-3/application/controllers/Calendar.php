<?php
class Calendar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('recipe_model');
        $this->load->model('calendar_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        // $data['news'] = $this->news_model->get_news();
        $data['title'] = 'Calendar | Receps Recept';
        $data['nav_active_index'] = 1;
        $data['nav_extra_class'] = "";

        $data['navbar'] = $this->load->view('templates/navbar', $data, true);
        $data['cal_weekdays'] = $this->calendar_model->get_calendar();

        $this->load->view('templates/header', $data);
        $this->load->view('calendar/index', $data);
        $this->load->view('templates/footer');
    }
}
