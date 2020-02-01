<?php 
$host="localhost";
$user="PDkWnhqmXL";
$password="ciTcz3hNgJ";
$db = "PDkWnhqmXL";

?>

<!DOCTYPE html>
<html lang="en">
<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
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
      <table>
        <tr>
          <th>No.</th>
          <th>Cashier</th>
          <th>Product</th>
          <th>Category</th>
          <th>Price</th>
          <th>Action</th>
        </tr>
        <tr>
          <td>1</td>
          <td>Pevita Pearce</td>
          <td>Latte</td>
          <td>Drink</td>
          <td>Rp. 10.000</td>
          <td>
            <button onclick="editItem()">edit</button onclick="editItem()">
            <button onclick="removeItem()">remove</button onclick="removeItem()">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Raisa Andriana</td>
          <td>Cake</td>
          <td>Food</td>
          <td>Rp. 15.000</td>
          <td>
            <button onclick="editItem()">edit</button onclick="editItem()">
            <button onclick="removeItem()">remove</button onclick="removeItem()">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Raisa Andriana</td>
          <td>Fried Rice</td>
          <td>Food</td>
          <td>Rp. 30.000</td>
          <td>
            <button onclick="editItem()">edit</button onclick="editItem()">
            <button onclick="removeItem()">remove</button onclick="removeItem()">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Pevita Pearce</td>
          <td>Gudeg</td>
          <td>Food</td>
          <td>Rp. 35.000</td>
          <td>
            <button onclick="editItem()">edit</button>
            <button onclick="removeItem()">remove</button onclick="removeItem()">
          </td>
        </tr>
        <tr>
          <td>5</td>
          <td>Joko Purwadhi</td>
          <td>Ice Tea</td>
          <td>Drink</td>
          <td>Rp. 55.000</td>
          <td>
            <button onclick="editItem()">edit</button>
            <button onclick="removeItem()">remove</button onclick="removeItem()">
          </td>
        </tr>
        <tr>
          <td>6</td>
          <td>Satriya Wicaksana</td>
          <td>Pecel Lele</td>
          <td>Food</td>
          <td>Rp. 15.000</td>
          <td>
            <button onclick="editItem()">edit</button>
            <button onclick="removeItem()">remove</button>
          </td>
        </tr>
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
        <form action="" method="post">
            <select name="name" id="name">
              <option value="Raisa Andriana">Raisa Andriana</option>
              <option value="Pevita Pearce">Pevita Pearce</option>
            </select>
            <select name="type" id="type">
              <option value="Food">Food</option>
              <option value="Drink">Drink</option>
            </select>
            <input type="text" placeholder="Ice Tea" />
            <input type="text" placeholder="Rp. 10.000" />
          <div class="data_button">
            <button>ADD</button>
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
        <input type="text" placeholder="Ice Tea" />
        <input type="text" placeholder="Rp. 10.000" />
      </div>
      <div class="data_button">
        <button>Edit</button>
      </div>
    </div>
  </div>

  <script src="script.js"></script>
</body>

</html>