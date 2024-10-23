<?php
require 'connect.php';


if(isset($_POST['search'])) {
    $search = $_POST['search'];
    $query1 = "SELECT * FROM books  WHERE CONCAT (`title`, `author`, `category`) LIKE '%".$search."%' ";
    
    $SearchResult = FilterTable($query1);
}
else{
    $query1 = "SELECT * FROM books ";
    $SearchResult = FilterTable1($query1); 
}

if(isset($_POST['search'])) {
    $search = $_POST['search'];
    $query = "SELECT * FROM books  WHERE CONCAT (`firstname`, `lastname`, `class`, `course`, `studentid`, `parent-id`) LIKE '%".$search."%' ";
    
    $SearchResult = FilterTable($query);
}
else{
    $query = "SELECT * FROM carts ORDER BY id DESC LIMIT 10";
    $SearchResult1 = FilterTable($query); 
}


function FilterTable1($query1){
    $connect = mysqli_connect('localhost', 'root', '', 'book');
    $FilterResult1 = mysqli_query($connect, $query1);
    return $FilterResult1;
}

function FilterTable($query){
    $connect = mysqli_connect('localhost', 'root', '', 'book');
    $FilterResult = mysqli_query($connect, $query);
    return $FilterResult;
}



if(isset($_POST['add'])){
    $file = $request->file(key:"file");
        $destination = "uploads";

        if($file->move($destination, $file->getClientOriginalName())){
            echo 'success';
        }else{
            echo 'failed';
        }

    
    $title = $_POST['title'];
    $author = $_POST['author'];
    $price = $_POST['price'];
    $page = $_POST['page'];
    $format = $_POST['format'];
    $isbn = $_POST['isbn'];
    $language = $_POST['language'];
    $dimension = $_POST['dimension'];
    $category = $_POST['category'];
    $image = $file->getClientOriginalName();
    $quantity = $_POST['quantity'];
    $query = "INSERT INTO `books` (`title`, `author`,`price`, `page`, `format`,`isbn`, `language`, `dimension`,`category`, `image`, `quantity` ) VALUES('$title', '$author', '$price', '$page', '$format', '$isbn', '$language', '$dimension', '$category', '$image', '$quantity') ";
    mysqli_query($conn, $query);
    echo 
    "<script> alert('registration successful'); </script>";
    header("Location: show.php");
}



?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/main2.css">
    <link rel="stylesheet" type="text/css" href="css/dash.css">
