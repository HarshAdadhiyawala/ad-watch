<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="index.css" rel="stylesheet" type="text/css"/>
    <title>Document</title>
    <script src="jquery-3.6.0.min.js" type="text/javascript"></script>
    <script>
        $(function(){
            $("#search").focusin(function(){
                $("#search").css({"background-color":"rgb(252, 197, 37)"});
            })
        }); 
    </script>
    <style>
    </style>
</head>
<body class="bg">
    <form>
        <div class="grid-container">
            <div class="menu">
                <img src="search.svg" width="50px" height="50px" class="menu_bar"/>
                <a href="#">
                <div class="row menu_bar mt-5">
                    <div  class="col-12">
                        <img src="free-movies-icon-21.jpg" width="100px" height="100px"/>
                    </div>
                    <div  class="col-12">
                        <span>Movies</span>
                    </div>
                </div>
                </a>
                <a href="#">
                <div class="row menu_bar mt-5">
                    <div  class="col-12">
                        <img src="series.png" width="100px" height="100px"/>
                    </div>
                    <div  class="col-12">
                        <span>Series</span>
                    </div>
                </div>
                </a>
                <a href="#">
                <div class="row menu_bar mt-5">
                    <div  class="col-12">
                        <img src="tv.svg" width="100px" height="100px"/>
                    </div>
                    <div  class="col-12">
                        <span>TV Serial</span>
                    </div>
                </div>
                </a>
            </div>
            <div class="head">
                <div class="logo">
                    AD Watch
                </div>
                <div class="search">
                    <input type="text" placeholder="Search....." class="form-control searchbar" name="search" id="search"/>
                    <img src="search.svg" class="s"/>
                </div>
            </div>
            <div class="content">
                <table align="center">
                    <tr>
                        <td>
                            <div class="movie">
                                <img src="vikram.jpg" width="250px" height="350px"/>
                                <span>Vikram(2022)</span>
                            </div>
                        </td>
                        <td>
                            <div class="movie">
                                <img src="moneyHeist.jpg" width="250px" height="350px"/>
                                <span>Money Heist</span>
                            </div>
                        </td>
                        <td>
                            <div class="movie">
                                <img src="bhoolbhulaiyaa.jpeg" width="250px" height="350px"/>
                                <span>Bhool Bhulaiyaa 2</span>
                            </div>
                        </td>
                        <td>
                            <div class="movie">
                                <img src="joker.jpg" width="250px" height="350px"/>
                                <span>Joker</span>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="fotter">
                <table align="center" >
                    <tr>
                        <td class="heading">
                            <span>Movies</span><br>
                        </td>
                        <td class="heading">
                            <span>Series</span><br>
                        </td>
                        <td class="heading">
                            <span>TV Serial</span><br>
                        </td>
                    </tr>
                    <tr>
                        <td class="foot"> 
                            <span>Hollywood</span><br>
                            <span>Bollywood</span><br>
                            <span>Tollywood</span><br>
                            <span>Anime</span><br>
                        </td>
                        <td class="foot"> 
                            <span>Hollywood</span><br>
                            <span>Bollywood</span><br>
                            <span>Tollywood</span><br>
                            <span>Anime</span><br>
                        </td>
                        <td class="foot"> 
                            <span>Gujarati</span><br>
                            <span>Hindi</span><br>
                            <span>Marathi</span><br>
                            <span>Live Match</span><br>
                        </td>
                    </tr>
                    
                </table>
                <span id="copy">&copy;Copy Right reserved by Harsh Ad</span>
            </div>
        </div>
    </form>
</body>
</html>