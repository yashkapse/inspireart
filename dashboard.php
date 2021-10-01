<?php  ob_start(); ?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<?php include "links.php"?>

<body>
  <!--* Navigation Bar -->

  <?php include 'nav.php'; ?>

  <!-- Navigation Bar -->

  <!-- Carasol -->

  <?php include 'carousel.php'; ?>

  <!-- Carasol -->

  <!-- Categories section -->

  <?php include 'category.php'; ?>

  <!-- Categories section -->

  <!-- Footer Section -->

  <?php include "footer.php"  ?>

  <!-- Footer Section -->

  <!-- Button trigger modal -->
  

    <script>
      const menuBtn = document.querySelector(".menu-icon span");
      const searchBtn = document.querySelector(".search-icon");
      const cancelBtn = document.querySelector(".cancel-icon");
      const items = document.querySelector(".nav-items");
      const form = document.querySelector("form");
      const sbtn = document.querySelector(".search-data");
      menuBtn.onclick = () => {
        items.classList.add("active");
        menuBtn.classList.add("hide");
        searchBtn.classList.add("hide");
        cancelBtn.classList.add("show");
        form.classList.remove("active");

      }
      cancelBtn.onclick = () => {
        items.classList.remove("active");
        menuBtn.classList.remove("hide");
        searchBtn.classList.remove("hide");
        cancelBtn.classList.remove("show");
        form.classList.remove("active");
        cancelBtn.style.color = "#fd79a8";
      }
      searchBtn.onclick = () => {
        form.classList.add("active");
        searchBtn.classList.add("hide");
        cancelBtn.classList.add("show");
      }
    </script>

</body>



</html>
<?php  ob_end_flush(); ?>
