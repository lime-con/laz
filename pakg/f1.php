<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1006</title>
</head>
<body>
    <form enctype="multipart/form-data" action="" method="post">
        <input type="file" name="f1" required>
        <button type="submit" name="send">send</button>
    </form>

    <?php
    // ارسال البينات
    if(isset($_POST['send'])){
        // مسار حفض الملف
        $targetDirectory = "name/";

        if (!file_exists($targetDirectory)) {
            mkdir($targetDirectory, 0777, true);
        }

        if(isset($_FILES['f1'])){
            $targetFile = $targetDirectory . basename($_FILES["f1"]["name"]);

            if (move_uploaded_file($_FILES["f1"]["tmp_name"], $targetFile)) {
                echo "تم حفظ الملف بنجاح في: " . $targetFile;
            } else {
                echo "خطأ في حفظ الملف.";
            }
        }
    }
    ?>
</body>
</html>
