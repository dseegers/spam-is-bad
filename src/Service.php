<?php
//Daan Seegers
//https://github.com/dseegers

namespace Flx\StructuredData;


use Flx\StructuredData\Helpers\DataLayer;
use Flx\StructuredData\Helpers\SettingsBox;

class Service
{

    public function __construct()
    {

        add_action('admin_menu', [$this, 'generatePage']);
    }

    public function generatePage()
    {

        add_menu_page('Hello Im structured data', 'Structured Data', 'manage_options', 'structured-data/structured-data-admin-page.php', [$this, 'structuredDataPage'], '
dashicons-buddicons-replies', 6);

    }

    public function structuredDataPage()
    {

        $settingsBox = new SettingsBox($_POST);
        echo $settingsBox->singleBox(1, 'boobse');
        echo $settingsBox->singleBox(2, 'boobsse');


    }

}