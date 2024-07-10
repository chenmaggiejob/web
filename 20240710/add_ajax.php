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
    <div class="container">
        <h2>Member Add Form</h2>
        <form action="./store_data.php" method="get" id="memberForm">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
            <div class="form-group">
                <label for="pwd">Mobile</label>
                <input type="mobile" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- js or jqery -->
    <script>
        $(document).ready(function() {
            const myForm = $('#memberForm');
            myForm.submit(function(e) {
                e.preventDefault();
                console.log('myForm ok');
                console.log('this', this);
                console.log('$(this)', $(this));

                // let data = $(this).serialize();
                let data = $(this).serializeArray();
                data.push({
                    'name': 'text',
                    'value': 'Hello :)'
                });
                // console.log('typeof(data)', typeof(data));
                // console.log('data', data);

                let url = "./store_data_ajax.php";

                $.ajax({
                    type: "get",
                    url: url,
                    data: data,
                    dataType: "json",
                    success: function(res) {
                        console.log('res', res);

                        // window.location.assign("./s20240708_01_index.php")
                    }
                });


            });



        });
        // jquery end
    </script>



</body>

</html>