<?php
//Daan Seegers
//https://github.com/dseegers

namespace Flx\StructuredData;

use Flx\StructuredData\Helpers\DataLayer;
use Flx\StructuredData\Helpers\MetaBox;

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

        $metaBox = new MetaBox;
        echo $metaBox->singleBox(1, 'boobse');


    }

}