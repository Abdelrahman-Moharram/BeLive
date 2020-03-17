
<?php 

$msg="";
$css_class="";

$conn = mysqli_connect('localhost', 'root', '', 'sw2');

if(isset($_POST['save-user'])){
    echo "<pre>", print_r($_FILES['profileImage']['name']), "</pre>";
    $bio=$_POST['bio'];
    $profileImageName = time().'_'.$_FILES['profileImage']['name'];
    $target =   'images/' .$profileImageName;
    if(move_uploaded_file($_FILES['profileImage']['name'], $target)){
    $sql = "INSTERT INTO uss(profile_image,bio) values('profileImageName',$bio)";
    if(mysqi_query($conn,$sql)){
        $msg="Image uploaded and saved to database";
        $css_class="alert success";
    }else
    { $msg= "database error: failed to save user";
    $css_class= "alert danger";}
    
    $msg= "imag uploaded";
    $css_class= "alert-success";
}

}
/*
 else {
     $msg= "Failed to upload";
     $css_class= "alert danger";
    
}*/
?>