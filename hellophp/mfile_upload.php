<?php
   if(isset($_FILES['image'])){
   	
      $total = count($_FILES['image']['name']);
      $uPloadOK=1;
      // Loop through each file
  	for($i=0; $i<$total; $i++) {
  	  $errors= array();
  		//Get File names
      $file_name = $_FILES['image']['name'][$i];
       //Get File Size
      $file_size =$_FILES['image']['size'][$i];
       //Get the temp file path
      $tmpFilePath =$_FILES['image']['tmp_name'][$i];
       //Get The File Type
      $file_type=$_FILES['image']['type'][$i];
   

      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'][$i])));
      $file_ext=$file_name;
              
      $file_ext = explode('.',$file_name);
      $file_ext2 = strtolower(end($file_ext));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext2,$expensions)=== false){
      $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 10097152){
         $errors[]='File size must be excately 10 MB';
      }
     if ($tmpFilePath != ""){
     // Setup our new file path
      $newFilePath = "./upload/" . $_FILES['image']['name'][$i];}
      
      if(empty($errors)==true){
         move_uploaded_file($tmpFilePath,"upload/".$file_name);
         $uPloadOK=1;
      }else{
         print_r($errors);
      }
   }
   if($uPloadOK == 1)
   {
   	echo "Success.";
   }
  } 
?>

<html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image[]" multiple="multiple"/>
         <input type="submit"/>
      </form>
      
   </body>
</html>
