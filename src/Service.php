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

//        Company name
        add_settings_field("company_name", "Company Name", [$this, "company_name__form_element"], "seo-options", "header_section");
        register_setting("header_section", "company_name");

//        Company Email
        add_settings_field("company_email", "Company Email", [$this, "company_email_form_element"], "seo-options",
            "header_section");
        register_setting("header_section", "company_email");

//        Company slogan
        add_settings_field("company_slogan", "Company Slogan", [$this, "company_slogan_form_element"], "seo-options",
            "header_section");
        register_setting("header_section", "company_slogan");

        //Company tax id
        add_settings_field("company_tax_id", "Company Tax Id", [$this, "company_tax_id_form_element"], "seo-options",
            "header_section");
        register_setting("header_section", "company_tax_id");


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


    }

    public function display_header_options_content()
    {
        echo "Over here you can set your local seo settings";
    }
    public  function company_name__form_element()
    {
        ?>
        <input type="text" name="company_name" id="company_name" value="<?php echo get_option('company_name'); ?>"/>
        <?php
    }

    public  function company_email_form_element()
    {
        ?>
        <input type="text" name="company_email" id="company_email"
               value="<?php echo get_option('company_email'); ?>"/>
        <?php
    }

    public  function company_slogan_form_element()
    {
        ?>
        <input type="text" name="company_slogan" id="company_slogan"
               value="<?php echo get_option('company_slogan'); ?>"/>
        <?php
    }

    public function company_tax_id_form_element(){
        ?>
        <input type="text" name="company_tax_id" id="company_tax_id"
               value="<?php echo get_option('company_tax_id'); ?>"/>
        <?php

    }


}
