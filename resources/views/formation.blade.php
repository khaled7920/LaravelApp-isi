
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>APPRENANTS</title>
</head>
<body>
    
    <nav class="navbar navbar-dark bg-primary text-white ">
        <div class="container-fluid">
            <h2 align=center><b>ISI</b></h2>
            <h4 align="center"><b>LISTES DES FORMATIONS</b></h4>
        </div>
      </nav>
    <div class="container mt-5 tab" >
        <table class="table ">
            <thead class="alert-dark">
            <tr>
                <th>ID</th>
                <th>DEPARTEMENT RESEAUX & SYSTEMES</th>
                <th>DEPARTEMENT GENIE INFORMATIQUE</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($formations as $formation)
                <tr>
                    <td>{{$formation->id}}</td>
                    <td>{{$formation->DepartementReseaux}}</td>
                    <td>{{$formation->DepartementInformatique}}</td>
                    
                </tr> 
               @endforeach
            </tbody>
        </table>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>