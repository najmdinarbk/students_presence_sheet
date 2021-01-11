<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Système de gestion des étudiants</title>
</head>
<body>
@include("navbar")




<div class="row header-container justify-content-center">
    <div class="header">
        <h1>Système de gestion des étudiants</h1>
    </div>
</div>

@if($layout == 'index')
    <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-8">
                    @include("studentslist")
                </section>
            </div>
        </div>
    </div>
@elseif($layout == 'create')
    <div class="container-fluid mt-4 " id="create-form">
        <div class="row">
            <section class="col-md-7">
                @include("studentslist")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Entrer les informations du nouveau étudiant</h5>
                        <form action="{{ url('/store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>CNE</label>
                                <input name="cne" type="text" class="form-control"  placeholder="Entrer cne">
                            </div>
                            <div class="form-group">
                                <label>Prénom</label>
                                <input name="firstName" type="text" class="form-control"  placeholder="Entrer le prénom">
                            </div>

                            
                            <div class="form-group">
                                <label>Nom</label>
                                <input name="secondName" type="text" class="form-control"  placeholder="Entrer le nom">
                            </div>
                            
                            <div class="form-group">
                                <label>Age</label>
                                <input name="age" type="text" class="form-control"  placeholder="Entrer l'age">
                            </div>
                            <div class="form-group">
                                <label>Spécialité</label>
                                <input name="speciality" type="text" class="form-control"  placeholder="Entrer Spécialité">
                            </div>
                            <input type="submit" class="btn btn-info" value="Sauvegarde">
                            <input type="reset" class="btn btn-warning" value="Remise à zéro">

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
@elseif($layout == 'show')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include("studentslist")
            </section>
            <section class="col"></section>
        </div>
    </div>
@elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("studentslist")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="https://www.letudiant.fr/static/uploads/mediatheque/EDU_EDU/0/0/189700-universite-paris-dauphine-bibliotheque-m-a-nourry-fevrier-2014-580x310.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Modification des informations de l'étudiant</h5>
                        <form action="{{ url('/update/'.$student->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>CNE</label>
                                <input value="{{ $student->cne }}" name="cne" type="text" class="form-control"  placeholder="Entrer cne">
                            </div>
                            <div class="form-group">
                                <label>Prénom</label>
                                <input value="{{ $student->firstName }}" name="firstName" type="text" class="form-control"  placeholder="Entrer le prénom">
                            </div>
                            <div class="form-group">
                                <label>Nom</label>
                                <input value="{{ $student->secondName }}" name="secondName" type="text" class="form-control"  placeholder="Entrer le nom">
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input value="{{ $student->age }}" name="age" type="text" class="form-control"  placeholder="Entrer the Age">
                            </div>
                            <div class="form-group">
                                <label>Specialité</label>
                                <input value="{{ $student->speciality }}" name="speciality" type="text" class="form-control"  placeholder="Entrer Spécialité">
                            </div>
                            <input type="submit" class="btn btn-info" value="Sauvegarde">
                            <input type="reset" class="btn btn-warning" value="Remise à Zéro">

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
@endif

<footer></footer>
    <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>