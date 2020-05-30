<?php
// koneksi database dengan file confing php
include_once("config.php");

// penampung data
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>    
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="content">
        <header>
            <h2 class="judul">OPTIONAL PROJECT</h2>
            <h3 class="deskripsi">Halaman Web Dinamis Input Data Viewers</h3>
        </header>
    </div>
    <div class="badan">
        <a href="add.php">Add New User</a><br/><br/>
        <div class="tabel">    
        <table width='80%' border=1>
            <tr>
                <th>Name</th> <th>Mobile</th> <th>Email</th> <th>Update</th>
            </tr>
        <?php  
            while($user_data = mysqli_fetch_array($result)) {         
                echo "<tr>";
                echo "<td>".$user_data['name']."</td>";
                echo "<td>".$user_data['mobile']."</td>";
                echo "<td>".$user_data['email']."</td>";    
                echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
            }
        ?>
        </table>
        </div>
        </div>
</body>
</html>