<?php include('server.php'); ?>
<!doctype html>
<html>
    <head>
       
        <title>Home Page</title>
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
         aside{
            margin-left: 10px;
            margin-top: 10px;
            border: solid 2px;
            width: 200px;
            height: 450px;
            background-color: #BCAAA4;
            font-size:20px;
            text-align:center;
            font-family:cursive;
            float: left;
             background-image: url("img/Fitness-Flour-Power-JMW-0130.jpg");
             background-position: center;
             background-size: cover;
        }
        article{
            width: 559px;
            border: solid 2px;
            height: 450px;
            float: right;
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
            font-family: 'Brush Script MT';
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
        .welcome{
            color:grey;
            margin-top:10px;
        }
    </style>
    <body>
        
    <div class="box">
      <header> 
        <h2>Welcome to DANCE centre</h2> 
        </header>  
        <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Offers</a></li>
            <li><a href="second.php">About Us</a></li>
            <li><a href="home.php?logout='1'">Log Out</a></li> 
            </ul>
        </nav>
        <aside>
            <div class="welcome">
            <?php
             if(isset($_SESSION['username'])){
                echo $_SESSION['username'];
            } 
              if(isset($_SESSION['success'])){
              echo $_SESSION['success'];
            }
            ?>
            </div>
        </aside>
        <article>
            <iframe width="400" height="315"  src="https://www.youtube.com/embed/0dZCjFDv7B4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <section>
            The Dance Centre faculty is focused on nurturing dancers of all levels and ability. We hope that our students learn not just skills and steps, but life lessons and tools such as perseverance, teamwork, and self esteem.
            </section>
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
