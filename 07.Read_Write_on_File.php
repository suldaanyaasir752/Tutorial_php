<?php
// How to read and write to the file
// fopen Need Arguments filename mode
// mode {
    // r = read , r+ , read/write : FAIL
    // w = Write , w+ write/read : ERASE NEW FILE
    // a  = read/append  a+ read/write/append  NO FAIL  NEW FILE
      //                              DIB AYEE ISKU SII QABANYSAA 
    // Read : wuxuu u baahan yahay size file oo dhan 
//} 
//-------------------------------------------------------

$fileName = "newfile.txt";
$file =fopen($fileName,"r");

if($file == false){
  echo "File not found";
}else{
  echo fread($file, filesize($fileName));
} 
fclose($file);

//---------------------------------------------------------

//fwrite = need to arguments: filename, data,
// optional:size
$fileName = "newfile.txt";
$file = fopen($fileName,"w");
if($file == false){
  echo "File not found";
}else{
   fwrite($file,"Helloword!");
}
fclose($file);
$fileOpen = fopen($fileName,"r");
if($fileOpen == false){ 
 echo "File not found";
}else{
  echo fread($fileOpen, filesize($fileName));
}
fclose($fileOpen);
?>