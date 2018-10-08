<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customers</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
    <link rel="stylesheet" href="style/layout.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <header class="site-header">
        <h1>Our Customers DATA</h1>
    </header> 
    <div class="tablediv">
    <main>
     <?php
        // open my Data
        $file = fopen('data/SampleCSVFile_119kb.csv','r');
        $data = fgetcsv($file);
    
            
        echo '<table class="table">';
//Loop through the CSV rows.
while (($row = fgetcsv($file, 0, ",")) !== FALSE) {
    //Print out my column data.
    echo '<tr>';
    echo '<td>' . utf8_encode($row[0]) . '</td>';
    echo '<td>' . $row[1] . '</td>';
    echo '<td>' . $row[2] . '</td>';
    echo '<td>' . $row[3] . '</td>';
    echo '<td>' . $row[4] . '</td>';
    echo '<td>' . $row[5] . '</td>';
    echo '<td>' . $row[6] . '</td>';
    echo '<td>' . $row[7] . '</td>';
    echo '<td>' . $row[8] . '</td>';
    echo '<td>' . $row[9] . '</td>';
    echo '</tr>';
   
}
echo '</table>';

        // Datei schließen
        fclose($file); 
     ?>
    </main>
    </div>
    <footer>
    <p style="color: white; text-align: center;">
        Abdulhamid Kwieder @ WIFI. PHP Web Developer
    </p>
</footer>
</div>
</body>
</html>