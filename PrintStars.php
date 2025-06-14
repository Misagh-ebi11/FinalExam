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
        #PrintStar{
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
        .btn , #SelectBox{
            width: max-content;
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
        #Output{
            margin-top: 20px;
        }
        #Left{
            width: max-content;
            margin: 0 auto 0 auto;
            text-align: left;
        }
        #Right{
            width: max-content;
            margin: 0 auto 0 auto;
            text-align: right;
        }
        #Back_btn{
            width: max-content;
            padding: 10px;
            border: none;
            border-radius: 20px;
            margin-top: 15px;
            transition: all 0.5s ease-in-out;
            animation: MoveResult 3s infinite;
        }
        #Back_btn:hover{
            box-shadow: rgba(0, 0, 0, 0.25) 0px 2px 5px;
            background-color: rgb(120, 247, 177);
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
    </style>
</head>
<body>
    <div id="PrintStar">
    <form method="post">
        <label for="FinalNum">Please enter your number</label>
        <input type="text" id="FinalNum" name="FinalNum" class="Input">
        <select name="Status" id="SelectBox">
            <option class="OPT" value="Right">Right</option>
            <option class="OPT" value="Left">Left</option>
            <option class="OPT" value="Top">Top</option>
            <option class="OPT" value="Down">Down</option>
        </select>
        <input type="submit" value="Exec" class="btn">
            <?php
                function PrintStart()
                {
                    if($_SERVER["REQUEST_METHOD"] == "POST")
                    {
                        $FinalNum = htmlspecialchars($_REQUEST['FinalNum']);
                        if (isset($_POST['Status']))
                            $Status = $_POST['Status'];
                        if(empty($FinalNum))
                            echo "Input is empty";
                        else if($FinalNum <= 0)
                            echo "Enter a number bigger than 0";
                        else
                        {
                            echo('<div id="Output">');
                            echo('<table>');
                            switch ($Status) {
                                case 'Right':
                                    echo("<div id='Right'>");
                                    for($i = 1; $i <= $FinalNum; $i++)
                                    {
                                        for($j = 1; $j <= $i; $j++)
                                        {
                                            echo(" * ");
                                        }
                                        echo('<br>');
                                    }
                                    echo('</div>');
                                break;
                                
                                case 'Left':
                                    echo("<div id='Left'>");
                                    for($i = 1; $i <= $FinalNum; $i++)
                                    {
                                        for($j = 1; $j <= $i; $j++)
                                        {
                                            echo(" * ");
                                        }
                                        echo('<br>');
                                    }
                                    echo('</div>');
                                break;

                                case 'Top':
                                    for($i = 1; $i <= $FinalNum; $i++)
                                    {
                                        for($j = 1; $j <= $i; $j++)
                                        {
                                            echo(" * ");
                                        }
                                        echo('<br>');
                                    }
                                break;

                                case 'Down':
                                    for($i = 1; $i <= $FinalNum; $i++)
                                    {
                                        for($j = $FinalNum; $j >= $i; $j--)
                                        {
                                            echo(" * ");
                                        }
                                        echo('<br>');
                                    }
                                break;
                            }
                            echo('</div>');
                        }
                    }
                }
                PrintStart();
            ?>
    </form>
    <form action="Index.html">
        <button type="submit" id="Back_btn">Back to home page</button>
    </form>
    </div>
</body>
</html>