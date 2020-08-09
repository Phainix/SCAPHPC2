<?php
include_once './autoload.php';

$title = "Login";
$error = $success = false;

use \Library\Form as Form;
use \Library\Validator as Validator;

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['login'])) {
            $username = isset($_POST['username']) ? Form::sanitise($_POST['username']) : null;
            $password = isset($_POST['password']) ? Form::sanitise($_POST['password']) : null;

            $usernameError = Validator::validateText('Username', $username, 30);
            if ($usernameError != null) {
                throw new \Exception($usernameError);
            }

            $passwordError = Validator::validateText('Password', $password, 30);
            if ($passwordError != null) {
                throw new \Exception($passwordError);
            }

            $result = Controller\User::login($username, $password);

            if($result == false) {
                throw new \Exception("Username/Password incorrect");
            } 

            $_SESSION['user'] = $result;
            $success = "User logged in successfully";
            header('Location: index.php');

        } elseif (isset($_POST['register'])) {
            $email = isset($_POST['email']) ? Form::sanitise($_POST['email']) : null;
            $username = isset($_POST['username']) ? Form::sanitise($_POST['username']) : null;
            $password = isset($_POST['password']) ? Form::sanitise($_POST['password']) : null;

            $emailError = Validator::validateEmail('Email', $email);
            if ($emailError != null) {
                throw new \Exception($emailError);
            }

            $usernameError = Validator::validateText('Username', $username, 30);
            if ($usernameError != null) {
                throw new \Exception($usernameError);
            }

            $passwordError = Validator::validateText('Password', $password, 30, 6);
            if ($passwordError != null) {
                throw new \Exception($passwordError);
            }

            $result = Controller\User::register($email, $username, $password);

            if($result == false) {
                throw new \Exception("User registration unsuccessful");
            } 

            $success = "User registered successfully";
        }
    }

} catch (\Exception $e) {
    $error = $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<?php include_once('components/head.php') ?>
<body>
    <?php include_once('components/header.php') ?>

    <div class="main split-half">
        <section>
            <h2 class="section-title">Login</h2>
            <form action="login.php" method="post" novalidate>
                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                </div>

                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div>

                <div>
                    <input type="submit" value="Login" name="login">
                </div>
            </form>
        </section>
        <section>
            <h2 class="section-title">Register</h2>
            <form action="login.php" method="post" novalidate>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>

                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                </div>

                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div>
                <div>
                    <input type="submit" value="Register" name="register">
                </div>
            </form>
        </section>
    </div>
    <?php include_once('components/footer.php') ?>
</body>
</html>