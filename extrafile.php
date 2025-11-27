 if($upass === $ucpass){
                    $sql = "UPDATE registrationdb SET user_name='$uname', email='$uemail', profilePicture='$uproPic', password= '$upass' WHERE id=$id";
                    $conn->query($sql);
                    header("Location: dbviewfile.php");
                } else{
                    echo "Your password not match with comfirm password!!!";
                }
                
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if($_SERVER["REQUEST_METHOD"] == "POST"){
        $uname = $_POST['user_name'];
        $uemail = $_POST['email'];

        $uproPic = '';

        // $upass = $_POST['password'];
        // $ucpass = $_POST['confirm_password'];

        if (isset($_FILES['profilePicture']) && $_FILES['profilePicture']['error'] === 0) {
 
            $filepath = "usersprofilePic/";
            $newpic = $_FILES["new_profilePicture"]["name"];
            $uproPic = time() . "_" . basename($newpic);
            $targetFile = $filepath . $uproPic;
 
            if (!file_exists($filepath)) {
                mkdir($filepath, 0777, true);
            }
             
            if($uproPic != NULL){
                $target_dir = $targetFile.basename($newpic);

                if(move_uploaded_file($_FILES["new_profilePicture"]["tmp_name"], $target_dir)){
                    $sql = "UPDATE registrationdb SET profilePicture='$uproPic' WHERE id=$id";
                }
                // else{
                // $sql = "UPDATE registrationdb SET user_name='$uname', email='$uemail', password= '$upass' WHERE id=$id";
                // }
            } else{
                $uproPic = time() . "_" . basename($_FILES["profilePicture"]["name"]);
            }

        }

        $upass = $_POST['password'];
        $ucpass = $_POST['confirm_password'];

            if($upass === $ucpass){
                $sql = "UPDATE registrationdb SET user_name='$uname', email='$uemail', profilePicture='$uproPic', password= '$upass' WHERE id=$id";
                $conn->query($sql);
                header("Location: dbviewfile.php");
                // echo "Password Match!";
            } else{
                echo "Your password not match with comfirm password!!!";
                // header("Location: regibtn.php");
            }

    }

?>