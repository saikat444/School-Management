<?php
include_once './heads.php';
?>

<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">
    <title>Dutt High School Admission</title>
    <link rel="shortcut icon" type="image/jpg" href="image/school.jpg" />
    <meta name="viewport" content="width=device-width" initial-scale="1" shrink-to-fit="no" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>



    <div class="s_ign">

        <h4 class="sign_head">Sign Up here</h4>

        <?php
        $link = mysqli_connect("localhost", "root", "", "school");

        if (isset($_POST['btn'])) {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $pass = $_POST['pass'];
            $bth = $_POST['bth'];
            $gender = $_POST['gender'];

            $query = "INSERT INTO signup(first_name, last_name, s_email, s_mobile, s_password,s_birth,s_gender)
            VALUES('$fname','$lname','$email','$mobile','$pass','$bth','$gender')";

            $data =  mysqli_query($link, $query);

            if($data){ ?>
                <p class="ph_text"> <?php echo "Registation Successfully"; ?></p>
            <?php }else{ ?>
                <p> <?php echo "Registation Failed"?></p>
           <?php }
        }
        ?>
        <form action="" method="post">
            <table>
                <tr>
                    <td class="s_td">First Name : </td>
                    <td>
                        <input class="s_ntd" type="text" name="fname" required="1">
                    </td>
                </tr>

                <tr>
                    <td class="s_td">Last Name : </td>
                    <td>
                        <input class="s_ntd" type="text" name="lname" required="1">
                    </td>
                </tr>

                <tr>
                    <td class="s_td">Email : </td>
                    <td>
                        <input class="s_ntd" type="text" name="email" required="1">
                    </td>
                </tr>

                <tr>
                    <td class="s_td">Mobile : </td>
                    <td>
                        <input class="s_ntd" type="text" name="mobile" required="1">
                    </td>
                </tr>


                <tr>
                    <td class="s_td">Password : </td>
                    <td>
                        <input class="s_ntd" type="password" name="pass" required="1">
                    </td>
                </tr>

                <tr>
                    <td class="s_td">Birthday : </td>
                    <td>
                        <input class="sn_td" type="number" name="bth">
                        <input class="sn_td" type="number" name="bth">
                        <input class="sn_td" type="number" name="bth">
                    </td>
                </tr>

                <tr>
                    <td class="s_td">Gender : </td>
                    <td>
                        <input type="radio" name="gender" value="male"><b style="color:blue">Male</b>
                        <input type="radio" name="gender" value="female"><b style="color:blue">Female</b>
                        <input type="radio" name="gender" value="custom"><b style="color:blue">Custom</b>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input class="su_bmit" type="submit" name="btn" value="Sign Up">
                    </td>
                </tr>
            </table>
        </form>


        <p style="font-weight: bold; color: darkgreen;">Do you have already an account..?<a href="signin.php">Sign In</a></p>

    </div>



</body>

</html>