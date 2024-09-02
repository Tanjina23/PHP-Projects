<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>My Calculator 🧮</h1>

    <form action="" method="GET">
       
       <div class="result">
          <?php
            if(isset($_GET['submit'])){
                $nm1 = $_GET['num1'];
                $nm2 = $_GET['num2'];
                $operator = $_GET['operator'];
                

                // switch($operator){
                //     case "ADD":
                //         echo $nm1 + $nm2;
                // }

                if($operator == 'ADD'){
                    echo $nm1 + $nm2;
                }
                if($operator == 'SUB'){
                    echo $nm1 - $nm2;
                }
                if($operator == 'MULT'){
                    echo $nm1 * $nm2;
                }
                if($operator == 'DIV'){
                    echo $nm1 / $nm2;
                }
              
            }
          if(isset($_GET['reset'])){
            echo " ";

          }

          ?>
          

       </div>

       <input type="number" name="num1" placeholder="Enter First Number"  ><br> <br>
       <input type="number" name="num2" placeholder="Enter Second Number"  ><br><br>

        <select name="operator">
            <option value="ADD">ADD</option>
            <option value="SUB">SUB</option>
            <option value="MULT">MULT</option>
            <option value="DIV">DIV</option>
        </select>&nbsp;

       <button type="submit" value="submit" name = "submit">Submit</button>&nbsp;
       <button type="submit" value="reset" name = "reset">Reset</button>

    </form>
    
</body>
</html>