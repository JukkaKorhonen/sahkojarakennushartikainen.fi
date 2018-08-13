<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Palaute</title>
</head>
<body>
 <table width="400">
 <tr>
 <td align="center">
 <?php
  $posti = array
    (
    nimi=>$_POST['nimi'],
    email=>$_POST['email'],
    viesti=>$_POST['viesti']
    );
  foreach ($posti as $arvo)
  {
    if (empty($arvo))
    {
    die("Palaa edelliselle sivulle ja tarkista että olet täyttänyt kaikki kohdat.");
    }
  }
  $osoite = "matti.hartikainen@sahkojarakennushartikainen.fi";
  $otsikko = "Yhteydenotto";
  $viesti = "Nimi: ".$_POST['nimi']."
E-mail tai puhelin: ".$_POST['email']."
Yhteydenotto verkkolomakkeella: ".$_POST['viesti']."";
  mail ($osoite, $otsikko, $viesti, "From: info@sahkojarakennushartikainen.fi");
  echo "Kiitos yhteydenotostasi, otamme piakkoin yhteyttä";
 ?>
 </td>
</tr>
</table>
</body>
</html>
