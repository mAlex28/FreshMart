<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php
            include('header.php');
        ?>
        <style>
            body {font-family: Arial, Helvetica, sans-serif;}
            * {box-sizing: border-box;}

            h3 {
                padding-top: 30px;
            }

            input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
            }

            button[type=submit] {
            background-color: #009e60;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            }

            button[type=submit]:hover {
            background-color: #004225;
            }

            .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 10px;
            }

        </style>
    </head>
    <body>
        <?php
            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $mailFrom = $_POST['email'];
                $subject = $_POST['subject'];
                $msg = $_POST['message'];

                $mailTo = "freshmartdevelopers@gmail.com";
                $headers = "From: ".$mailFrom;
                $txt = "You have received an e-mail from".$name."\n\n".$msg;

                mail($mailTo, $subject, $txt, $headers);
                header("Location: contact.php?mailsend");
            }
        ?>

        <h3>Contact Form</h3>

        <!-- Contact Section -->
        <div class="container" id="contact">
            <h3>Contact</h3>
            <p>Lets get in touch.</p>
            <form class="contact-form" action="contact.php" target="_blank">
            <input type="text" name="name" placeholder="Name" required name="Name">
            <input type="text" name="email" placeholder="Email" required name="Email">
            <input type="text" name="subject" placeholder="Subject" required name="Subject">
            <textarea name="message" cols="30" rows="10" placeholder="Message"></textarea>
            <button type="submit">
                <i class="fa fa-paper-plane"></i> SEND MESSAGE
            </button>
            </form>
        </div>
        <?php
            include('footer.php');
        ?>
    </body>
</html>
