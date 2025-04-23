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
        #Content{
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .Font , .Title{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .Title{
            padding: 10px;
        }
        .Button{
            width: 400px;
            height: 300px;
            background-color: rgb(120, 247, 177);
            margin-left: 0.1%;
            border: 1px solid black;
            border-radius: 50px;
            transition: all 0.3s ease;
        }
        #PerfectNum , #PrimeNum , #PrintStars{
            
            box-shadow: 5px 5px 5px black;
            margin-left: auto;
            margin-right: auto;
            padding: 20px;
            border: 1px solid black;
            border-radius: 50px;
            width: 70%;
            height: 550px;
        }
        .Inputs{
            text-align: center;
            border: none;
            border-radius: 25px;
            width: 150px;
        }
        #btnHome{
            width: 40px;
            height: 40px;
            border: none;
            border-radius: 100%;
            bottom: 20px;
            right: 20px;
            position: fixed;
            background-color: rgb(120, 247, 177);
            transition: all 0.3s ease;
        }
        .Button:hover{
            transform: scale(1.1);
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        }
        .btn
    </style>
</head>
<body>
    <div id="Header" class="Font">
        <h1>Published by <br> Misagh Ebrahimi <br> A project for final exam</h1>
    </div>
    <div id="Content">
        <div>
            <h2 class="Title">Perfect numbers</h2>
            <input type="button" class="Button" onclick="window.scrollTo({ top: document.getElementById('PerfectNum').offsetTop - 25, behavior: 'smooth' });">
        </div>
        <div>
            <h2 class="Title">Prime number</h2>
            <input type="button" class="Button" onclick="window.scrollTo({ top: document.getElementById('PrimeNum').offsetTop - 25, behavior: 'smooth'})">
        </div>
        <div>
            <h2 class="Title">Print stars</h2>
            <input type="button" class="Button" onclick="window.scrollTo({ top: document.getElementById('PrintStars').offsetTop - 25, behavior: 'smooth'})">
        </div>
    </div>
    <div id="PerfectNum" style="margin-top: 130px;">
        <form>
            <h3 class="Font">Recognition of perfect numbers</h3>
            <label for="FinalNum_Perfect" class="Font">Enter your final number: </label>
            <input type="text" id="FinalNum_Perfect" class="Inputs">
        </form>
    </div>
    <div id="PrimeNum" style="margin-top: 100px;">
        <form>
            <h3>Recognition of prime numbers</h3>
            <label for="FinalNum_Prime" class="Font">Enter your final number: </label>
            <input type="text" id="FinalNum_Prime" class="Inputs">
        </form>
    </div>
    <div id="PrintStars" style="margin: 100px auto 50px auto;">
        <form>
            <h3>Printing stars according to your wishes</h3>
            <label for="SelectPosition" class="Font">Choose your desired mode.</label>
            <select id="SelectPosition" class="Inputs">
                <option value="Right">Right</option>
                <option value="Left">Left</option>
                <option value="Top">Top</option>
                <option value="Down">Down</option>
            </select>
        </form>
    </div>
    <div id="Home">
        <input type="button" id="btnHome" onclick="window.scrollTo({ top: document.getElementById('Header') , behavior: 'smooth'})">
    </div>
</body>
</html>