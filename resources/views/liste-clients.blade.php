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
        <link rel="stylesheet" href="{{ asset('assets/css/liste-clients.css') }}" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
        <title>AutoRent | Liste des clients</title>
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
                <h1>Liste des clients</h1>

                <section class="table">
                    <table id="vehicule-table" class="display">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom complet</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                            <tr>
                                <td>{{ $client->id }}</td>
                                <td>{{ $client->nom }}</td>
                                <td>{{ $client->email }}</td>
                                <td class="buttons">
                                    <button type="button" class="kdelete-buuton">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64" fill="none">
                                            <circle cx="32" cy="32" r="32" fill="white"/>
                                            <path d="M31.6667 28C30.6058 28 29.5884 28.4214 28.8382 29.1716C28.0881 29.9217 27.6667 30.9391 27.6667 32C27.6667 33.0609 28.0881 34.0783 28.8382 34.8284C29.5884 35.5786 30.6058 36 31.6667 36C32.7275 36 33.7449 35.5786 34.4951 34.8284C35.2452 34.0783 35.6667 33.0609 35.6667 32C35.6667 30.9391 35.2452 29.9217 34.4951 29.1716C33.7449 28.4214 32.7275 28 31.6667 28ZM31.6667 38.6667C29.8986 38.6667 28.2029 37.9643 26.9526 36.714C25.7024 35.4638 25 33.7681 25 32C25 30.2319 25.7024 28.5362 26.9526 27.286C28.2029 26.0357 29.8986 25.3333 31.6667 25.3333C33.4348 25.3333 35.1305 26.0357 36.3807 27.286C37.631 28.5362 38.3333 30.2319 38.3333 32C38.3333 33.7681 37.631 35.4638 36.3807 36.714C35.1305 37.9643 33.4348 38.6667 31.6667 38.6667ZM31.6667 22C25 22 19.3067 26.1467 17 32C19.3067 37.8533 25 42 31.6667 42C38.3333 42 44.0267 37.8533 46.3333 32C44.0267 26.1467 38.3333 22 31.6667 22Z" fill="black"/>
                                          </svg>
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


        <script>
            let table = new DataTable('#vehicule-table', {
                // options
            });
        </script>
    </body>
</html>
