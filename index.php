<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album Cards</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="bg-dark">

    <div id="app">

        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4 mt-4 mr-3">
                    <h1 class="text-light text-center fw-bold">
                       Best Album
                    </h1>
                </div>
                <div class="col-4 border-none" v-for="(element, index) in albumList">
                    <div class="row row-cols-1 row-cols-md-1 g-4" >
                        <div class="col mb-5">
                            <div class="card h-120">
                                <div class="container-fluid text-center bg-dark">
                                    <img :src='element.immagine' class="card-img-top bg-dark text-center h-60 w-50" alt="...">
                                </div>
                                <div class="card-body bg-dark">
                                    <h5 class="card-title text-light text-center fw-bold">{{ element.nomeDisco }}</h5>
                                    <p class="card-text text-light text-center">{{ element.artista }}</p>
                                    <p class="card-text text-light text-center fw-bold">{{ element.annoPubblicazione }}</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/script.js"></script>
</body>
</html>