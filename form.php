<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mes Recettes</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header><?php include("header.php");?></header>
    <main>
        <div class="row w-80 m-auto">
            
            <!-- <aside>-->
                <div class="col-2 aside-recipes"></div>
                <!-- </aside> -->
                
                <!-- <main> -->
                <div class="col-10 form-recipes">
                    <!-- form -->
                    <form class="formulaire w-100" action="#" method="get">
                        <h4 class="text-white mt-4">Intitulé de la recette</h4>
                        <input id="title-recipe" class="w-50" type="text" placeholder="Intitulé de la recette">
                            <select class="custom-select my-1 w-50" id="inlineFormCustomSelectPref">
                                <option selected>Catégorie</option>
                                <option value="1">One</option>
                            </select>
                        <h4 class="text-white mt-4">Nombre de personnes</h4>
                        <input id="nbr-person" class="w-auto" type="number" max="16">
                        <h4 class="text-white mt-4">Temps de préparation</h4>
                        <input id="time-recipe" class="w-auto" type="time">
                        <h4 class="text-white mt-4">Temps de cuisson</h4>
                        <input id="time-recipe" class="w-auto" type="time">
                        <h4 class="text-white mt-4">Ingrédients</h4>
                        <input id="title-recipe" class="w-50" type="text" placeholder="Son petit nom">
                        <a href="#" class="btn btn-primary">Ajouter un ingrédient</a>
                        <!-- ingredient.js -->
                        <div class="list-ingredients">
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- ingredient.js -->
                    </form>
                    <!-- form -->

                </div>
        </div>

        

    </main>
    


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>