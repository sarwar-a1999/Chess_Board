<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Chess Board Layout </title>

   <style>
        table{
            border: 2px solid black;
            border-collapse:collapse;
            margin: 50px 550px;
        }

        p{
            
            font-weight: 600;
            font-size: 20px;
            text-align: center;
            margin-top:50px
        }

        td{
            height: 50px;
            width: 50px;
        }

        .black{
            background-color:black;
        } 

        .white{
            background-color: white;
        }

        .lett{
            background-color: silver;
            font-weight: 600;
            font-size: 20px;
            text-align: center;
            height: 30px;
            width: 30px;
        }

        .num{
            background-color: silver;
            font-weight: 600;
            font-size: 20px;
            text-align: center;   
            height: 30px;
            width: 30px;                    
        }

    </style>

</head>

<body>
          <p> Sarwar Shawkat Mhamad </p>

    <table>

        <?php
            
              $letter = array("","a","b","c","d","e","f","g","h");

          for ($rows = 8 ; $rows > 0 ; $rows--) { 
             echo "<tr>";

             echo "<td class = 'num'> $rows </td>";
              
              for ($cols = 8 ; $cols > 0 ; $cols--) { 

                  if (($rows + $cols) %2 == 0) {
                      echo "<td class = 'black'>  </td>";
                  }

                  else {
                    echo "<td class = 'white'> </td>";
                  }         
              }
           
              echo "</tr>";
              
          }
           
          echo "<tr>";
          for ($i=0; $i <=8; $i++) { 
            echo "<td class = 'lett' style = 'float: inline-end';> $letter[$i] </td>";
        }
        echo "</tr>";

        ?>

    </table>
    
</body>
</html>
