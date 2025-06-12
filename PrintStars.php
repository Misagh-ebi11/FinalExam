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
        <div id="Output">
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
                            switch ($Status) {
                                case 'Right':

                                break;
                                
                                case 'Left':

                                break;

                                case 'Top':

                                break;

                                case 'Down':

                                break;
                            }
                        }
                    }
                }
                PrintStart();
            ?>
        </div>
    </div>
    </form>
</body>
</html>