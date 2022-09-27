<?php include 'inc/header.php'; ?>

<head>
    <title>Sign Up</title>
    <style>
        <?php include 'assets/css/signup.css' ?>
    </style>
</head>

<main>
    <div class="applicattion_main">
        <div class="form-container">
            <form action="./form/login.php" method="post" class="signup-form">
                <div class="inputs-container">
                    <h1 class="title">Sign Up</h1>
                    <input type="text" name="username" class="form-input form-input-1" placeholder="Type your username"/>
                    <br>
                    <input type="password" name="password1" class="form-input form-input-2" placeholder="Type your password"/>
                    <br>
                    <input type="password" name="password2" class="form-input form-input-3" placeholder="Confirm password"/>
                    <br>
                    <input type="submit" value="Submit" class="submit-btn">
                </div>
            </form>
        </div>
    </div>
</main>

<?php include 'inc/footer.php'; ?>