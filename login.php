<?php
require 'connect.php';

if(isset($_POST['register'])){
    $fullname = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $studentid = $_POST['matno'];
    $department = $_POST['dept'];
    $dave= 8;
    
    
    $query = "INSERT INTO `students` (`name`, `matno`, `dept`,`email`, `password` ) VALUES('$fullname', '$studentid', '$department', '$email', '$password' ) ";
    mysqli_query($conn, $query);
    echo 
    "<script> alert('registration successful'); </script>";
    header("Location: login.php");
}


if(isset($_POST['submit'])){
    $firstname = addslashes($_POST['matno']);
    $password = addslashes($_POST['password']);
    $result = mysqli_query($conn, "SELECT * FROM students WHERE matno= '$firstname' ");
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0){
        if($password == 'hiki8888'){
            $_SESSION['login'] = 'true';
            $_SESSION['id'] = 'admin';

            header("Location: dash.php");
        }elseif($password == $row['password']){
            $_SESSION['login'] = 'true';
            $_SESSION['id'] = $row['id'];
            $_SESSION['matno'] = $row['matno'];
            header("Location: index.php");
        }
        else{
            echo
        "<script> alert('wrong password'); </script>";
        }
    }elseif($firstname== 'admin' && $password == 'hiki8888'){
        header("Location: dash.php");
    }
    else{
        echo
        "<script> alert('not registered'); </script>";
    }
    
}



?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
    <style>
        .head10{
            background-image: url(images/images/book2.jepg);
        }
    </style>
</head>
<body>
    <header id="header" style="background-image:  linear-gradient(rgba(80, 75, 75, 0.55),rgb(26, 27, 29,0.99)),url(images/books1.webp);">
        
        <div class="head10" >
            <div class="cont1" id="cont1">
                <h1 id="h1">THE ILARO <span class="span">BOOKSTORE</span></h1>
                <h2 id="h2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.<br> Voluptates corporis corrupti magni quisquam voluptatum <br>consequatur incidunt optio animi ratione architecto!</h2>            
                <div class="linked">
                    <a href="#sec23">Login</a>
                    <a href="#sec23">Register</a>
                </div>
            </div>
        </div>
    </header>
    <div class="section2" id="sec20">
        <div class="section20">
            <h1>All the books you need</h1>
            <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit culpa enim sunt porro asperiores, quas perspiciatis dolorem illum possimus temporibus?</h2>
        </div>
        <div class="section21">
            <div class="img21">
                <img src="images/book2.jpeg" alt="">
            </div>
        </div>
    </div>
    <div class="section2" id="sec21">
        <div class="section21">
            <div class="img21">
                <img src="images/books1.webp" alt="">
            </div>
        </div>
        <div class="section20">
            <h1>Find your perfect interest</h1>
            <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit culpa enim sunt porro asperiores, quas perspiciatis dolorem illum possimus temporibus?</h2>
        </div>
    </div>
    <div class="section2" id="sec22">
        <div class="section20">
            <h1>All the books you need</h1>
            <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit culpa enim sunt porro asperiores, quas perspiciatis dolorem illum possimus temporibus?</h2>
        </div>
        <div class="section21">
            <div class="img21">
                <img src="images/book2.jpeg" alt="">
            </div>
        </div>
    </div>
    <div class="section2" id="sec23">
        <div class="section21" id="reg">
            <h1>Registration</h1>
            <form method="POST" action="login.php" id="div1" class= "form1 m-2" autocomplete="off">
                    <div class="alert alert-success">
                    </div>
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" class="form-control">
                    <span class="text-danger">
                    </span>
                </div>
                <div class="form-group">
                    <label for="matric">Matric Number</label>
                    <input type="text" name="matno" class="form-control">
                    <span class="text-danger">
                    </span>
                </div>
                <div class="form-group">
                    <label for="dept">Department</label>
                    <input type="text" name="dept" class="form-control">
                    <span class="text-danger">
                    </span>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control">
                    <span class="text-danger">
                    </span>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                    <span class="text-danger">
                    </span>
                </div>

                <br>
                <div class="form-group">
                    <input type="submit" class="submit" name="register" value="Register">                    
                </div>
            </form>
        </div>
        <div class="section10" id="reg"> 
            <h1>Login Here</h1>           
            <form method="POST" action="login.php" id="div1" class= "form1 m-2" autocomplete="off">
                @csrf
                <label for="">Matric No</label>
                <input type="text" name="matno">
                <label for="">Password</label>
                <input type="text" name="password">
                <input type="submit" class="submit" value="submit" name="submit">
            </form>           
        </div>
    </div>
    
    <div id="section_8">
        <div class="suscribe">
            <div class="cont">
                <h1>ILARO <span class="span">BOOKSTORE </span></h1>
                <h2>Suscribe to get Free 50% Discount</h2>
            </div>
            <div class="form">
                <input class="input1" type="text" placeholder="Enter Your Email">
                <input class="input2" type="submit" placeholder="submit">
            </div>
        </div>
        <div class="links">
            <div class="row">
                <img src="images/logo(1).png" alt="">
                <div id="section_7b">
                    <div class="service6">
                        <img src="images/icon-pay-01.png" alt="">
                    </div>
                    <div class="service6">
                        <img src="images/icon-pay-03.png" alt="">
                    </div>
                    <div class="service6">
                        <img src="images/icon-pay-04.png" alt="">
                    </div>
                    <div class="service6">
                        <img src="images/icon-pay-05.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <script src="/css/script2.js"></script>
</body>
</html> 



     
   
 
         <div class="slide">
 
             
             <div class="item" style="background-image: url(images/books1.webp);">
                 <div class="content">
                     <div class="name">Switzerland</div>
                     <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                     <button>See More</button>
                 </div>
             </div>
             <div class="item" style="background-image: url(images/book2.jpeg);">
                 <div class="content">
                     <div class="name">Finland</div>
                     <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                     <button>See More</button>
                 </div>
             </div>
             <div class="item" style="background-image: url(images/books1.webp);">
                 <div class="content">
                     <div class="name">Iceland</div>
                     <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                     <button>See More</button>
                 </div>
             </div>
             <div class="item" style="background-image: url(images/book2.jpeg);">
                 <div class="content">
                     <div class="name">Australia</div>
                     <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                     <button>See More</button>
                 </div>
             </div>
             <div class="item" style="background-image: url(images/books1.webp);">
                 <div class="content">
                     <div class="name">Netherland</div>
                     <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                     <button>See More</button>
       