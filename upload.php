<?php
SESSION_START();
if(isset($_GET['logout']))
        {
            session_destroy();
        }
  include('utils/api_connect.php');
  if(!$_SESSION['token']){
    header('Location: ../mainpage/login.php');
  }
  $user = $api['user_info'];
  $articles = $api['articles'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>
</head>
<?php
      include_once "layout/head.php";
      include_once "layout/header.php";
    ?>
<body>
    <main class="flex flex-col items-center p-5 md:p-2 md:w-1/2 m-auto">
        <form  enctype="multipart/form-data" class="file-upload w-full" method="post" action="utils/upload_image.php">
            <h1 class="title-upload-form">Upload hier je afbeeldingen</h1>
            <input type="text" value="<?php echo $_GET['a']; ?>" name="project_id" hidden>
            <div class="image-upload-wrap">
                <input required class="file-upload-input" name="image" type='file' onchange="readURL(this);" accept="image/*" />
                <div class="drag-text">
                <h3>Drag and drop a file or select add Image</h3>
                </div>
            </div>
            <div class="file-upload-content">
                <img class="file-upload-image" src="#" alt="your image" />
                <div class="image-title-wrap">
                <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                </div>
            </div>
            <div class="upload-button">
            <button type="submit">Upload</button>
            </div>
        </form>

        <form class="utils/text-upload w-full" method="post" action="upload_text.php">
            <input type="text" value="<?php echo $_GET['a']; ?>" name="project_id" hidden>
            <div class="input-fields w-full">
                <input required type="text" class="text-field-upload w-full" name="text">


            </div>
            <div class="upload-button">
                <button type="submit">Upload</button>
            </div>
        </form>
    </main>
        <script>
    function readURL(input) {
        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function(e) {
            $('.image-upload-wrap').hide();

            $('.file-upload-image').attr('src', e.target.result);
            $('.file-upload-content').show();

            $('.image-title').html(input.files[0].name);
            };

            reader.readAsDataURL(input.files[0]);

        } else {
            removeUpload();
        }
        }

        function removeUpload() {
        $('.file-upload-input').replaceWith($('.file-upload-input').clone());
        $('.file-upload-content').hide();
        $('.image-upload-wrap').show();
        }
        $('.image-upload-wrap').bind('dragover', function () {
                $('.image-upload-wrap').addClass('image-dropping');
            });
            $('.image-upload-wrap').bind('dragleave', function () {
                $('.image-upload-wrap').removeClass('image-dropping');
        });

    </script>
    <?php include_once "layout/footer.php"; ?>