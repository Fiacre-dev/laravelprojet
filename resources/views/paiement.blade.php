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
        <link rel="stylesheet" href="{{ asset('assets/css/paiement.css') }}" />
        <title>AutoRent | Catalogue</title>
    </head>
    <body>
        <main>
            <h1>Finalisez votre paiement en <span>un clic !</span></h1>
            <section id="paiement-section">
                <h2>Adresse de livraison</h2>
                <form action="{{ route("save.livraison",$reservation->id) }}" method="post">
                    @method('post')
                    @csrf
                    <div class="form-group">
                        <div>
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" required placeholder="Votre nom">
                        </div>
                        <div>
                            <label for="prenom">Prénom</label>
                            <input type="text" name="prenom" required placeholder="Votre prenom">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <label for="tel">Tel</label>
                            <input type="tel" name="tel" required placeholder="+22998754896">
                        </div>
                        <div>
                            <label for="adresse">Adresse</label>
                            <select name="lieu" id="lieu" required>
                                <option value="" selected hidden>Choisir un lieu</option>
                                @foreach ($villes as $ville)
                                    <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                                @endforeach
                            </select>
                            {{-- <input type="text" name="adresse" required> --}}
                        </div>
                    </div>
                    <h2>Order summary</h2>
                    <div class="summary-group">
                        <h3>{{ $reservation->vehicule->nom }}</h3>
                        <p class="value">{{ $reservation->montant }}</p>
                    </div>
                    <div class="summary-group">
                        <h3>Quotion</h3>
                        <p class="value">{{ $reservation->vehicule->quotion }}</p>
                    </div>
                    <hr>
                    <div class="total">
                        <h2>TOTAL</h2>
                        <p class="total-price">
                            {{ $reservation->montant + $reservation->vehicule->quotion}} FR
                        </p>
                    </div>
                    <div class="confirm-cancel-buttons">
                        <a href="{{ route('acceuil') }}" id="cancel-button">Annuler</a>
                        <button type="submit" id="confirm-button">Confirmer</button>
                    </div>
            </form>
            </section>
        </main>
    </body>
</html>
