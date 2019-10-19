<html>
    <head>
        <title>Gender</title>
    </head>
    <body>
        <form method="POST">
            <fieldset >
                <legend>
                   <b>GENDER</b> 
                </legend>
                <table border="0">
                    <tr>
                        <td><input type="radio" name="gender" value="Male">Male</td>
                        <td><input type="radio" name="gender" value="Female">Female</td>
                        <td><input type="radio" name="gender" value="Other">Other</td>
                        <td>
                            <?php
                            if(isset($_REQUEST['submit']))
                            {
                                echo "| Gender :".$_REQUEST['gender'];
                            }
                            ?>
                        </td>
                    </tr>
                   

                </table> 
                <hr>
                <table border="0">
                    <tr>
                        <td><input type="submit" name="submit" ></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>