<!DOCTYPE html>
<html lang="en">


<head>
  
</head>
<body>

   


    
<?php
function error($message){
echo '<div class="alert alert-danger alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Danger!</strong>'.$message.'.
  </div>   '; 
}
function success($message){
echo ' <div class="alert alert-success alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong>'.$message.'.
  </div>'; 
}

if(isset($_GET)){
    if(isset($_GET['message'])&&$_GET['message']=='done'){
       success('Email has been sent'); 
    }
    if(isset($_GET['message'])&&$_GET['message']=='failed'){
       error('Email not sent'); 
    }if(isset($_GET['message'])&&$_GET['message']=='emptyfield'){
       error('Fill all input fields'); 
    }if(isset($_GET['message'])&&$_GET['message']=='error'){
       error('Please try again Later'); 
    }if(isset($_GET['message'])&&$_GET['message']=='tryagain'){
       error('Fill all input fields'); 
    }if(isset($_GET['message'])&&$_GET['message']=='invalidemail'){
       error('Invalid email address'); 
    }if(isset($_GET['message'])&&$_GET['message']=='invalidemail'){
       error('Invalid email address'); 
    }if(isset($_GET['message'])&&$_GET['message']=='invalidcountry'){
       error('Invalid country name'); 
    }if(isset($_GET['message'])&&$_GET['message']=='invalidenames'){
       error('Names contain invalid characters'); 
    }
}
?>
   
  
               
</body>

</html>