<!Doctype html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <title>AnswerHub:The Wonder Search</title>
    <style>
        *{margin:0; padding: 16;}
        .nav {
            max-width: 80rem;
            display: flex;
            float: right;
            pointer-events: none;
            justify-content: left;
        }
        .nav:hover {
            pointer-events: auto;
        }
        .sm-header {
            font-size: 2.6rem;
            text-transform: uppercase;
            cursor: pointer;
            pointer-events: auto;
        }
        .line {
            width: 15rem;
            height: 3px;
            background-color: #fff;
            margin-left: 2rem;
            margin-right: auto;
            transform: scaleX(0.2);
            transform-origin: left;
            transition: transform 0.5s;
            
        }
        .nav:hover .line {
            transform: scaleX(1);
        }
       
        .nav-list {
            display: flex;
            list-style: none;
        }
        .nav-item {
            margin-inline: 2.0rem;
            opacity: 0;
            transition: transform 0.5s, opacity 0.5s;
            width: 30px;
            margin: 500; padding: 50;
            display: flex;
        }
        .nav-item:nth-child(odd) {
            transform: translateY(5rem);
        }
        .nav-item:nth-child(even) {
            transform: translateY(-5rem);
        }
        .nav:hover .nav-item {
            opacity: 1;
            transform: translateY(0);
        }
        .nav-link {
            font-size: 3.6rem;
            
        }
        .nav-link i {
            transition: color 0.5s;
        }
        .nav-link:hover i.fa-facebook-f {
            color: #3b5998;
        }
        .nav-link:hover i.fa-twitter {
            color: #1da1f2;
        }
        .nav-link:hover i.fa-google-plus-g {
            color: rgba(228, 196, 101, 0.833);
        }
        .nav-link:hover i.fa-linkedin-in {
            color: rgb(0, 191, 255);
        }
        .nav-link:hover i.fa-pinterest-p {
            color: red;
        }
        .nav-link:hover i.fa-youtube {
            color: red;
        }
        .nav-link:hover i.fa-instagram {
            color: rgb(225, 0, 255);
        }
          .slider:before {
            position: absolute;
            content: "";
            height: 25px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
  
}
input:checked + .slider {
  background-color: white;
}
input:checked + .slider::before {
  background-color: black;
}
input:focus + .slider {
  box-shadow: 0 0 1px blue;
}
input:checked + .slider:before {
  transform: translateX(26px);
}
.slider.round {
  border-radius: 34px;
}
.slider.round:before {
  border-radius: 50px;
}
.toggle {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}
.dark-mode {
  background: grey;
  color: #fff;
}
.toggle input {
opacity: 1;
width: 0;
height: 0;
}
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: black;
  -webkit-transition: .4s;
  transition: .4s;
  
}
        ul{
            display: flex;
            gap: 2.5rem;
        }
        li{
            display: block;
            transition: .5s
        }
        ul:hover li{
            filter: (5px);
        }
        ul li: hover{
            filter: 0;
        }
        input
        {
            width: 500px;
            height: 35px;
            border-radius: 5px;
            border: 1px solid green;
        }
    #searchbtn
        {
            width: 100px;
            height: 35px;
            border-radius: 5px;
            border: 1px solid blue;
            color: blue;
            font-size:15px;
            background-color: white;
        }
        #searchbtn:hover
        {
            background-color: blue;
            color: white;
        }
        <style>
        .nav h2.sm-header {
    font-size: 70px;
  }

  .navbar {
    
    background-color: none;
    border-radius: 0px;
    float: right;
    margin-right:10px;
    padding: 30 100px;
  }
  .navbar li {
    float: right;
    list style: none;
    margin: 13px 20px;
  }
  .navbar li a {
    padding: 3px 3px;
    text-decoration: none;  
    color: black;
    float: bottom;
  }
  .navbar li a:hover {
    color: blue;
  }
</style>

</head>
<body>
    <header>
        <nav class="navbar">
            <ul>
                <li><a href="#"> Home</a></li>
                <li><a href="file:///C:/xampp/htdocs/website/Desc/About%20us.html">About Us</a> </li>
                <li><a href="#">Services </a></li>
                <li><a href="#">Contact us</a></li>
            </ul>
        </nav>
    </header>


<nav class="nav">
    <h2 class="sm-header">Follow us on <p</h2>
    <div class="line"></div>
   
    <ul class="nav-list">
        <li class="nav-item">
            <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link"><i class="fab fa-linkedin-in"></i></a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link"><i class="fab fa-pinterest-p"></i></a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link"><i class="fab fa-youtube"></i></a>
        </li>
        <li class="nav-item">
            <a href="https://www.instagram.com/shoeb.9x/" class="nav-link"><i class="fab fa-instagram"></i></a>
        </li>
    </ul>
</nav>

    
<label class="toggle">
            <input type="checkbox" onclick="toggleDarkLight()" >
             <span class="slider round"></span>
           </label>
           <script>
             function toggleDarkLight() {
               var element = document.body;
               element.classList.toggle("dark-mode");
             }
           </script>
<center> <img src="Website logo.jpg" width="30%"></center>

<form action= "result.php" method="GET">
<br>
<center><input type="text" name="search"></center>
<br><br>
<center><input type="submit" name="searchbtn" id="searchbtn" value="search"></center>

</body>
</html>
