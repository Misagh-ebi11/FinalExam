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
        }
    </style>
</head>
<body>
    <form id="Form" method="post">
        <label for="FinalNum">Please enter your number</label>
        <input type="text" id="FinalNum" name="FinalNum">
        <select name="Status">
            <option value="Right">Right</option>
            <option value="Left">Left</option>
            <option value="Top">Top</option>
            <option value="Down">Down</option>
        </select>
        <input type="submit" value="Exec">
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
    </form>
</body>
</html>