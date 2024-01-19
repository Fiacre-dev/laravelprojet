<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
            integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,500;1,400&family=Poppins:ital,wght@0,100;0,400;1,500;1,600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/gerer-reservation.css') }}" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
        <title>AutoRent | Gérer une réservation</title>
    </head>
    <body>
        <div>
            @component('component.header')

            @endcomponent
            <main>
                <div class="hierarchie">
                    <a href="{{ route('acceuil') }}">Home</a>
                    <span>></span>
                    <a href="{{ route('catalogue') }}">Catalogue</a>
                </div>
                <h1>Vos réservations</h1>

                <section class="table">
                    <table id="vehicule-table" class="display">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Photo</th>
                                <th>Model Name</th>
                                <th>Date fin</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reservations as $reservation)
                                <tr>
                                <td>{{ $reservation->id }}</td>
                                <td>
                                    <img src="{{ asset('assets/img/voiture4.png') }}" alt="">
                                </td>
                                <td>{{ $reservation->vehicule->nom ??"nom" }}</td>
                                <td>{{ $reservation->date_fin??"trans" }}</td>
                                <td class="buttons">
                                    <button class="rendre-button">
                                        Rendre
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </section>
            </main>
            @component("component.footer")

            @endcomponent
        </div>

        <form action="" id="rendreForm" method="post">
            @method("put")
            @csrf
        </form>

        <script>
            let table = new DataTable('#vehicule-table', {
                // options
            });
        </script>
        <script src="{{ asset("assets/js/gerer_reservation.js") }}"></script>
    </body>
</html>
