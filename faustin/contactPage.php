<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Contact Us!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include 'includes/footer.php';?>
        <?php include "includes/Header.php"; ?>
        <div class="cover">
            
        </div>
        <div class="container center-block" style="padding: 4px;">
            <form name="contactform" method="post" action="sendFormMail.php">
                <table width="450px">
                    <tr>
                        <td valign="top">
                            <label for="first_name">First Name *</label>
                        </td>
                        <td valign="top">
                            <input  type="text" name="first_name" maxlength="50" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top"">
                            <label for="last_name">Last Name *</label>
                        </td>
                        <td valign="top">
                            <input  type="text" name="last_name" maxlength="50" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="email">Email Address *</label>
                        </td>
                        <td valign="top">
                            <input  type="text" name="email" maxlength="80" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="telephone">Telephone Number</label>
                        </td>
                        <td valign="top">
                            <input  type="text" name="telephone" maxlength="30" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="comments">Comments *</label>
                        </td>
                        <td valign="top">
                            <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align:center">
                            <input type="submit" value="Submit"> 
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
