<?php

namespace Flx\StructuredData\Helpers;


class SettingsBox extends AbstractClass
{

    protected $wpdb;
    protected $post;

    public function __construct($_post = null)
    {

        echo '<div>';

        echo '<form method="post">';
    }

    public function singleBox($id, $name)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            //     Write data


        } else {

            //return read data

            $return = $name . '<br>
  <input type="text" name="' . $id . '" value="">
  <br><br>';

        }

        return $return;
    }

    public function __destruct()
    {

        echo '<input type="submit" value="Submit"></form>';
        echo '</div>';
    }

}