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
        }
        #PerfectNum{
            background-color: transparent;
            width: 80%;
            height: max-content;
            margin: 15px auto 0 auto;
            padding: 20px;
            border: 2px solid black;
            border-radius: 20px;
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
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            margin: 0 1px 0 8px;
        }
        .btn:hover{
            box-shadow: rgba(0, 0, 0, 0.25) 0px 2px 5px;
            background-color: rgb(120, 247, 177);
        }
        #Result{
            border: 2px solid black;
            border-radius: 10px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            padding: 10px;
            width: max-content;
            margin: 15px auto 0 auto;
            animation: MoveResult 5s infinite;
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
    <script type="text/javascript">
        function ShowNum(){
            var FinalNumber = Number(document.getElementById("FinalNum").value);
            var PerfectNumbers =[]; 
            var TableBody = document.querySelector("#Result tbody");
            TableBody.innerHTML = "";
                for(var i = 1; i <= FinalNumber; i++)
                {
                    var Sum = 0;
                    for(var j = 1; j < i; j++)
                    {
                        if(i % j == 0)
                        {
                            Sum += j;
                        }
                    }
                    if(Sum == i){
                        PerfectNumbers.push(i);
                    }
                }
                var row = TableBody.insertRow();
                PerfectNumbers.forEach((num) => {
                    var cell = row.insertCell();
                    cell.innerHTML = num;
                }); 
            }
    </script>
<body>
    <form id="PerfectNum">
        <label for="FinalNum">Enter your final number</label>
        <input type="text" id="FinalNum" class="Input">
        <input type="button" class="btn" value="Exec" onclick="ShowNum()">
        <table id="Result">
            <tbody></tbody>
        </table>
    </form>
</body>
</html>