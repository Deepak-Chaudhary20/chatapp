<!-- This Chat App is Created By Deepak Chaudhary for personal use only / -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Online Chat App</title>
</head>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="#">
                <div class="error-txt">There is an error message!</div>
                <div class="name-details">
                    <div class="field input">
                        <label for="">First Name</label>
                        <input type="text" placeholder="First Name" name="fname">
                    </div>
                    <div class="field input">
                        <label for="">Last Name</label>
                        <input type="text" placeholder="Last Name" name="lname">
                    </div>
                </div>
                <div class="field input">
                    <label for="">Email Address</label>
                    <input type="email" placeholder="Enter your email" name="email">
                </div>
                <div class="field input">
                    <label for="">Password</label>
                    <input type="password" placeholder="Enter new Password" name="password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field input">
                    <label for="">Select Image</label>
                    <input type="file">
                </div>
                <div class="field input button">
                    <input type="submit" value="Continue to chat">
                </div>
                <div class="link">Already signed up? <a href="#">Login now</a></div>
            </form>
        </section>
    </div>
    <script src="javascript/password.js"></script>
    <script src="javascript/signup.js"></script>
</body>

</html>