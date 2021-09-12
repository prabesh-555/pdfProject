<?php
if(isset($_POST['log_in']))
{
$servername='localhost';
$username='root';
$pass='';
$database_name= 'register';
$conn=mysqli_connect($servername,$username,$pass,$database_name);
if(!$conn)
{
    die("Connection Failed:". mysqli_connect_error());
}
else{
    
    //echo'database connection successfully.';
} if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $e_mail = $_POST['e_mail'];
    $pass_word = $_POST['pass_word'];

    if(!empty($e_mail) && !empty($pass_word))
    {

        //read from database
        $query = "SELECT * from teacher_reg where e_mail = '$e_mail' limit 1";
        $result = mysqli_query($conn, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {

                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['pass_word'] === $pass_word)
                {

                    header("Location:teacher_index.php");
                    die;
                }
            }
        }
        
        echo "wrong username or password!";
    }else
    {
        echo "wrong username or password!";
    }
}
}

?>