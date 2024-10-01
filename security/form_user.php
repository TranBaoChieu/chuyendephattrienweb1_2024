<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$_id = NULL;
$errors = [];

if (!empty($_GET['id'])) {
    $_id = $_GET['id'];
    $user = $userModel->findUserById($_id);//Update existing user
}


if (!empty($_POST['submit'])) {

    // Validate Name
    $name = trim($_POST['name']);
    if (empty($name)) {
        $errors['name'] = "Name không được để trống.";
    } elseif (!preg_match('/^[A-Za-z0-9]{5,15}$/', $name)) {
        $errors['name'] = "Name từ 5 đến 15 ký tự, A->Z, a->z, 0->9 là ký tự hợp lệ";
    }

    // Validate Password
    $password = trim($_POST['password']);
    if (empty($password)) {
        $errors['password'] = "Password không được để trống.";
    } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()]).{5,10}$/', $password)) {
        $errors['password'] = "Password từ 5 đến 10 ký tự, chứa chữ in hoa(A-Z), chữ thường(a-z) và ký tự đặc biệt(~!@#$%^&*().";
    }    

    if (empty($errors)) {
        if (!empty($_id)) {
            $userModel->updateUser($_POST); 
        } else {
            $userModel->insertUser($_POST); 
        }
        header('location: list_users.php');
    
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>

<body>
    <?php include 'views/header.php'?>
    <div class="container">

        <?php if ($user || !isset($_id)) { ?>
        <div class="alert alert-warning" role="alert">
            User form
        </div>
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $_id ?>">
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" name="name" placeholder="Name"
                    value='<?php if (!empty($user[0]['name'])) echo $user[0]['name'] ?>'>
                <?php if (!empty($errors['name'])) { ?>
                <div class="alert alert-danger"><?php echo $errors['name']; ?></div>
                <?php } ?>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
                <?php if (!empty($errors['password'])) { ?>
                <div class="alert alert-danger"><?php echo $errors['password']; ?></div>
                <?php } ?>
            </div>

            <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php } else { ?>
        <div class="alert alert-success" role="alert">
            User not found!
        </div>
        <?php } ?>
    </div>
</body>

</html>