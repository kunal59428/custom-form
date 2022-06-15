 <?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  
  // database connection
  $test = new mysqli('localhost' , 'root','','feedback');
  if($test->connect_error){
      die('connection Failed : '.$test->connect_error);
  }else{
      $stmt = $test->prepare("insert into contact(name, email, phone, message)value(?, ?, ?, ?)");
      $stmt->bind_param("ssis",$name, $email, $phone, $message);
      $stmt->execute();
      echo "Data  save......";
      $stmt->close();
      $test->close();
  }
  ?>
