<?php include('server.php'); ?>
<!doctype html>
<html>
    <head>
       
        <title>About US Page</title>
    </head>
    <style>
        .box{ margin: auto;
            width: 800px;
            height: auto;
            border: solid;
        }
        header{
            margin-left: 10px;
            margin-top: 10px;
            margin-right: 10px;
            border: solid 2px;
            height: 60px;
            background-color:#8c7373;
        }
        nav{
            margin-left: 10px;
            margin-top: 10px;
            margin-right: 10px;
            border: solid 2px;
            height: 60px;
            background-color: #9F7D9B;
        }
        nav ul {
            margin: 0;
            padding: 0;
        }
        nav ul li {
            display: inline-block;
        }
         a{
        text-decoration: none;
             display: block;
             height: 40px;
             width: 150px;
             padding-top: 20px;
             text-align: center;
             color: black;
        }
        a:hover{
            text-decoration: line-through;
            background-color: #af9d9d;
            color: #d77575;  
        } 
         
        article{
            width: 775px;
            border: solid 2px;
            height: 450px;
            margin-left: 10px;
            margin-top: 10px;
            margin-right: 10px;
            margin-bottom: 10px;
          background-color: #B0BEC5;
        }
        footer{
            clear: both;
            border: solid 2px;
            height: auto;
            margin-left: 10px;
            margin-top: 10px;
            margin-right: 10px;
            margin-bottom: 10px;
          background-color: #8c7373;
            display: block;
        }
        .copyright{
            color: white;
            font-family: fantasy;
            text-align: center;
            margin-top: 10px;
        }
        h2{
            text-align: center;
            color: white;
            font-family: 'Brush Script MT', cursive;
            font-size:20px;
        }
        .firstp{
            text-align: center;
            font-family: fantasy;
            font-size: 30px;
            color: aliceblue;
            margin-top: 100px;
        }
        button{
            border: solid 2px;
            border-color: white;
            width: 100px;
            height: 50px;
            margin-left: 50px;
            background-color: transparent;
            color: white;
            font-family: sans-serif;
            font-size: 20px;
        }
        iframe{
            margin-top: 10px;
            margin-left: 80px;
        }
        section{
            margin-top: 20px;
            margin-left: 20px;
            font-family: cursive;
        font-size: 15px;
            color: antiquewhite;
        }
        .contact{
            width: 100px;
            margin: auto;
            color: white;
            font-family: cursive;
        }
        .word{
            font-size:50px;
            font-family:seif;
            text-align:center;
            color:black;
        }
        .im1 img{
            margin-top:3px;
            margin-left:5px;
            width:50%;;
            height:50%;
            float:left;
        }
        .im2 img{
            margin-top:3px;
            margin-right:5px;
            width:47%;;
            height:218px;
            float:right;
        }
        .im3 img{
            margin-top:2px;
            margin-left:25%;
            width:50%;
            height:165px;

        }
    </style>
    <body>
    <div class="box">
      <header> 
        <h2>Welcome to DANCE centre</h2> 
        </header>  
        <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Offers</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="home.php?logout='1'">Log Out</a></li> 
            </ul>
        </nav>
        <article>
        <div class="word">
        Gallery
        </div>
            <div class="im1" >
                <img src="img/14333054_1764546410469167_8910254624162755356_n.jpg">
            </div>
            <div class="im2" >
                <img src="img/14317536_1764546420469166_6159685707066840692_n.jpg">
            </div>
            <div class="im3" >
                <img src="img/17358868_1620542424626980_3773283211868514870_o.jpg">
            </div>
            
        </article>   
       <footer>
           <div class="contact">
               <h3>Contact Us</h3>
               <p>01150515233</p>
           </div>
      <div class="copyright">
        &copy; Copyright.2020 <strong>DANCE centre</strong>. All Rights Reserved
      </div>
        </footer> 
    </div>
    </body>
</html>
