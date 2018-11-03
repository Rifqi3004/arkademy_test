<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Tampil Produk</title>
</head>
<body>
<div class="container">
    <h3>Data Produk</h3>
    <table class="table">
        <thead>
            <tr>
                <td>ID Barang</td>
                <td>Nama Barang</td>
                <td>Kategori</td>
            </tr>
            <?php 
                $servername = "localhost";
                $username = "root";
                $password = "root";
                $dbname = "arkademy_rifqi";
                $conn = new mysqli($servername, $username, $password, $dbname);
               
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                
                $sql = "SELECT pd.id, pd.name, ct.name as 'category' from products pd, product_categories ct where pd.category_id = ct.id";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['category'] ?></td>
                    </tr>
                 <?php       
                    }
                } else {
                    echo "data kosong";
                }
               
            ?>
        </thead>
    </table>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>