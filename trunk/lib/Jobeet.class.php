<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Jobeet
 *
 * @author fabricio_maia
 */
class Jobeet {
     static public function slugify($text)
  {
    // replace all non letters or digits by -
    $text = preg_replace('/\W+/', '-', $text);
 
    // trim and lowercase
    $text = strtolower(trim($text, '-'));
 
    return $text;
  }
}

?>
