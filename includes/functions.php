<?php 
// INCLUDES
  include "db.php";

// FUNCTIONS

  // CREATE
  function createRow() {
      global $connection;
      
      if(isset($_POST['submit'])) {
          $username = $_POST['username'];
          $password = $_POST['password'];
      
          $query  = "INSERT INTO users(username, password)";
          $query .= "VALUES ('$username', '$password')";
      
          $result = mysqli_query($connection, $query);
      
          if(!$result) {
              die("Query FAILED! " . mysqli_error());
          } else {
              echo "Record Created!";
          }
      }
  }

  // READ
  function readRows() {
      global $connection;
      
      $query  = "SELECT * FROM users";
  
      $result = mysqli_query($connection, $query);
      
      if(!$result) {
          die("Query FAILED! " . mysqli_error());
      }
      
      while( $row = mysqli_fetch_assoc($result) ) {
          echo "<pre>" . print_r($row) . "</pre>";
      }
  }

  // DISPLAY ROWS 
  function showAllData() {
      global $connection;
      
      $query  = "SELECT * FROM users";
      
      $result = mysqli_query($connection, $query);
      
      if(!$result) {
          die("Query FAILED! " . mysqli_error());
      } 
      
      while ( $row = mysqli_fetch_assoc($result) ) {     
          $id = $row['id']; 
          $username = $row['username'];
          echo "<option value='$id'>$username</option>";       
      }
  }

  // UPDATE
  function updateTable() {
      global $connection;
      
      if( isset( $_POST['submit'] ) ) {
          $username = $_POST['username'];
          $password = $_POST['password'];
          $id       = $_POST['id'];

          $query  = "UPDATE users ";
          $query .= "SET username = '$username', password = '$password' ";
          $query .= "WHERE id = $id ";

          $result = mysqli_query($connection, $query);

          if(!$result) {
              die("QUERY FAILED!" . mysqli_error($connection));
          } else {
              echo "Record Updated!";
          }
      }
  }

  // DELETE
  function deleteRows() {
      global $connection;
      
      if( isset( $_POST['submit'] ) ) {
          $username = $_POST['username'];
          $password = $_POST['password'];
          $id       = $_POST['id'];

          $query  = "DELETE FROM users ";
          $query .= "WHERE users.id = $id ";

          $result = mysqli_query($connection, $query);

          if(!$result) {
              die("QUERY FAILED!" . mysqli_error($connection));
          } else {
              echo "Record Deleted!";
          }
      }
  }
  
?>