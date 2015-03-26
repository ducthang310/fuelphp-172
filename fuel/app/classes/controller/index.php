<?php
/**
 * Created by JetBrains PhpStorm.
 * User: DucThang
 * Date: 3/26/15
 * Time: 9:55 AM
 */
class Controller_Index extends Controller_Template
{
    /**
     * @var string page template
     */
    public $template = 'page/1column';

    /**
     * The basic welcome message
     *
     * @access  public
     * @return  Response
     */
    public function action_index()
    {
        $data['show_slider'] = true;
        $data['js_files'] = array(
            'theme-car/jquery-1.7.1.min.js',
            'theme-car/cufon-yui.js',
            'theme-car/cufon-replace.js',
            'theme-car/Vegur_500.font.js',
            'theme-car/FF-cash.js',
            'theme-car/tms-0.3.js',
            'theme-car/tms_presets.js',
            'theme-car/jquery.easing.1.3.js',
            'theme-car/jquery.equalheights.js'
        );
        $data['css_files'] = array(
            'theme-car/reset.css',
            'theme-car/style.css',
            'theme-car/grid.css'
        );
        $this->template->data = $data;

        $this->template->title = 'DT - Home';
        $this->template->content = View::forge('cms/home', $data);
    }

    public function action_about()
    {
        $data['show_slider'] = true;
        $data['js_files'] = array(
            'theme-car/jquery-1.7.1.min.js',
            'theme-car/cufon-yui.js',
            'theme-car/cufon-replace.js',
            'theme-car/Vegur_500.font.js',
            'theme-car/Vegur_300.font.js',
            'theme-car/FF-cash.js'
        );
        $data['css_files'] = array(
            'theme-car/reset.css',
            'theme-car/style.css',
            'theme-car/grid.css'
        );
        $this->template->data = $data;

        $this->template->title = 'About';
        $this->template->content = View::forge('cms/about');
    }

    public function action_maintenance()
    {
        /*
         * Create a new asset type
         */
        Asset::add_path('assets/video/', 'video');

        $data['js_files'] = array(
            'theme-car/jquery-1.7.1.min.js',
            'theme-car/cufon-yui.js',
            'theme-car/cufon-replace.js',
            'theme-car/Vegur_500.font.js',
            'theme-car/jquery.prettyPhoto.js',
            'theme-car/FF-cash.js'
        );
        $data['css_files'] = array(
            'theme-car/reset.css',
            'theme-car/style.css',
            'theme-car/grid.css',
            'theme-car/prettyPhoto.css'
        );

        $this->template->data = $data;
        $this->template->title = 'Maintenance';
        $this->template->content = View::forge('cms/maintenance');
    }

    public function action_repair()
    {
        $data['js_files'] = '';
        $data['css_files'] = '';

        $this->template->data = $data;
        $this->template->title = 'Maintenance';
        $this->template->content = View::forge('cms/repair');
    }

    public function action_priceList()
    {
        $data['js_files'] = '';
        $data['css_files'] = '';

        $this->template->data = $data;
        $this->template->title = 'Maintenance';
        $this->template->content = View::forge('cms/priceList');
    }
}