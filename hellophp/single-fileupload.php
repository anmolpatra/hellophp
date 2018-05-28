<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      
      $file_ext=end(explode('.',$_FILES['image']['name']));
      $file_ext1=$_FILES['image']['name'];
      $ext = explode('.',$file_ext1);
      $file_ext=end($ext);
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         if(move_uploaded_file($file_tmp,"upload/".$file_name))
         {
             echo "Success";
         }
         else 
         {
             echo "Failure";
         }
     
      }else{
         print_r($errors);
      }
   }
?>
<html>
   <body>
      
      <form action="#" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit" name="submit"/>
      </form>
      
   </body>
</html>