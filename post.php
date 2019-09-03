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
    <div class="container container-fluid" id="container">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary" id="postSubmit">Submit</button>
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
            $("#postSubmit").on('click', () => {
                $email = $("input[name='email']").val();
                $password = $("input[name='password']").val();
                $.post("postget.php", {
                    "email": $email,
                    "password": $password
                }, data => {
                    console.log($email);
                    $(".alert").remove();
                    if (data == 1) {
                        $("input").removeClass("is-invalid");
                        $("#container").prepend(`
                        <div class="alert alert-success" role="alert">
                            Success! ------- your email: ${$email} ---- psw: ${$password} ------
                        </div>`);
                    } else {
                        $("input").addClass("is-invalid");
                        $("#container").prepend(`
                        <div class="alert alert-danger" role="alert">
                            Failed! Please input something!
                        </div>`);
                    }
                });
                return false;
            });
        });
    </script>

</body>

</html>