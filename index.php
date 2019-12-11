<!DOCTYPE html>
<html amp lang="fr">

<head>
  <?php include('commons/head.php'); ?>
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <?php include('commons/header.php'); ?>

  <!--==========================
    Intro Section
  ============================-->
  <?php include('commons/intro.php'); ?>

  <main id="main">

    <!--==========================
      SERVICES Section
    ============================-->
    <?php include('commons/main/services.php'); ?>

    <!--==========================
      REALISATIONS Section
    ============================-->
    <?php include('commons/main/realisations.php'); ?>


    <!--==========================
      TARIFS Section
    ============================-->
    <?php include('commons/main/tarifs.php'); ?>

    <!--==========================
      Sponsors Section
    ============================-->
    <?php /* include('commons/main/sponsors.php'); */ ?>

    <!--==========================
      Contact Section
    ============================-->
    <?php include('commons/main/contact.php'); ?>

  </main>


  <!--==========================
    Footer
  ============================-->
  <?php include('commons/footer.php'); ?>

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <?php include('commons/scripts.php'); ?>

</body>

</html>
