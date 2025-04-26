<?php
include 'includes/header.php';


$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_FILES['image'];

    if (empty($title) || empty($description)) {
        $error = "Please fill in all fields";
    }
}
?>

<div class="container my-4">
    <div class="my-4">
        <h1>Photo Gallery</h1>
    </div>

    <div class="container my-4">
        <div class="row justify-content-align col-md-8">
            <?php if ($success) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $success; ?>
                </div>
            <?php endif ?>

            <?php if ($error) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error; ?>
                </div>
            <?php endif ?>
        </div>
    </div>




    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="upload.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea type="text" class="form-control" name="description"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Select Photo</label>
                            <input type="file" class="form-control" name="image"></input>
                        </div>
                        <button type="submit" class="btn btn-primary">Upload Image</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>



<?php
include 'includes/footer.php';
?>