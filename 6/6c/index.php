<?php 
$host="localhost";
$user="PDkWnhqmXL";
$password="ciTcz3hNgJ";
$db = "PDkWnhqmXL";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Arkademy 6C</title>
</head>

<body>
  <header>
    <div class="logo">
      <img src="logo.png" alt="logo Arkademy">
    </div>
    <div class="search">
      <input type="text" placeholder="Search..." />
    </div>
    <div class="add">
      <button id="add_button">ADD</button>
    </div>
  </header>
  <main>
    <div>
    <?php   
      $mysqli = new mysqli('localhost','root', '', 'arkademy') or die(mysqli_error($mysqli));
      $result = $mysqli->query("SELECT product.id as id, cashier.name as cashier, product.name as product, category.name as category, price from category, cashier, product where category.id = product.id_category and cashier.id = product.id_cashier") or die($mysqli->error);
      
    ?>
      <table>
      <thead>
          <tr>
            <th>No.</th>
            <th>Cashier</th>
            <th>Product</th>
            <th>Category</th>
            <th>Price</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php 
          while($row = $result->fetch_assoc()):?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['cashier']; ?></td>
            <td><?php echo $row['product']; ?></td>
            <td><?php echo $row['category']; ?></td>
            <td>Rp. <?php echo $row['price']; ?></td>
            <td>
              <a onclick="editItem()" href="index.php?edit=<?php echo $row['id']; ?>">edit</a>
              <a onclick="removeItem()" href="process.php?delete=<?php echo $row['id']; ?>">remove</a">
            </td>
          </tr>
          
          <?php
          endwhile; ?>
        </tbody>
      </table>
    </div>
  </main>
  <div class="container" id="container_add">
    <div>
      <div class="add_header">
        <span>ADD</span>
        <div class="close" id="close_add">
          <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
            <path d="M0 0h24v24H0V0z" fill="none" />
            <path
              d="M18.3 5.71c-.39-.39-1.02-.39-1.41 0L12 10.59 7.11 5.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L10.59 12 5.7 16.89c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0L12 13.41l4.89 4.89c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41L13.41 12l4.89-4.89c.38-.38.38-1.02 0-1.4z" />
          </svg>
        </div>
      </div>
      <div class="input_container">
        <form action="process.php" method="post">
            <select name="cashier" id="cashier">
              <option value="1">Pevita Pearce</option>
              <option value="2">Raisa Andriana</option>
              <option value="3">Satriya Wicaksana</option>
            </select>
            <select name="category" id="category">
              <option value="1">Food</option>
              <option value="2">Drink</option>
            </select>
            <input type="text" placeholder="Ice Tea" name="name" />
            <input type="text" placeholder="Rp. 10.000" name="price"/>
          <div class="data_button">
            <button type="submit" name="save">ADD</button>
          </div>
        </form>
        </div>
    </div>
  </div>
  <div class="container" id="container_delete">
    <div class="delete_data ">
      <div class="close" id="close_delete">
        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
          <path d="M0 0h24v24H0V0z" fill="none" />
          <path
            d="M18.3 5.71c-.39-.39-1.02-.39-1.41 0L12 10.59 7.11 5.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L10.59 12 5.7 16.89c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0L12 13.41l4.89 4.89c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41L13.41 12l4.89-4.89c.38-.38.38-1.02 0-1.4z" />
        </svg>
      </div>
      <p>Data Raisa Andriana ID #1</p>
      <div class="success_icon">
        <svg xmlns="http://www.w3.org/2000/svg" height="100" viewBox="0 0 24 24" width="100">
          <path d="M0 0h24v24H0V0z" fill="none" />
          <path
            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm3.88-11.71L10 14.17l-1.88-1.88c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l2.59 2.59c.39.39 1.02.39 1.41 0L17.3 9.7c.39-.39.39-1.02 0-1.41-.39-.39-1.03-.39-1.42 0z" />
        </svg>
      </div>
      <p>Berhasil Dihapus</p>
    </div>
  </div>
  <div class="container" id="container_edit">
    <div class="edit_data">
      <div class="add_header">
        <span>EDIT</span>
        <div class="close" id="close_edit">
          <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
            <path d="M0 0h24v24H0V0z" fill="none" />
            <path
              d="M18.3 5.71c-.39-.39-1.02-.39-1.41 0L12 10.59 7.11 5.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L10.59 12 5.7 16.89c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0L12 13.41l4.89 4.89c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41L13.41 12l4.89-4.89c.38-.38.38-1.02 0-1.4z" />
          </svg>
        </div>
      </div>
      <div class="input_container">
        <select name="name" id="name">
          <option value="Raisa Andriana">Raisa Andriana</option>
          <option value="Pevita Pearce">Pevita Pearce</option>
        </select>
        <select name="type" id="type">
          <option value="Food">Food</option>
          <option value="Drink">Drink</option>
        </select>
        <input type="text" placeholder="Ice Tea" value="<?php echo $name?>"/>
        <input type="text" placeholder="Rp. 10.000" value="Rp. <?php echo $price?>"/>
      </div>
      <div class="data_button">
        <button>Edit</button>
      </div>
    </div>
  </div>

  <script src="script.js"></script>
</body>

</html>