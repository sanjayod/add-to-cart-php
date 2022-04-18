<?php 
  include "header.php";
?>

    <div class="container">
     <div class="row mt-5">
       <div class="col-md-3">
        <form action="manage_cart.php" method="post">
         <div class="card">
          <img src="images/1.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">Bags 1</h5>
            <p class="card-text">Rs.3000</p>
            <input type="hidden" name="item-name" value="bag-1">
            <input type="hidden" name="item-price" value="3000">
            <button type="submit" name="add_to_cart" class="btn btn-success">Add to cart</button>
          </div>
        </div>
      </form>
      </div>

      <div class="col-md-3">
        <form action="manage_cart.php" method="post">
         <div class="card">
          <img src="images/2.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">Bags 2</h5>
            <p class="card-text">Rs.4000</p>
            <input type="hidden" name="item-name" value="bag-2">
            <input type="hidden" name="item-price" value="4000">
            <button type="submit" name="add_to_cart" class="btn btn-success">Add to cart</button>
          </div>
        </div>
      </form>
      </div>

      <div class="col-md-3">
        <form action="manage_cart.php" method="post">
         <div class="card">
          <img src="images/3.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">Bags 3</h5>
            <p class="card-text">Rs.5000</p>
             <input type="hidden" name="item-name" value="bag-3">
             <input type="hidden" name="item-price" value="5000">
            <button type="submit" name="add_to_cart" class="btn btn-success">Add to cart</button>
          </div>
        </div>
      </form>
      </div>

      <div class="col-md-3">
       <form action="manage_cart.php" method="post">
         <div class="card">
          <img src="images/4.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">Bags 4</h5>
            <p class="card-text">Rs.6000</p>
            <input type="hidden" name="item-name" value="bag-4">
            <input type="hidden" name="item-price" value="6000">
            <button type="submit" name="add_to_cart" class="btn btn-success">Add to cart</button>
          </div>
        </div>
        </form>
      </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  -->
</body>
</html>