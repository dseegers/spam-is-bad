<?php

namespace Flx\StructuredData\Helpers;


class MetaBox extends AbstractClass
{

    protected $wpdb;
    protected $post;

    public function __construct()
    {

        echo '<form>';

    }

    public function singleBox($id, $name)
    {

        $return = $name.'<br>
  <input type="text" name="'.$id.'" value="">
  <br><br>';
        return $return;

    }

    public function __destruct()
    {
        echo '<input type="submit" value="Submit"></form>';
    }

}