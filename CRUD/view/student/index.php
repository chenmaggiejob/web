<?php
include_once "../../class/base.php";
$students = new DB('students');
$data = $students->setRank();
// dd($data);

// function dd($data)
// {
//     echo "<pre>";
//     print_r($data);
//     echo "</pre>";
// }

// $data = [
//     [
//         'id' => 1,
//         'name' => 'aaa',
//         'mobile' => '0911 - 111 - 111',
//     ],
//     [
//         'id' => 2,
//         'name' => 'bbb',
//         'mobile' => '0922 - 222 - 222',
//     ],
//     [
//         'id' => 3,
//         'name' => 'ccc',
//         'mobile' => '0933 - 333 - 333',
//     ],
// ];

// dd($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Student List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>

    </style>
</head>

<body>

    <div class="container mt-3">
        <h2>Student List</h2>
        <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>
        <div class="d-grid">
            <!-- <button type="button" class="btn btn-primary btn-block">ADD</button> -->
            <a class="btn btn-success" href="./create.php">ADD</a>
        </div>
        <table class="table table-bordered mt-3">

            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>mobile</th>
                    <th>rank</th>
                    <th>opreate</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $key => $value) : ?>

                    <tr>
                        <td><?= $value['id'] ?></td>
                        <td><?= $value['name'] ?></td>
                        <td><?= $value['mobile'] ?></td>
                        <td><?= $value['rank'] ?></td>

                        <!-- <td>1</td>
                        <td>aaa</td>
                        <td>0911-111-111</td> -->
                        <td>
                            <button type="button" class="btn btn-outline-secondary">Edit</button>
                            <button type="button" class="btn btn-outline-danger">Del</button>
                        </td>

                    </tr>

                <?php endforeach; ?>

                <?php
                // foreach ($data as $key => $value) {

                //     echo "<tr>";
                //     echo "<td>{$value['id']}</td>";
                //     echo "<td>{$value['name']}</td>";
                //     echo "<td>{$value['mobile']}</td>";
                //     echo "<td>
                //             <button type='button' class='btn btn-outline-secondary'>Edit</button>
                //             <button type='button' class='btn btn-outline-danger'>Del</button>
                //         </td>";
                //     echo "</tr>";
                // }
                ?>
                <!-- <tr>
                    <td>2</td>
                    <td>bbb</td>
                    <td>0922-222-222</td>
                    <td>
                        <button type="button" class="btn btn-outline-secondary">Edit</button>
                        <button type="button" class="btn btn-outline-danger">Danger</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>ccc</td>
                    <td>0933-333-333</td>
                    <td>
                        <button type="button" class="btn btn-outline-secondary">Edit</button>
                        <button type="button" class="btn btn-outline-danger">Danger</button>
                    </td>
                </tr> -->
            </tbody>
        </table>
    </div>




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