<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Inclure Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>APPRENANTS</title>
</head>
<body>
    
    <nav class="navbar navbar-dark bg-primary text-white ">
        <div class="container-fluid">
            <h2 align=center><b>ISI</b></h2>
            <h4 align="center"><b>LISTES DES APPRENANTS GL3-G2</b></h4>
        </div>
      </nav>
    <div class="container mt-5 tab" >
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>PRENOM</th>
                <th>NOM</th>
                <th>EMAIL</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($liste as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->prenom}}</td>
                    <td>{{$item->nom}}</td>
                    <td>{{$item->email}}</td>
                </tr> 
               @endforeach
            </tbody>
        </table>
    </div>
   

    <script src="js/bootstrap.min.js"></script>
</body>
</html>





<!-- Votre code HTML -->

<!-- Inclure Bootstrap JS (et Popper.js si nécessaire) -->



