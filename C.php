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
                        <td><input type="radio" name="gender" value="Male"
                        <?php
                        if(isset($_REQUEST['submit']) && ($_REQUEST['gender']=="Male")){
                        ?>checked<?php } ?>>Male</td>
                        <td><input type="radio" name="gender" value="Female"
                        <?php
                        if(isset($_REQUEST['submit']) && ($_REQUEST['gender']=="Female")){
                        ?>checked<?php } ?>>Female</td>
                        <td><input type="radio" name="gender" value="Other"
                        <?php
                        if(isset($_REQUEST['submit']) && ($_REQUEST['gender']=="Other")){
                        ?>checked<?php } ?>>Other</td>
                        <td>
                            <?php
                            /*if(isset($_REQUEST['submit']) && ($_REQUEST['gender']!="Other") && ($_REQUEST['gender']!="Female") && ($_REQUEST['gender']!="Male"))
                            echo "nothing is checked";*/
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
