<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>php page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include "nav.php";
    include "head.php";
    ?>
    <div class="container container-fluid">
        <div class="input-group mb-3">
            <div class="custom-file">
                <form action="file.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="file" class="custom-file-input" id="inputGroupFile02">
                    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
            </div>
            <div class="input-group-append">
                <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
            </div>
        </div>
        <input type="submit" id="submit" class="btn btn-primary" value="Submit" />
        </form>
    </div>
    <?php
    include "footer.php";
    ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script>
        $(() => {
            $("#inputGroupFile02").change(() => {
                $(".custom-file-label").text($("#inputGroupFile02").val());
                console.log($("#inputGroupFile02").val());
            });
        });
    </script>
</body>

</html>