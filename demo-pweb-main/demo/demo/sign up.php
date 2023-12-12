<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Responsive Login and Signup Form </title>
    <style>
        /* Google Fonts - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
.container{
    height: 100vh;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #4070f4;
    column-gap: 30px;
}
.form{
    position: absolute;
    max-width: 430px;
    width: 100%;
    padding: 30px;
    border-radius: 6px;
    background: #FFF;
}
.form.signup{
    opacity: 0;
    pointer-events: none;
}
.forms.show-signup .form.signup{
    opacity: 1;
    pointer-events: auto;
}
.forms.show-signup .form.login{
    opacity: 0;
    pointer-events: none;
}
header{
    font-size: 28px;
    font-weight: 600;
    color: #232836;
    text-align: center;
}
form{
    margin-top: 30px;
}
.form .field{
    position: relative;
    height: 50px;
    width: 100%;
    margin-top: 20px;
    border-radius: 6px;
}
.field input,
.field button{
    height: 100%;
    width: 100%;
    border: none;
    font-size: 16px;
    font-weight: 400;
    border-radius: 6px;
}
.field input{
    outline: none;
    padding: 0 15px;
    border: 1px solid#CACACA;
}
.field input:focus{
    border-bottom-width: 2px;
}
.eye-icon{
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    font-size: 18px;
    color: #8b8b8b;
    cursor: pointer;
    padding: 5px;
}
.field button{
    color: #fff;
    background-color: #0171d3;
    transition: all 0.3s ease;
    cursor: pointer;
}
.field button:hover{
    background-color: #016dcb;
}
.form-link{
    text-align: center;
    margin-top: 10px;
}
.form-link span,
.form-link a{
    font-size: 14px;
    font-weight: 400;
    color: #232836;
}
.form a{
    color: #0171d3;
    text-decoration: none;
}
.form-content a:hover{
    text-decoration: underline;
}
.line{
    position: relative;
    height: 1px;
    width: 100%;
    margin: 36px 0;
    background-color: #d4d4d4;
}
.line::before{
    content: 'Or';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #FFF;
    color: #8b8b8b;
    padding: 0 15px;
}
.media-options a{
    display: flex;
    align-items: center;
    justify-content: center;
}
.dropdown {
 position: relative;
 display: inline-block;
}

.dropdown-content {
 display: none;
 position: absolute;
 background-color: #f9f9f9;
 min-width: 160px;
 box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
 z-index: 1;
}

.dropdown-content a {
 color: black;
 padding: 12px 16px;
 text-decoration: none;
 display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
 display: block;
}

.dropdown:hover .dropbtn {
 background-color: #3e8e41;
}

@media screen and (max-width: 400px) {
    .form{
        padding: 20px 10px;
    }
    
}
    </style>
                
        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
                        
    </head>
    <body>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>Login</header>
                    <form action="#">
                        <div class="field input-field">
                            <input type="email" placeholder="Email" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Password" class="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="form-link">
                            <a href="#" class="forgot-pass">Forgot password?</a>
                        </div>

                        <div class="field button-field">
                            <button>Login</button>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Don't have an account? <a href="#" class="link signup-link">Signup</a></span>
                    </div>
                </div>

            </div>

            <!-- Signup Form -->

            <div class="form signup">
                <div class="form-content">
                    <header>Signup</header>
                    <form action="sign up.php" method="POST">
                        <div class="field input-field">
                            <label for="nama">Name:</label>
                            <input type="text" name="nama" class="input">
                        </div>
                        <div class="field input-field">
                            <label for="tingkat">Umur:</label>
                            <input type="text" name="tingkat" class="input">
                        </div>
                        <div class="field input-field">
                            <label for="sekloah">Sekolah:</label>
                            <input type="text" name="sekolah" class="input">
                        </div>
                        <div class="field input-field">
                            <label for="username">Username:</label>
                            <input type="text" name="username" class="input">
                        </div>
                        <div class="field input-field">
                            <label for="password">Password:</label>
                            <input type="password" name="Password" class="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="field button-field">
						<input type="submit" name="submit" value="SignUp">
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
                    </div>
                </div>

                <div class="line"></div>

            </div>
        </section>

        <!-- JavaScript -->
        <script>
             const forms = document.querySelector(".forms"),
      pwShowHide = document.querySelectorAll(".eye-icon"),
      links = document.querySelectorAll(".link");

pwShowHide.forEach(eyeIcon => {
    eyeIcon.addEventListener("click", () => {
        let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");
        
        pwFields.forEach(password => {
            if(password.type === "password"){
                password.type = "text";
                eyeIcon.classList.replace("bx-hide", "bx-show");
                return;
            }
            password.type = "password";
            eyeIcon.classList.replace("bx-show", "bx-hide");
        })
        
    })
})      

links.forEach(link => {
    link.addEventListener("click", e => {
       e.preventDefault(); //preventing form submit
       forms.classList.toggle("show-signup");
    })
})
        </script>

<?php

require_once("dbConnection.php");

if (isset($_POST['submit'])) {    
    $nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
    $tingkat = mysqli_real_escape_string($mysqli, $_POST['tingkat']);
    $sekolah = mysqli_real_escape_string($mysqli, $_POST['sekolah']);
    $username = mysqli_real_escape_string($mysqli, $_POST['username']);
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);
        
    if (empty($nama) || empty($tingkat) || empty($sekolah) || empty($username) || empty($password)) {
        echo "<font color='red'>Please fill in all fields.</font><br/>";
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 

        $siswa = mysqli_query($mysqli, "INSERT INTO siswa (`nama`, `tingkat`, `sekolah`) VALUES ('$nama', '$tingkat', '$sekolah')");
        $id_siswa = mysqli_insert_id($mysqli);

		$auth = mysqli_query($mysqli, "INSERT INTO account (`id_siswa`, `id_tutor`, `id_admin`, `username`, `password`) VALUES ('$id_siswa', NULL, NULL, '$username', '$password')");
        if ($auth) {
            echo "<p><font color='green'>Data added successfully!</p>";
            // echo "<a href='index.php'>View Result</a>";
        } else {
            echo "<p><font color='red'>Error adding data.</p>";
        }
    }
}

if ($auth) {
    echo "<p><font color='green'>Data added successfully!</font></p>";
    // Redirect to main.php after successful signup
    header("Location: ../frontend/dashboard.php");
    exit(); // Ensure no further code execution after redirection
} else {
    echo "<p><font color='red'>Error adding data.</font></p>";
}
?>

    </body>
</html>