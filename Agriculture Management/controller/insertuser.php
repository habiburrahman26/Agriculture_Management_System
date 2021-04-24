<?php
    session_start(); 

    if(isset($_SESSION['login_user']) || isset($_COOKIE['remember'])){
        header("location:dashboard.php");
        die();
    }

    $uname = $email = $uType =$pass= "";
    if (isset($_POST['submit'])) {
       

        if (isset($_POST['uname'])) {
            $uname = strtolower(trim($_POST['uname']));
            if ($uname == '') {
                $unameErr = 'User Name can not be empty';
            } else { 
            $file = fopen('user.txt', 'r');
            $data = fread($file, filesize('user.txt'));
            $userData = explode("|",$data);
            foreach ($userData as $us) {
                if(trim($us) == $uname){
                    $unameErr = 'User Name is taken';
                }
            }
            fclose($file);
        }
        } else {
            $unameErr = 'User Name is required';
        }

        if (isset($_POST['pass'])) {
            $pass = $_POST['pass'];
            if ($pass == '') {
                $passErr = 'Password can not be empty';
            }
        } else {
            $passErr = 'Password is required';
        }

        if (isset($_POST['confPass'])) {
            $confPass = $_POST['confPass'];
            if ($confPass == '') {
                $passErr = 'Confirm Password can not be empty';
            } else {
                if (isset($pass) && ($pass == $confPass)) {} else {
                    $passErr = 'Confirm Password & password must match';
                }
            }
        } else {
            $passErr = 'Confirm Password is required';
        }

        if (isset($_POST['uType'])) {
            $uType = $_POST['uType'];
            if ($confPass == '') {
                $utypeErr = 'User Type can not be empty';
            }
        } else {
            $utypeErr = 'User Type is required';
        }

        if (isset($_POST['email'])) {
            $email = trim($_POST['email']);
            if (!$email == '') {
                if (substr_count($email, ' ') == 0) {
                    if (substr_count($email, '@') == 0) {
                        $emailErr = 'Email must have "@"';
                    } else if (substr_count($email, '@') == 1) {
                        if (strpos($email, '@') != 0) {
                            if (substr_count($email, '.') != 0) {
                                $atpos = strpos($email, '@');
                                $domainPart = substr($email, $atpos + 1);

                                $dotpos = strrpos($domainPart, '.');
                                $domainExt = substr($domainPart, $dotpos + 1);
                                $domainName = str_replace('.' . $domainExt, "", $domainPart);
                                if (strlen($domainName) > 0 && validateDomainName($domainName)) {
                                    if (strlen($domainExt) > 1 && validateDomainExt($domainExt)) {} else {
                                        $emailErr = 'Email must have more than 1 letter and letters only after last ".", should not start with number.';
                                    }
                                } else {
                                    $emailErr = 'Email can only have dot(.), dash(-), chracters and numbers between "@" and last "." with no adjacent "@" or "."';
                                }
                            } else {
                                $emailErr = 'Email must have "."';
                            }
                        } else {
                            $emailErr = 'Email can not start with "@"';
                        }                   
                    } else {
                        $emailErr = 'Email can not have multiple "@"';
                    } 
                } else {
                    $emailErr = 'Email can not have spaces';
                }
            } else {
                $emailErr = 'Email can not be empty';
            }
        } else {
            $emailErr = 'Email is required';
        }

        if (isset($idErr) || isset($unameErr) || isset($emailErr) || isset($passErr) || (isset($utypeErr))) {} else {
            /*setcookie('id', $id, time() + (10 * 365 * 24 * 60 * 60));
            setcookie('email', $email, time() + (10 * 365 * 24 * 60 * 60));
            setcookie('uname', $uname, time() + (10 * 365 * 24 * 60 * 60));
            setcookie('pass', $pass, time() + (10 * 365 * 24 * 60 * 60));*/

            $file = fopen('user.txt', 'a');
            fwrite($file, $uname.'|'.$pass.'|'.$uType.'|'.$id.'|'.$email.'|'."\r\n");
            fclose($file);

            header('location: login.php');
        }            
    }else{	
        insertUser($_POST['email'],$_POST['uname'],$_POST['pass'],$_POST['uType']);
		
	}
	 function insertUser($email,$uname,$pass,$uType){
      $query="INSERT INTO user VALUES(NULL,'$email','$uname','$pass','$uType')";
      execute($query);
      return true;
     

 

    }

    function validateName($string) {
        $array = str_split($string);
        foreach ($array as $value) {
            if ($value == '.' || $value == '-' || $value == ' ' || ctype_alpha($value)) {
                continue;
            } else {
                return false;
            }
        }
        return true;
    }

    function validateDomainName($string) {
        foreach (explode(".", $string) as $part) {
            if ($part == '') {
                return false;
            }
        }
        $array = str_split($string);
        foreach ($array as $value) {
            if ($value == '-' || $value == '.' || is_numeric($value) || ctype_alpha($value)) {
                continue;
            } else {
                return false;
            }
        }
        return true;
    }

    function validateDomainExt($string) {
        if (is_numeric($string[0])) {
            return false;
        }
        $array = str_split($string);
        foreach ($array as $value) {
            if (is_numeric($value) || ctype_alpha($value)) {
                continue;
            } else {
                return false;
            }
        }
        return true;
    }
?>