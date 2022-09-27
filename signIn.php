<?php include 'inc/header.php'; ?>

<head>
    <title>Sign In</title>
    <style><?php include 'assets/css/signin.css'; ?></style>
</head>

<main>
    <div class="applicattion_main">
        <div class="form-container">
            <form action="./form/login.php" method="post" class="signup-form">
                <div class="inputs-container">
                    <h1 class="title">Sign In</h1>
                    <input type="text" name="username" class="form-input form-input-1" placeholder="Type your username"/>
                    <br>
                    <input type="password" name="password" class="form-input form-input-2" placeholder="Type your password"/>
                    <br>
                    <input type="submit" value="Submit" class="submit-btn">
                </div>
            </form>
        </div>
    </div>
</main>
<?php include 'inc/footer.php'; ?>