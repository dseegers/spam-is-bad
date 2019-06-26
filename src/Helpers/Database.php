<?php


namespace Flx\NoSpam\Helpers;


class Database
{

    private $wpdb;

    public function __construct()
    {
        global $wpdb;
        $this->wpdb = $wpdb;
    }

    public function getRow()
    {


    }

    public static function addRow()
    {


        global $wpdb;
        $table = $wpdb->prefix . 'NoSpam';
        $data = array('ip' => 123, 'page' => 'ssss');
        $format = array('%d', '%s');
        $wpdb->insert($table, $data, $format);

    }

    public static function makeTable()
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