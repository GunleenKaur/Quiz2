<?php

// MAKE SURE TO MAKE A BACKUP COPY OF THIS FILE  
// BEFORE WORKING ON THE AUTHENTICATION REQUIREMENT
class Page  {

    public static $heading = "";
    public static $studentID=300373306;
    public static $studentName="Gunleen Kaur";
    public static $notifications;

    static function displayHeader() { 
        ?>
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8">
                <meta name="author" content="bambang">
                <link rel="stylesheet" href="css/styles.css">
            </head>
            <body>
            <section class="main">
                    <h1>Quiz 2 - <?php echo self::$studentName."(".self::$studentID.")"; ?></h1>  
                 <?php
     }

    static function displayFooter()
    
    { ?>

        </body>
        </html>
        <?php
    }

    static function displayCarDetail(Car $car) 
    {
        ?>
        <section class="detail">
        <div>
            <h2>Car details</h2>
            Year: <strong>year</strong><br>
            Make: <strong>make</strong><br>
            Model: <strong>model</strong><br>
            Price: <strong>price</strong><br>
            Drive: <strong>drive</strong><br>
            Battery: <strong>battery (Kwh)</strong><br>
            EPARange: <strong>epa mile</strong><br>
            Acceleration to 60 mph: <strong>acceleration (s)</strong><br>
            Top Speed: <strong>top speed mph</strong><br>            
        </div>
    </section>
    <?php
     }

    static function displayTable(Array $cars) { 
        ?>
        <div>                
        <table>
            <thead>
                <tr>                            
                    <td>Year</td>
                    <td>Make</td>
                    <td>Model</td>
                    <td>Price</td>
                    <td>Detail</td>
                    <td>Delete</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $cardetails=array($cars);
                //$cars=CarDAO::getCars();
               // $cars=$_GET['cars'];
                $i=0;
                foreach($cardetails as $cardetail)
                {
                    if($i%2==0)
                    {
                        echo "<tbody class=\"evenRow\">";
                    
                    }
                else{
                    echo "<tbody class=\"oddRow\">";
                }
                ?>
                <tr>
                    <td> <?php //echo "<td> echo $cardetail->getYear()";  ?></td>
                    <td><?php //echo "<td> echo $cardetail->getMake()";  ?> </td>
                    <td><?php // echo "<td> echo $cardetail->getModel()";  ?></td>
                    <td><?php //echo "<td> echo $cardetail->getPrice()";  ?></td>                            
                    <td><a href="">Detail</a></td>
                    <td><a href="">Delete</a></td>
                </tr>
            </tbody>
            <tbody>
                <tr class="evenRow">
                    <td>Year</td>
                    <td>Make</td>
                    <td>Model</td>
                    <td>Price</td>                            
                    <td><a href="">Detail</a></td>
                    <td><a href="">Delete</a></td>
                </tr>
            </tbody>                    
        </table>
    </div>
</section>
<?php 
     }
    }

    static function displayLoginForm() {
        ?>
               <section class="login">
            <h2>Login Details</h2>
                <form method="post">
                    <div>
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username">
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password">
                    </div>
                    <div>
                        <input type="submit" name="login" value="Login">
                    </div>
                </form>
            

        </section>
        <?php
     }

    static function displayLogoutForm(){
        ?>
         <section class="logout">
            <h2>Login Details</h2>
            <form method="post">
                <div>
                    <span>Welcome Change my name!</span>
                    <input type="submit" name="logout" value="Logout">
                </div>                                
            </form>
        </section>
        <?php
     }

}