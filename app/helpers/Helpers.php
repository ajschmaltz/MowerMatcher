<?php

class Helpers {

  /** function array_filter_recursive
   *
   *		Exactly the same as array_filter except this function
   *		filters within multi-dimensional arrays
   *
   * @param array
   * @param string optional callback function name
   * @param bool optional flag removal of empty arrays after filtering
   * @return array merged array
   */
  public static function array_filter_recursive($array, $callback = null, $remove_empty_arrays = false) {
    foreach ($array as $key => & $value) { // mind the reference
      if (is_array($value)) {
        $value = self::array_filter_recursive($value, $callback);
      }
      else {
        if ($value == '') {
          unset($array[$key]);
        }
      }
    }
    unset($value); // kill the reference

    return $array;
  }

  public static function array_underscore($array)
  {
    str_replace('.', '_', array_dot($array));
  }

  public static function underscore_array($string)
  {
    $arrayDot = str_replace('.', '_', $string);
    $array = array();
    foreach ($arrayDot as $key => $value) {
      array_set($array, $key, $value);
    }
  }

}