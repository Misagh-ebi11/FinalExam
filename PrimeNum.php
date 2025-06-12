<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        #PrimeNumber{
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
</head>
<body>
    <div id="PrimeNumber">
    <form method="post">
        <label for="FinalNumber">Please enter your final number</label>
        <input type="text" id="FinalNumber" name="FinalNumber" class="Input">
        <input type="submit" value="Exec" class="btn">
            <div id="Output">
            <?php
                function ShowPrime()
                {
                    if($_SERVER["REQUEST_METHOD"] == "POST")
                    {
                        $FinalNum = htmlspecialchars($_REQUEST['FinalNumber']);
                        if(empty($FinalNum))
                            echo ('<h3 class="Error">Please enter a number</h3>');
                        else if ($FinalNum <= 1)
                            echo ('<h3 class="Error">Please enter a number bigger than 1</h3>');
                        else
                        {
                            echo('<table id="Result">');
                            echo('<tr>');
                            $Counter = 1;
                            for ($Num=2; $Num <= $FinalNum; $Num++) { 
                                $Is_Prime = true;
                                for ($i=2; $i <= sqrt($Num); $i++)
                                { 
                                    if($Num % $i == 0)
                                    {
                                        $Is_Prime = false;
                                        break;
                                    }
                                }
                                if($Is_Prime)
                                {
                                    if($Counter === 10)
                                    {
                                        echo('</tr><tr>');
                                        $Counter = 1;
                                    }
                                    echo('<td id="Data">');
                                    echo($Num);
                                    echo('</td>');
                                    $Counter++;
                                }
                            }
                            echo("</tr>");
                            echo("</table>");
                        }
                    }
                }
                ShowPrime()
            ?>
            </div>
    </form>
    </div>
</body>
</html>