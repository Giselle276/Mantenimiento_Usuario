

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 

<script src="jquery/jquery-1.6.3.min.js"></script>
<script src="jquery/jquery.validate.min.js"></script>
    <script src="js/validacion.js"></script>  
    <script src="js/sweetalert.js"></script>
<?php if(isset($_SESSION['status']) && $_SESSION['status'] !=''){ ?>
    <script>
      swal({
      title: "<?php echo $_SESSION['status']; ?>",
      //  text: "You clicked the button!",
      icon: "<?php echo $_SESSION['status_code']; ?>",
      button: "OK.Done!",
        });
    </script> 
    <?php
    unset($_SESSION['status']);
  }
?>

 

</body>
</html>