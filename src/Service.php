<?php
//Daan Seegers
//https://github.com/dseegers

namespace Flx\StructuredData;


use Flx\StructuredData\Helpers\DataLayer;
use Flx\StructuredData\Helpers\SettingsBox;



//todo
//general information
    //Company email
    //Company slogan
    //Company tax id
    //Company price class
    //Company type
//Contact details
    //Fax number
    //Telephone
    //Street
    //Number
    //Zip code
    //Place (city)
    //Province
    //Country
//Openinghours
//Currencies & Payment methods


class Service
{

    public function __construct()
    {

        add_action("admin_menu", [$this, "add_new_menu_items"]);
        add_action("admin_init", [$this, "display_options"]);


    }

    public function add_new_menu_items()
    {

            add_menu_page(
            "Local Seo Options",
            "Local Seo Options",
            "manage_options",
            "seo-options",
            [$this, "theme_options_page"],
            "",
            100
        );


    }

    public function theme_options_page()
    {

        ?>
        <div class="wrap">
            <div id="icon-options-general" class="icon32"></div>
            <h1>Local Seo Options</h1>
            <form method="post" action="options.php">
                <?php

                settings_fields("header_section");

                do_settings_sections("seo-options");

                submit_button();

                ?>
            </form>
        </div>
        <?php
    }

    public function display_options()
    {
        add_settings_section("header_section", "Header Options", [$this, "display_header_options_content"], "seo-options");

        add_settings_field("header_logo", "Company Name", [$this, "company_name__form_element"], "seo-options", "header_section");
        add_settings_field("advertising_code", "Ads Code", [$this, "display_ads_form_element"], "seo-options",
            "header_section");

              register_setting("header_section", "header_logo");
        register_setting("header_section", "advertising_code");
    }

    public function display_header_options_content()
    {
        echo "Over here you can set your local seo settings";
    }
    public  function company_name__form_element()
    {
        ?>
        <input type="text" name="header_logo" id="header_logo" value="<?php echo get_option('header_logo'); ?>"/>
        <?php
    }

    public  function display_ads_form_element()
    {
        ?>
        <input type="text" name="advertising_code" id="advertising_code"
               value="<?php echo get_option('advertising_code'); ?>"/>
        <?php
    }


}
