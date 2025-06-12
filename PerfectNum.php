<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        body{
            text-align: center;
            background-image: url("Pictures/Second/vecteezy_abstract-background-design-background-texture-design-with_18752867-1.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 16px;
            font-weight: bold;
        }
        #PerfectNum{
            background-color: transparent;
            width: 80%;
            height: max-content;
            margin: 15px auto 0 auto;
            padding: 20px;
            border: 2px solid black;
            border-radius: 20px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 16px;
            font-weight: bold;
        }
        label{
            font-size: 20px;
            font-weight: bold;
        }
        .Input{
            padding: 7px;
            width: 200px;
            border: none;
            border-radius: 15px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            margin: 0 1px 0 8px;
            transition: all 0.5s ease-in-out;
        }
        .Input:hover{
            box-shadow: rgba(0, 0, 0, 0.25) 0px 2px 5px;
            transform: scale(1.05);
        }
        .btn{
            width: 80px;
            transition: all 0.5s ease-in-out;
            padding: 7px;
            border: none;
            border-radius: 15px;
            text-align: center;
            margin: 0 1px 0 8px;
        }
        .btn:hover{
            box-shadow: rgba(0, 0, 0, 0.25) 0px 2px 5px;
            background-color: rgb(120, 247, 177);
        }
        #Result{
            border: 1px solid black;
            border-radius: 5px;
            padding: 5px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 16px;
            font-weight: bold;
            width: max-content;
            margin: 15px auto 0 auto;
        }
        #Data{
            border: 1px solid black;
            border-radius: 5px;
            padding: 10px;
            transition: all 0.1s ease-in-out;
            margin: 2px;
        }
        #Data:hover{
            transform: scale(1.05);
            background-color: cyan;
        }
        .Error{
            animation: Bold 3s infinite;
        }
        @keyframes MoveResult{
            0%{
                transform: translateY(-5px);
            }
            50%{
                transform: translateY(5px);
            }
            100%{
                transform: translateY(-5px);
            }
        }
        @keyframes Bold{
            0%{
                transform: scale(1.05);
            }
            50%{
                transform: scale(1);
            }
            100%{
                transform: scale(1.05);
            }
        }
    </style>
<body>
    <div id="PerfectNum">
    <form method="post">
        <label for="FinalNum">Enter your final number</label>
        <input type="text" id="FinalNum" class="Input" name="FinalNum">
        <input type="submit" class="btn" value="Exec">
        <div id="Output">
            <?php
                function PerfectNum()
                {
                    if($_SERVER["REQUEST_METHOD"] == "POST")
                    {
                        $FinalNum = htmlspecialchars($_REQUEST['FinalNum']);
                        if(empty($FinalNum))
                        echo('<h3 class="Error">Please enter a number</h3>');
                        elseif($FinalNum <= 1)
                            echo('<h3 class="Error">Please enter a number bigger than 1</h3>');
                        else
                        {
                            echo('<table id="Result">');
                            echo('<tr>');
                            $Counter = 1;
                            for ($i=1; $i <= $FinalNum ; $i++) 
                            { 
                                $Sum = 0;
                                for ($j=1; $j < $i; $j++) 
                                { 
                                    if($i % $j == 0)
                                        $Sum += $j;
                                }
                                if($Counter == 10)
                                {
                                    echo('</tr><tr>');
                                    $Counter = 1;
                                }
                                if($Sum == $i)
                                {
                                    echo('<td id="Data">');
                                    echo($i);
                                    echo('</td>');
                                    $Counter++;
                                }
                            }
                            echo('</tr>');
                            echo('</table>');
                        }
                    }
                }
                PerfectNum();
            ?>
        </div>
    </form>
    </div>
</body>
</html>