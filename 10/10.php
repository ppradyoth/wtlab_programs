<html>
    <body>
        <h2>Last visited time on the web page</h2>
        <?php
            $inTwoMonths=60*60*60*24+time();
            setcookie("lastVisit",date("G:i:s - m/d/y"),$inTwoMonths);
            if(isset($_COOKIE["lastVisit"])){
                echo "Your last visit was: ".$_COOKIE["lastVisit"];
            }
            else 
            echo "You've got some stale cookies";
        ?>
    </body> 
</html>
