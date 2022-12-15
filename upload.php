<?php

define("MAX_SIZE", 3000000);

if (isset($_POST["upload"]) && isset($_FILES["img"])) {
  $fileName = $_FILES["img"]["name"];
  $fileTmp = $_FILES["img"]["tmp_name"];
  printf("tmp folder %s<br>", $fileTmp);
  $fileSize = $_FILES["img"]["size"];
  $fileError = $_FILES["img"]["error"];

  $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
  if (in_array($fileExt, ["png", "jpg", "jpeg"])) {
    if ($fileError === 0) {
      if ($fileSize < MAX_SIZE) {
        $newName = uniqid("IMG-", true) . "." . $fileExt;
        printf("newname = %s\n", $newName);
        $uploadDir = __DIR__ . "/assets/uploads";
        move_uploaded_file($fileTmp, "$uploadDir/$newName");
        header("Location: index.php?uploadsuccess");  
      } else {
        echo "Fichier trop volumineux";
      }
    } else {
      echo "Une erreur est survenue lors du chargement du fichier.";
    }
  } else {
    echo "Vous n'êtes pas autorisé à uploader ce type de fichier";
  }
  
} else {
  header("Location: /index.php");
}