<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

    $filteredHotels = $hotels;
    if(isset($_GET['parking']) && $_GET['parking'] !== ''){
        $tempHotels = [];
        foreach($hotels as $hotel){
            if($_GET['parking'] == $hotel['parking']){
                $tempHotels [] = $hotel;
            }
        }

        $filteredHotels = $tempHotels;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">Boolhotels</div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
            <form action="./index.php" method="GET">
                    <div class="row">
                        <div class="col-5">
                            <select name="parking" id="parking" class="form-select form-select-sm">
                                <option value="">Parcheggio</option>
                                <option value="0">NO</option>
                                <option value="1">SI</option>
                            </select>
                        </div>
                        <div class="col-5">
                            <input type="text" class="form-control form-control-sm" name="vote" placeholder="voto">
                        </div>
                        <div class="col-2">
                            <button type="submit" class="btn btn-sm btn-primary">Cerca</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-striped table-dark">
            <thead>
                <?php foreach ($hotels[0] as $key => $value) { ?>
                    <th class="text-center">        
                        <?php echo ucfirst(str_replace('_', ' ', $key))?>                        
                    </th>
                <?php } ?>
            </thead>
            <tbody>
                <?php foreach( $hotels as $hotel) {?>
                    <tr>
                        <td class="text-center"><?php echo$hotel['name']?></td>
                        <td class="text-center"><?php echo$hotel['description']?></td>
                        <td class="text-center"><?php echo$hotel['parking'] ? 'yes' : 'no' ?></td>
                        <td class="text-center"><?php echo$hotel['vote']?></td>
                        <td class="text-center"><?php echo$hotel['distance_to_center']?>km</td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</body>
</html>