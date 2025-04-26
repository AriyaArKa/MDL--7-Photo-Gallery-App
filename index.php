<?php
include 'includes/header.php';

$sql = "SELECT * FROM images ORDER BY upload_date DESC";
$stmt = $pdo->query($sql);

$images = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="container my-4">
  <div class="my-4">
    <h1>Photo Gallery</h1>
  </div>

  <div class="row">
    <?php
    if (count($images) > 0) {
      foreach ($images as $image) {
    ?>
        <div class="col-md-4 mb-4 d-flex align-items-stretch">
          <div class="card" style="width: 100%;">
            <img src="Assets/Images/<?php echo $image['filename']; ?>" class="card-img-top img-fluid" alt="<?php echo $image['title']; ?>" style="height: 200px; object-fit: cover;">
            <div class="card-body">
              <h5 class="card-title"><?php echo $image['title']; ?></h5>
              <p class="card-text"><?php echo $image['description']; ?></p>
              <p class="card-text"><small class="text-muted">Uploaded on <?php echo $image['upload_date']; ?></small></p>
              <!-- <a href="delete.php?id=<?php echo $image['id']; ?>" class="btn btn-danger">Delete</a>
              <a href="edit.php?id=<?php echo $image['id']; ?>" class="btn btn-primary">Edit</a> -->
            </div>
          </div>
        </div>
      <?php
      }
    } else {
      ?>
      <div class="alert alert-info" role="alert">
        No images found.
      </div>
    <?php
    }
    ?>
  </div>
</div>

<?php
include 'includes/footer.php';
?>