<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>

    </style>
</head>

<body>

    <form action="/action_page.php" class="w-25 m-auto">
        <h1>edit</h1>
        <hr>
        <div>
            <div class="row">
                <div class="col">
                    <label for="" class="form-label">id</label>
                </div>
                <div class="col">
                    1
                </div>
            </div>

        </div>
        <div class="mb-3 mt-3">
            <label for="name" class="form-label">name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="aaa">
        </div>
        <div class="mb-3">
            <label for="mobile" class="form-label">mobile</label>
            <input type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile"
                value="0911-111-111">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- js or jqery -->
    <script>
        $(document).ready(function () {
            $.ajax({
                type: "get",
                url: "url",
                data: "data",
                dataType: "json",
                success: function (response) {
                }
            });

        });
        // jquery end

    </script>
</body>

</html>