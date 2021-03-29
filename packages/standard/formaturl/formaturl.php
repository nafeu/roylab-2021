<?php
  namespace Standard;

  defined('AUTOMAD') or die();

  class FormatUrl {
    public function FormatUrl($value) {
      return str_replace('index.php', 'pages', $value);
    }
  }
?>