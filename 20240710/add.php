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
        <form action="./store_data.php">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
            <div class="form-group">
                <label for="pwd">Mobile</label>
                <input type="mobile" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile">
            </div>
           
            <button type="submit" class="btn btn-primary" >Submit</button>
        </form>
    </div>
   

   

 
</body>

</html>