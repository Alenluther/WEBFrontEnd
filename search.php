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
            <select class="custom-select" id="inputGroupSelect">
                <option value="4" selected>All</option>
                <option value="1">The Legend of Zelda</option>
                <option value="2">Cyberpunk 2077</option>
                <option value="3">God of War 4</option>
            </select>
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary" id="postSubmit1" style="display:block">Submit</button>
            </div>
        </div>

    </div>

    <?php
    include "footer.php";
    ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script>
        $(() => {
            $("#postSubmit1").on('click', () => {
                $(".card").remove();
                let $value = $("#inputGroupSelect").val();
                let $valueText = $("#inputGroupSelect").find("option:selected").text();
                $.get("postget.php", {
                    "value": $value,
                }, data => {
                    if ($value != 4) {
                        $(".mb-3").after(`
                     <div class="card bg-light mb-3">
                         <div class="card-header">${$value}</div>
                         <div class="card-body">
                             <h5 class="card-title">${$valueText}</h5>
                            <p class="card-text">${data}</p>
                            </div>
                     </div>
                     `);
                    } else {
                        let $strings = data.split("?");
                        $strings.forEach((element, index) => {
                            let $valueText1 = $("#inputGroupSelect").children().eq(index + 1).text();
                            $(".input-group.mb-3").after(`
                            <div class="card bg-light mb-3" style="display:inline-block">
                             <div class="card-header">${index+1}</div>
                            <div class="card-body">
                             <h5 class="card-title">${$valueText1}</h5>
                            <p class="card-text">${element}</p>
                            </div>
                         </div>
                         `);
                        });

                    }

                });
                return false;
            });
        });
    </script>
</body>

</html>