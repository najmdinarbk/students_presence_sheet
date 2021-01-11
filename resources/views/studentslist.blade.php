
<div class="card mb-3">
    <img src="https://www.letudiant.fr/static/uploads/mediatheque/EDU_EDU/0/0/189700-universite-paris-dauphine-bibliotheque-m-a-nourry-fevrier-2014-580x310.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Liste des étudiants</h5>
        <p class="card-text">Vous pouvez trouvez toutes les informations des étudiants dans le système</p>

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">CNE</th>
                <th scope="col">Prénom</th>
                <th scope="col">Nom</th>
                <th scope="col">Age</th>
                <th scope="col">Spécialité</th>
                <th scope="col">Opérations</th>

            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->cne }}</td>
                    <td>{{ $student->firstName }}</td>
                    <td>{{ $student->secondName }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->speciality }}</td>
                    <td>

                        <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Modifier</a>

                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>






