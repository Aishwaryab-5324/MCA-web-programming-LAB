<html>
    <body>
        <h1>electricity bill</h1>
        <form method="POST" action="#">
            Consumer ID:<input type="number" name="id"><br>
            Name:<input type="name" name="name"><br>
            Previous reading:<input type="number" name="prev"><br>
            Present reading:<input type="number" name="pres"><br>
            <br><input type="submit">
        </form>
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $id=$_POST['id'];
            $name=$_POST['name'];
            $prev=$_POST['prev'];
            $pres=$_POST['pres'];

            $units = $pres - $prev;

            echo "---------------------------------------";
            echo "<h3>Kerala Electricity Board(KSEB)</h3>";
            echo "<br><br>";
            echo "ConsumerID:".$id."<br>";
            echo "Consumer name:".$name."<br>";
            echo "Units consumer:".$units."<br>";
            if($units <= 100)
            {
                $amt=$units * 3;
            }
            else if($units > 100 && units <= 200)
            {
                $amt=$units * 4;
            }
             else if($units > 200 && units <= 300)
            {
                $amt=$units * 5;
            }
            else{
                $amt=$units * 5;
            }
            echo "<h4>Total Rs:".($amt)."</h4><br>";
            echo "--------------------------------------";
        }
        ?>
    </body>
</html>
