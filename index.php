
<?php 
    // check if user coming from a request
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // assign variables
        $user = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
        $mail = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        $cellphone = filter_var($_POST["cellphone"], FILTER_SANITIZE_NUMBER_INT);
        $msg = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
        

        // Iam not avilbale host
        // $fromErrors = array();
        // if (strlen($user) <= 3) {
        //     $fromErrors[] = "Username Must Be Larger Than <strong>3</strong> Characters";
        // };
        // if (strlen($msg) <= 10) {
        //     $fromErrors[] = "Message Can't Be Less Than <strong>10</strong> Characters";
        // };
        // if (strlen($cellphone) < 11) {
        //     $fromErrors[] = "Enter a valid Egyptian phone number <strong>11</strong> Number";
        // }

        // $headers = "From: " . $mail . "\r\n";
        // $myEmail = "mahmoudzayed1001@gmail.com";
        // $subject = "Cotact Form";
        // if (empty($fromErrors)) {
        //     mail($myEmail, $subject, $msg, $headers);
        // }
    }

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Contact_App</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Start Form  -->
    <div class="container">
        <h2 class="text-center pt-4 mt-4">Contact Me</h2>
        <form class="contact-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="form-group">
                <input class="form-control username" type="text" name="username" placeholder="Type Your Username" value="">
                <i class="fa fa-user fa-fw"></i>
                <span class="aster">*</span>
                <div class="alert alert-danger custom-alert">
                    Username Must Be Larger Than <strong>3</strong> Characters
                </div>
            </div>
            <div class="form-group">
                <input class="form-control email" type="email" name="email" placeholder="please Type A Valid Email" value="">
                <i class="fa fa-envelope fa-fw"></i>
                <span class="aster">*</span>
                <div class="alert alert-danger custom-alert">
                    Email Cant't Be <strong>Empty</strong> 
                </div>
            </div>
            <div class="form-group">
                <input class="form-control phonee" type="text" name="cellphone" placeholder="Type Your Cell Phone"  value="">
                <i class="fa fa-phone fa-fw"></i>
                <span class="aster">*</span>
                <div class="alert alert-danger custom-alert"> 
                    Enter a valid Egyptian phone number <strong>11</strong> Number 
                </div>
            </div>
            <div class="form-group">
                <textarea class="form-control mmmmmsg" name="message" placeholder="Write Your Message"></textarea> 
                <span class="aster">*</span>
                <div class="alert alert-danger custom-alert">
                    Message Can't Be Less Than <strong>10</strong> Characters 
                </div>
                <input class="btn btn-success btn-block" type="submit" value="Send Msg">
                <i class="send-icon fa-solid fa-paper-plane fa-fw"></i>
            </div>
        </form>
        
    </div>
    <!-- End Form  -->

    <script src="js/jquery-1.12.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>