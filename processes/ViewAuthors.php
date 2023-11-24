<?php
require_once "..processes/Autoregistration.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - DBT</title>
</head>
<body>

<?php
$stmt = $pdo->query("SELECT * FROM authorstb");
$Message = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<table class="table table-striped table-hover">
      <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">fullname</th>
      <th scope="col">email</th>
      <th scope="col">address</th>
      <th scope="col">dateofbirth</th>
      <th scope="col">autobiography</th>
    </tr>
  </thead>
  <tbody>

  <?php 
  if($authorstb){
    $sn = 1;
  foreach($authorstb  AS $authorstb){
  ?>

    <tr>
      <th scope="row"><?php print $sn; $sn++; ?></th>
      <td><?php print $authorstb["sender_email"]; ?></td>
      <td><?php print $authorstb["receiver_email"]; ?></td>
      <td><?php print $authorstb["subject"]; ?></td>
      <td><?php 
       $shown_string = implode(' ', array_slice(str_word_count(addslashes($authorstb["authorstb"]), 2), 0, 10)) . ' ... ' ; //converting the full text into an array storing all words, then slicing the array at the maximum number of words determined by $max_words      
       print $shown_string ; ?></td>
      <td><?php print date("Y-M-d", strtotime($authorstb["date_sent"])); ?></td>
    </tr>

    <?php }} ?>
  </tbody>

  </table>
  </html>