</head>
<body>
    <div id="head">
        <nav>
            <h1>ILARO <span class="span100">BOOKSTORE</span></h1>
            <h1>ADMIN DASHBOARD</h1>
            <div id="show">
                <button id="user">Orders</button>
                <button><a href="/logout">Logout</a></button>
            </div>
            
        </nav>
    </div>

    <div class="data">
        <div class="data1">
            <h1>1200+</h1>
            <h2>Books Uploaded</h2>
        </div>
        <div class="data1">
            <h1>2300+</h1>
            <h2>Copies Sold</h2>
        </div>
        <div class="data1">
            <h1>50000+</h1>
            <h2>Revenue Generated</h2>
        </div>
    </div>

    <div class="allbook">
        <div class="book1">
            <div class="input10">
                <form action="dash.php" method="post">
                <input type="search" class="input100" placeholder="search books" name="search">
                <input type="submit" class="input101" value="submit" name='search'>
                </form>
            </div>
            <?php while($row = mysqli_fetch_array($SearchResult)):?>
            <div class="book10">
                <img src="uploads/<?php echo $row['image'];?>" alt="">
                <div class="book100">
                    <h1><?php echo $row['title'];?></h1>
                    <h2><?php echo $row['author'];?></h2>
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, et dolore rem sequi est nulla?</h3>
                    <div class="icons">
                        <img src="images/interface.png" alt="">
                        <img src="images/delete.png" alt="">
                        <img src="images/edit.png" alt="">
                    </div>
                </div>                
            </div>
            <?php endwhile;?>
            <div class="btn1">
                <button>see all</button>
            </div>
        </div>

        <div class="book2">
            <h1 class="msg">Add a New Book</h1>
            <h1 class="msg2">Add a New Book <img src="/images/add.png" alt="" onclick="show()"></h1>
            <form method="post" action="dash.php" enctype="multipart/form-data" class="form100">
            <div class="book20">
                <div class="form10">
                    <div class="input11">
                        <label for="">Title</label><br>
                        <input type="text" name="title">
                    </div>
                    <div class="input11">
                        <label for="">Author</label><br>
                        <input type="text" name="author">
                    </div>
                    <div class="input11">
                        <label for="">Price</label><br>
                        <input type="number" name="price">
                    </div>
                    <div class="input11">
                        <label for="">Page</label><br>
                        <input type="text" name="page">
                    </div>
                    <div class="input11">
                        <label for="">Format</label><br>
                        <input type="text" name="format">
                    </div>
                    <div class="input11">
                        <label for="">ISBN</label><br>
                        <input type="text" name="isbn">
                    </div>
                </div>
                <div class="form10">
                    <div class="input11">
                        <label for="">Language</label><br>
                        <input type="text" name="language">
                    </div>
                    <div class="input11">
                        <label for="">Dimension</label><br>
                        <input type="text" name="dimension">
                    </div>
                    <div class="input11">
                        <label for="">Category</label><br>
                        <input type="text" name="category">
                    </div>
                    <div class="input11">
                        <label for="">File</label><br>
                        <input type="file" name="file">
                    </div>
                    <div class="input11">
                        <label for="">About</label><br>
                        <textarea name="about" id="" cols="40" rows="8"></textarea>
                    </div>
                </div>
            </div>
            <div class="submit1">
                <input type="submit" value="add" name='add' class="submit">
            </div>
            </form>
        </div>
    </div>


    <div id="section_2a">
        <div class="nav2">
            <h1>TRENDING THIS WEEK</h1>
            <ul>
                <b><li><a href="#section_2a" class="active">Politics</a></li></b>
                <b><li><a href="#section_2b">Science</a></li></b>
                <b><li><a href="#section_2c">Art</a></li></b>
                <b><li><a href="#">Management</a></li></b>
            </ul>
        </div>
    </div>

    <div class="orders">
        <div class="cart" id="cart" style="display:none;">
            <button>Pending</button> <button>Accepted</button>
            <table>
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Buyer</th>
                        <th>accept</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($row1 = mysqli_fetch_array($SearchResult1)):?>
                        <tr>
                            <td><img src="uploads/<?php echo $row1['image'];?>" alt="" width="50px" height="75px"></td>
                            <td class="span11"><?php echo $row1['title'];?> <br> <span class="span10"><?php echo $row1['author'];?> </span></td>
                            <td>$<?php echo $row1['price'];?> </td>
                            <td><?php echo $row1['quantity'];?> </td>
                            <td><a href="{{route('clearcart', $details->bookid)}}"><img src="images/delete.png" alt="" width="20px" height="20px"></a></td>
                        </tr>
                        <?php endwhile;?>
                    <tr>
                        
                    <?php $price = 0;?>
                        <?php
                            $query = "SELECT* FROM `carts` ";
                            $result1 = mysqli_query($conn, $query);
                            if(mysqli_num_rows($result1) > 0){
                                while($row1 = mysqli_fetch_array($result1)){
                                    ?>
                            <?php
                            $com = intval($row1['price']) * intval($row1['quantity']);
                            $price += $com;
                            ?>
                         <?php
                                }        
                            }
                        ?>
                        <td class="span12">Total $<?php echo $price;?></td>
                    </tr>
                </tbody>
            </table>
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


    <script src="css/jquery-3.7.1.js"></script>
    <script src="css/script.js"></script> 
</body>
</html>