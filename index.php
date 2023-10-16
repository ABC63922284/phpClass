<?php

    include 'book.php';
    include 'customer.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="hw child">
        <form action="<?php $_SERVER['PHP_SELF']?>" method="GET">
        <div class="container vertical-center">
            <h1 class="center color">Book Class</h1>
            <hr>
            <label for="psw"><b>ISBN</b></label>
            <input type="text" placeholder="Enter ISBN Number" name="isbn" id="psw" required>
            <label for="email"><b>Title</b></label>
            <input type="text" placeholder="Enter Title" name="title" id="email" required>
            <label for="psw"><b>Author</b></label>
            <input type="text" placeholder="Enter Author Name" name="author" id="psw" required>
            <label for="psw"><b>Available</b></label>
            <input type="text" placeholder="Enter Available Number" name="available" id="psw" required>
            <hr>

            <button type="submit" class="registerbtn center" name="save_info">Create Book</button>
        </div>
        </form>
    </div>
    <div class="hw"></div>
    <div class="hw"></div>
    <h1 class="center color" style="padding-bottom:15px;">All Created Books Information Here!</h1>
    <div class="h">
        <table>
        <tr>
            <th>ISBN</th>
            <th>Title</th>
            <th>Author</th>
            <th>Available</th>
        </tr>
        <?php
        if(isset($_GET['save_info'])){
            $book = new Book ($_GET['isbn'],$_GET['title'],$_GET['author'],$_GET['available']);
            echo "<tr>
                    <td>" . $book->isbn . "</td>
                    <td>" . $book->title . "</td>
                    <td>" . $book->author . "</td>
                    <td>" .$book->available."</td>
                    
                </tr>";
            
        }
            ?>
        </table>
    </div>
    <!-- <div class="hw"></div>
    <div class="hw"></div>
    <div class="hw"></div>

    <div class="hw child">
        <form action="<?php $_SERVER['PHP_SELF']?>" method="GET">
        <div class="container vertical-center">
            <h1 class="center color">Customer Class</h1>
            <hr>
            <label for="psw"><b>ID</b></label>
            <input type="text" placeholder="Enter ID" name="id" id="psw" required>
            <label for="email"><b>firstName</b></label>
            <input type="text" placeholder="Enter firstName" name="fName" id="email" required>
            <label for="psw"><b>lastName</b></label>
            <input type="text" placeholder="Enter lastName" name="lName" id="psw" required>
            <label for="psw"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="psw" required>
            <hr>

            <button type="submit" class="registerbtn center" name="save_info">Create Customer</button>
        </div>
        </form>
    </div>
    <div class="hw"></div>
    <div class="hw"></div>
    <h1 class="center color" style="padding-bottom:15px;">All Created Customer Information Here!</h1>
    <div class="h">
        <table>
        <tr>
            <th>ID</th>
            <th>firstName</th>
            <th>lastName</th>
            <th>Email</th>
        </tr>
        <?php
        if(isset($_GET['crate_info'])){
            $customer = new Customer($_GET['id'],$_GET['fName'],$_GET['lName'],$_GET['email']);
            echo "<tr>
                    <td>" . $customer->id . "</td>
                    <td>" . $customer->fName . "</td>
                    <td>" . $customer->lName. "</td>
                    <td>" . $customer->email . "</td>
                    
                </tr>";
            
        }
            ?>
        </table>
    </div> -->

</body>
</html>
