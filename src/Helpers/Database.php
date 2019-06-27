<?php


namespace Flx\NoSpam\Helpers;


class Database
{

    protected $wpdb;
    protected $post;

    public function __construct()
    {
        add_action('the_post', [$this, 'addRow']);
    }

    public function getRow()
    {


    }

    public  function addRow($post_object)
    {

        var_dump($post_object);

        global $wpdb;
        $table = $wpdb->prefix . 'xx';
        $data = array('ip' => 123, 'page' => 'example');
        $format = array('%d', '%s');
        $wpdb->insert($table, $data, $format);

    }

    public  function makeTable()
    {

        global $wpdb;

        $table_name = $wpdb->prefix . 'NoSpam';
        $charset_collate = $wpdb->get_charset_collate();
        $sql = "CREATE TABLE $table_name (
		id mediumint(9) NOT NULL AUTO_INCREMENT,
		ip BINARY(16) NOT NULL,
		page varchar(225) NOT NULL,
		PRIMARY KEY  (id)
	) $charset_collate;";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);

    }

}