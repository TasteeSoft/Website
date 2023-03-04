<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>datatable</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
</head>

    <body>
        <?php
        $connect = mysqli_connect("localhost", "root", "", "patientenverwaltung");
        $sql = "SELECT * FROM patienten";
        $result = mysqli_query($connect, $sql);
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center text-white" style="background: #1867ab;">
                        <h3>Tabelle Patienten</h3>
                    </div>
                    <div class="card-body">
                        <table id="patienten_data" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>PatientenID</th>
                            <th>Vorname</th>
                            <th>Nachname</th>
                            <th>Geburtsdatum</th>
                            <th>Versicherungsnummer</th>
                            <th>Versicherungen_idVersicherungen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row=mysqli_fetch_array($result)){
                                echo '<tr>
                                        <td>'.$row["idPatienten"].'</td>
                                        <td>'.$row["Vorname"].'</td>
                                        <td>'.$row["Nachname"].'</td>
                                        <td>'.$row["Geburtsdatum"].'</td>
                                        <td>'.$row["Versicherungsnummer"].'</td>
                                        <td>'.$row["Versicherungen_idVersicherungen"].'</td>
                                        
                                </tr>';
                            }
                        ?>
                    </tbody>
                </div>
            </div>
        </div>
    </div>
</div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $('#patienten_data').DataTable();
    });
</script>

    </body>
</html>