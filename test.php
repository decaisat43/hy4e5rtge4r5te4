<?php
  header('Content-Type: text/xml; charset=utf-8');
  echo file_get_contents("http://yahoo.com/index.php?option=com_osmap&view=xml&id=1");
