<?php
    include_once("header.php");
?>

<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <title>MANA'O Profile</title>
        <link href="../css/main_layout.css" rel="stylesheet">
        <link href="../css/main_style.css" rel="stylesheet">
        <link href="../css/others.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
    </head>

    <body>
    <h1>Personal Information</h1>
    <div class="content">
        <div id="account">
            <div id="fields">
                <form action="../actions/action_update_user.php" method="post" class="register_form">
                    <label>Name</label>
                    <input name="name" class="editInput" type="text" placeholder="Name" value="<?php echo htmlentities(getName($_SESSION['userID'])) ?>" required="required">
                    <label>Username</label>
                    <input name="username" class="editInput" type="text" placeholder="Username" value="<?php echo htmlentities($_SESSION['username']) ?>" required="required">
                    <label>Email</label>
                    <input name="email" class="editInput" type="email" placeholder="Email" value="<?php echo htmlentities(getEmail($_SESSION['userID'])) ?>" required="required">
                    <label>Password</label>
                    <input name="currpassword" class="editInput" type="password" placeholder="Password" required="required">
                    <h5> Optional </h5>
                    <input name="password" class="editInput" type="password" placeholder="New Password" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}">
                    <input name="passwordagain" class="editInput" type="password" placeholder="Repeat New Password" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}">
                    <span class="hint">Must match new password</span>
                    <input type="submit" name="Submit" value="Update">
                </form>
                <hr>
                <input onclick="openDialog('Delete Account')" type="submit" value="Delete Account">

            </div>
            <div id="photo_field">
                <form action="../actions/api_upload_photo.php" method="post" enctype="multipart/form-data">
                    <label>Photo</label>
                    <img id="photo" src="../profilePictures/<?php echo getUserPhoto($_SESSION['userID']);?>" alt="Profile Picture">
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" name="Submit" value="Upload">
                </form>
            </div>
        </div>
    </div>
    </body>
</html>