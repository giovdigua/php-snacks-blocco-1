<?php 
//This function check is an email it's valid(just thers is at and dot sign.... not 100% secure!!!!!!! )
function isValidMail($mail)
{
   $at = strpos($mail, '@');
   if ($at) {
       $dot = strpos($mail,'.');
       if($dot){
           return true;
       }
   } 
   return false;
   
}
?>