<?php
class Paths
{
  public static function currentPath($path)
  {
    $result = '';
    for ($i = 0; $i < strlen($path); $i++) {
      if ($i === '\\') {
        $result .= '/';
      }
      $result .= $i;
    }
    return $result;
  }
}
