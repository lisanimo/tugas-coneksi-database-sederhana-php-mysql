<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST CONNECT DATABASE</title>

    <style>
        div {
            margin: 20px;
            padding-left: 450px;
        }
    </style>
</head>
<body>

     <?php 
   
        include "db.php";
        $query = "SELECT * FROM data_produk";
        $result = $db->query($query);

    ?>
     <div class="container">
     <table>
        <thead>
        <?Php $i = 1;  ?>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga Barang</th>
            <th scope="col">Stock Barang</th>
            </tr>
        </thead>
        <tbody>
            <?php  while ($data = mysqli_fetch_assoc($result) ) { ?>
            <tr>
            <th scope="row"><?= $i; ?></th>
            <td><?= $data["name"]; ?></td>
            <td><?= $data["price"]; ?></td>
            <td><?= $data["stock"]; ?></td>
            </tr>
        <?php $i++; ?>
        <?php } ?>
            
        </tbody>
        </table>
     </div>
        
    
</body>
</html>