<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Vote sederhana</title>
  </head>
  <body>

    <?php include 'voting.php'; ?>

    <form action="voting.php" method="post">

      <input type="radio" name="pilihan" value="sangat buruk">Sangat Buruk<br>
      <input type="radio" name="pilihan" value="buruk">Buruk<br>
      <input type="radio" name="pilihan" value="lumayan">Lumayan<br>
      <input type="radio" name="pilihan" value="baik">Baik<br>
      <input type="radio" name="pilihan" value="sangat baik">Sangat Baik<br>

      <button type="submit" name="kirimvote" value="kirimvote">Kirim</button>

    </form>

    <br><br>

    Sangat Buruk : <?php echo $sangatburuk; ?><br>
    Buruk : <?php echo $buruk; ?><br>
    Lumayan : <?php echo $lumayan; ?><br>
    Baik : <?php echo $baik; ?><br>
    Sangat Baik : <?php echo $sangatbaik; ?><br>

  </body>
</html>
