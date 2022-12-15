<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Loading</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" defer></script>
</head>
<body>
  <h1>Uploader un fichier sur un serveur PHP</h1>
  <div class="row">
    <div class="col-12">
      <form action="upload.php" method="post" enctype="multipart/form-data">
        <!-- Disable large files -->
        <input type="hidden" name="MAX_FILE_SIZE" value="3000000">
        <div class="mb-3">
          <input type="file" name="img" class="form-control">
        </div>
        <input type="submit" value="Uploader" name="upload" class="btn btn-primary">
      </form>
    </div>
  </div>
</body>
</html>