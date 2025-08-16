<?php

  //-------------------------//
  // Page
  //-------------------------//

  $Actual_Page = (empty($_GET['p'])) ? '' : $_GET['p'];

  //-------------------------//
  // Client
  //-------------------------//

  $Company_Name  = "Xenocell";
  $Company_Email = 'contacto@xenocell.mx';

  //-------------------------//
  // Variable Loops
  //-------------------------//



  //-------------------------//
  // Languages
  //-------------------------//

  include("languages/languages.php");
  $Language = $_SESSION['language'];

  $langSwitch = array(
    'eng' => array(
      'id' => 'eng',
      'text' => 'EN',
      'link' => 'english',
      'active' => NULL,
      'flag' => 'flag_usa'
    ),
    'esp' => array(
      'id' => 'esp',
      'text' => 'ES',
      'link' => 'spanish',
      'active' => NULL,
      'flag' => 'flag_spain'
    )
  );

  switch($Language){
    case 'spanish':
      $langSwitch['esp']['active'] = 'active';
      break;
    default:
      $langSwitch['eng']['active'] = 'active';
  }

  //-------------------------//
  // Meta
  //-------------------------//

  $Description_Site  = "Disruptive Studio specialized software for MLM companies.";
  $Keywords_Site     = $Company_Name.", MLM, Custom software";

  //-------------------------//
  // General
  //-------------------------//

  $Host_Site      = $_SERVER["HTTP_HOST"];
  $Footer_Rights  = "©{$Company_Name} ".date("Y").". {$Copyright}";

  //-------------------------//
  // Links
  //-------------------------//

  $Register_Link = "https://sales.softwareformlm.com/join/{$user_replica}";

  //-------------------------//
  // Menu
  //-------------------------//
?>