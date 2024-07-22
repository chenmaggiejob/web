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

    <form action="../../api/student/store.php" method="get" class="w-50 m-auto">
        <h1>create</h1>
        <hr>
        <div class="mb-3 mt-3">
            <label for="name" class="form-label">name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        </div>
        <div class="mb-3">
            <label for="mobile" class="form-label">mobile</label>
            <input type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- js or jqery -->
    <script>
        $(document).ready(function() {
            $.ajax({
                type: "get",
                url: "url",
                data: "data",
                dataType: "json",
                success: function(response) {}
            });

        });
        // jquery end
    </script>
</body>

</html>