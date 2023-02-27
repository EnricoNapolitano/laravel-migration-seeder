<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME')}}</title>
    @vite('resources/js/app.js')
</head>
<body>
    <h1>TRENI IN PARTENZA OGGI</h1>
    <table>
        <thead>
            <tr>
                <th>Compagnia</th>
                <th>Stazione di partenza</th>
                <th>Stazione di arrivo</th>
                <th>Orario di partenza</th>
                <th>Orario di arrivo</th>
                <th>Codice treno</th>
                <th>Numero vagoni</th>
                <th>Cancellato</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trains as $train)
            <tr>
                <td>{{ $train->company_name }}</td>
                <td>{{ $train->departure_station }}</td>
                <td>{{ $train->arrival_station }}</td>
                <td>{{ $train->departure_time }}</td>
                <td>{{ $train->arrival_time }}</td>
                <td>{{ $train->train_code }}</td>
                <td>{{ $train->numbers_of_wagons }}</td>
                <td>{{ $train->is_deleted ? 'Sì' : 'No' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>