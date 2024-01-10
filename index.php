<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP & Ajax CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>PHP & Ajax CRUD</h1>
    <div id="table-data"></div>

    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            function loadTable(page) {
                $.ajax({
                    url: "pagination.php",
                    type: 'POST',
                    data: {page_no: page},
                    success: function(data) {
                        $('#table-data').html(data);
                    }
                });
            }

            loadTable();

            // Pagination
            $(document).on('click', '#pagination a', function(e) {
                e.preventDefault();
                var page_id = $(this).attr('id');
                loadTable(page_id);
            });
        });
    </script>
</body>

</html>
