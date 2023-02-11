<?php
 
    include 'model/velicina.php';
    include 'model/komadodece.php';
    include 'databasebroker.php';
 


    $velicine = Velicina::vratiSveVelicine($conn);

    $svaOdeca = KomadOdece::vratiSvuOdecu($conn);
 

  

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nase porudzbine</title>
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body   >
   
    

 


    <div class="container" >
 
            
            <table class="table" id="tabelaOdeca" style="width:100%">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Naziv</th>
                    <th scope="col">Opis</th>
                    <th scope="col">Velicina</th>
                    <th scope="col">Cena</th>
                    <th scope="col">Slika</th>
                    <th scope="col"> Options </th>


                    </tr>
                </thead>
                <tbody>
                  <?php  
                  
                    while($red = $svaOdeca->fetch_array()): 
                      $velicina =   Velicina::vratiNazivVelicine($red['velicina'],$conn);  ?>
                    <tr>
                    <th  >   <?php   echo $red['id'];        ?>     </th>
                    <td><?php   echo $red['naziv'];        ?> </td>
                    <td style="max-width: 200px;"> <?php   echo $red['opis'];        ?> </td>
                    <td> <?php       echo   $velicina      ?> </td>
                    <td> <?php   echo $red['cena'];        ?> </td>
                    <td> <img src="images/<?php   echo $red['slika'];        ?>" alt="<?php   echo $red['slika'];        ?>"   style="width: 120px;height: auto;"> </td>
                    <td> 
                    <form  method="post">
                                                <button type="button" class="btn btn-success"    data-toggle="modal" data-target="#editModal"  onclick="azurirajOdecu(<?php echo   $red['id'];?>)" >  <i class="fas fa-pencil-alt"></i> </button> 
                                                <button type="button" class="btn btn-danger"    ><i class="fas fa-trash" onclick="obrisiOdecu(<?php echo   $red['id'];?>)"></i></button>  
                                                <button type="button" class="btn btn-warning"   data-toggle="modal" data-target="#profileModal"  onclick="prikaziOdecu(<?php echo   $red['id'];?>)" ><i class="far fa-id-card"></i></button>   </td>
                                                </form>
                                            </tr>

                    </td>
                    </tr>
                  <?php endwhile;?>
                </tbody>
        </table>
            
        <br><br><br><br><br>   
    </div>




 
     

























       <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
     
   
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script src="js/main.js"></script>


      </body>
</html>