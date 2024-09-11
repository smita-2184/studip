<?php

class WebsiteIntegrationPlugin extends StudIPPlugin implements StandardPlugin
{
    public function __construct()
    {
        parent::__construct();
        
        // Register the navigation item
        $navigation = new Navigation('My Website', PluginEngine::getURL($this, array(), 'show'));
        $navigation->setImage(Icon::create('link-extern'));
        Navigation::addItem('/main/my_website', $navigation);
    }

    public function initialize()
    {
        // Perform any necessary initialization
    }

    public function show_action()
    {
        // This action will display your website
        echo "Hello from WebsiteIntegrationPlugin!";
    }

    // Implement other required StandardPlugin methods
    public function getPluginName() { return 'Website Integration'; }
    public function getInfoTemplate($course_id) { return null; }
    public function getIconNavigation($course_id, $last_visit, $user_id) { return null; }
    public function getTabNavigation($course_id) { return null; }
}
