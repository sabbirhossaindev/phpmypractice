<?php
var_dump($_FILES['photo']);
exit();
// let's check form submit or not. by Sabbir Hossain 
if($_POST['REQUEST_METHOD'] == "POST"){
    if(isset($_FILES['photo']) && $_FILES['photo']['error'] == 0){
        $allowed = array("jpg"=>"image/jpg","jpeg"=>"image/jpeg","png"=>"image/png", "gif"=>"image/gif");
        $filename = $_FILES['name'];
        $filetype = $_FILES['type'];
        $filesize = $_FILES['size'];
        //___verify
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die('please, choose a valid file');
        //__validation with size
        $maxsize = 5*1024+1024;
        if($filesize > $maxsize) die('error: File is grater then 5MB !');
        if(in_array($filetype, $allowed)){
            move_uploaded_file($_FILES['photo']['tmp_name'], "upload/".$filename);
            echo "file uploaded successfully done!";
        } else{
            echo "file not uploaded!";
        }
    }
} else{
    echo "error".$_FILES['photo']['error'];
}
?>