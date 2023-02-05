<?php include 'header.php';?>

<div class="other-page-container">
    <div class="other-page-helper">
        <h1>Book a call</h1>
        <h2>Please enter your details below and we will contact you back</h2>
        <?php
            if(isset($_GET["error"])){
                if($_GET["error"] == "emptyfield"){
                    echo "<h3 style='color:red;'>Please fill in all fields!</h3>";
                }
                else if($_GET["error"] == "invalidemail"){
                    echo "<h3 style='color:red;'>Please provide a valid email!</h3>";
                }
                else if($_GET["error"] = "none"){
                    echo "<h3 style='color:green;'>Your message was sent! We will get back to you shortly!</h3>";
                }
            }
        ?>
        <form action="includes/bookacall.inc.php" method="post">
            <div class="form-container">
                <p>Basic data:</p>
                <label for="firstName">First Name:</label>
                <input type="text" name="firstName" placeholder="First Name...">
                <label for="lastName">Last Name:</label>
                <input type="text" name="lastName" placeholder="Last Name...">
                <label for="phoneNumber">Phone Number:</label>
                <input type="text" name="phoneNumber" placeholder="Phone Number...">
                <label for="email">Email:</label>
                <input type="text" name="email" placeholder="Email...">
            </div>
            <div class="form-container">
                <p>Anthropometric data:</p>
                <label for="age">Age:</label>
                <input type="text" name="age" placeholder="Age...">
                <label for="weight">Weight(kg):</label>
                <input type="text" name="weight" placeholder="Weight(kg)...">
                <label for="height">Height(cm):</label>
                <input type="text" name="height" placeholder="Height(cm)...">
            </div>
            <div class="form-container">
                <p>Other data:</p>
                <label for="profession">Profession:</label>
                <input type="text" name="profession" placeholder="Profession...">
                <label for="diseasesInjuries">Diseases Or Injuries</label>
                <input type="text" name="diseasesInjuries" placeholder="Diseases Or Injuries...">
            </div>
            <div class="form-button">
                <button type="submit" name="submit" class="cta-button">Send</button>
            </div>
        </form>
    </div>
</div>

<?php include 'footer.php';?>