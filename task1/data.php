<?php
include 'Form.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tree House -News Letters</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">
    <h3>Treehouse News Letter</h3>
    <hr/>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Total Submissions</h3>
                </div>
                <div class="panel-body">
                    <table id="submissions" class="display table table-bordered table-hovered" cellspacing="0"
                           width="100%">
                        <thead>
                        <tr>
                            <th>Sr.no</th>
							<th>Register Id </th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Joined at</th>
                        </tr>
                        <tbody>

                        <?php

                        $i = 1;
                        foreach (Form::displaySubmissions() as $newsletter) {
                            ?>
                            <td><?php echo $i ?></td>
							<td><?php echo $newsletter['id'] ?></td>
                            <td><?php echo $newsletter['name'] ?></td>
                            <td><?php echo $newsletter['email'] ?></td>
                            <td><?php echo $newsletter['created_on'] ?></td>

                            </tr>
                            <?php
                            $i++;
                        }
                        ?>
                        </tbody>

                    </table>
                </div>
            </div>


        </div>
    </div>
</div>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
       // $('#submissions').DataTable();
    });
</script>

</body>
</html>
