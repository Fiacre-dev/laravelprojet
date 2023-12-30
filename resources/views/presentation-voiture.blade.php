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
        <link rel="stylesheet" href="{{ asset('assets/css/presentation-voiture.css') }}" />
        <title>AutoRent | Contact</title>
    </head>
    <body>
        <div>
            <header>
                <div class="logo">
                    <h1>Auto<span>Rent.</span></h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="{{ route('acceuil') }}">Accueil</a></li>
                        <li><a href="#">Catalogue</a></li>
                        <li><a href="#" class="active">Contact</a></li>
                    </ul>
                </nav>
                <a href="{{ route('login') }}">Se connecter</a>
            </header>
            <main>
                <div class="hierarchie">
                    <a href="{{ route('acceuil') }}">Home</a>
                    <span>></span>
                    <a href="{{ route('catalogue') }}">Catalogue</a>
                </div>
                <section>
                    <h1>SolaraElite Flat</h1>
                    <div>
                        <div>
                            <div class="voiture">
                                <img src="{{ asset('assets/img/voiture31.png') }}" alt="">
                            </div>
                            <div class="carac">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                        <path d="M9.48529 0L19.3853 1.414L20.7993 11.314L11.6073 20.506C11.5144 20.599 11.4041 20.6727 11.2827 20.7231C11.1613 20.7734 11.0312 20.7993 10.8998 20.7993C10.7684 20.7993 10.6382 20.7734 10.5168 20.7231C10.3954 20.6727 10.2852 20.599 10.1923 20.506L0.292287 10.606C0.105121 10.4185 0 10.1644 0 9.8995C0 9.63458 0.105121 9.38049 0.292287 9.193L9.48529 0ZM12.3143 8.486C12.5 8.67169 12.7206 8.81897 12.9632 8.91944C13.2059 9.01991 13.466 9.0716 13.7286 9.07155C13.9913 9.07151 14.2514 9.01973 14.494 8.91917C14.7366 8.81862 14.9571 8.67126 15.1428 8.4855C15.3285 8.29975 15.4758 8.07924 15.5762 7.83656C15.6767 7.59388 15.7284 7.3338 15.7283 7.07115C15.7283 6.8085 15.6765 6.54843 15.576 6.30579C15.4754 6.06315 15.328 5.84269 15.1423 5.657C14.7671 5.28198 14.2584 5.07135 13.7279 5.07145C13.1975 5.07154 12.6888 5.28235 12.3138 5.6575C11.9388 6.03265 11.7281 6.54141 11.7282 7.07185C11.7283 7.6023 11.9391 8.11098 12.3143 8.486Z" fill="black"/>
                                    </svg>
                                    <span>Prix</span>
                                </div>
                                <div>
                                    13.000 Fr / jour 
                                </div>
                            </div>
                            <div class="carac">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M21.833 2.97717H18.2894C18.2184 2.97717 18.1503 3.00537 18.1002 3.05555C18.05 3.10574 18.0218 3.1738 18.0218 3.24477C18.0218 3.29037 18.0362 3.33117 18.056 3.36837V5.40717C18.0561 5.48189 18.0414 5.55589 18.0128 5.62494C17.9843 5.69398 17.9424 5.75672 17.8896 5.80955C17.8367 5.86239 17.774 5.90428 17.7049 5.93284C17.6359 5.96139 17.5619 5.97605 17.4872 5.97597H16.3844C16.315 5.97597 16.2464 5.96232 16.1823 5.93578C16.1183 5.90925 16.0601 5.87036 16.011 5.82133C15.962 5.7723 15.9231 5.71409 15.8966 5.65003C15.87 5.58597 15.8564 5.51731 15.8564 5.44797V3.40137C15.8918 3.35673 15.9116 3.30173 15.9128 3.24477C15.9129 3.20961 15.906 3.17478 15.8926 3.14227C15.8791 3.10977 15.8594 3.08024 15.8346 3.05538C15.8097 3.03051 15.7802 3.0108 15.7477 2.99738C15.7152 2.98396 15.6803 2.97709 15.6452 2.97717H8.50217C8.4312 2.97717 8.36314 3.00537 8.31295 3.05555C8.26277 3.10574 8.23457 3.1738 8.23457 3.24477C8.23457 3.28617 8.24598 3.32397 8.26277 3.35937V5.42157C8.26277 5.49446 8.24842 5.56663 8.22053 5.63396C8.19264 5.7013 8.15175 5.76248 8.10022 5.81402C8.04868 5.86555 7.9875 5.90644 7.92016 5.93433C7.85283 5.96222 7.78066 5.97657 7.70777 5.97657H6.72857C6.57995 5.97657 6.43741 5.91753 6.33231 5.81244C6.22722 5.70734 6.16817 5.5648 6.16817 5.41617V3.37437C6.192 3.33527 6.20504 3.29055 6.20597 3.24477C6.20605 3.20961 6.19919 3.17478 6.18577 3.14227C6.17235 3.10977 6.15264 3.08024 6.12777 3.05538C6.10291 3.03051 6.07338 3.0108 6.04087 2.99738C6.00837 2.98396 5.97354 2.97709 5.93837 2.97717H2.20457C2.04687 2.97733 1.89566 3.04001 1.78409 3.15147C1.67252 3.26292 1.60969 3.41407 1.60938 3.57177V21.2922C1.60938 21.621 1.87637 21.888 2.20457 21.888H21.833C21.9908 21.8877 22.142 21.8247 22.2535 21.713C22.365 21.6013 22.4276 21.45 22.4276 21.2922V3.57177C22.4273 3.41417 22.3645 3.26312 22.2531 3.15168C22.1416 3.04024 21.9906 2.97749 21.833 2.97717ZM21.833 21.3528H2.20457C2.19664 21.3528 2.18879 21.3512 2.18147 21.3482C2.17416 21.3451 2.16751 21.3406 2.16193 21.335C2.15636 21.3294 2.15195 21.3227 2.14897 21.3153C2.14599 21.308 2.1445 21.3001 2.14457 21.2922V7.92837H21.8924V21.2916C21.8925 21.2995 21.8911 21.3074 21.8882 21.3148C21.8853 21.3221 21.881 21.3289 21.8754 21.3346C21.8699 21.3403 21.8633 21.3448 21.856 21.3479C21.8487 21.351 21.8409 21.3527 21.833 21.3528Z" fill="black"/>
                                        <path d="M7.28713 5.36642C7.43473 5.36642 7.55473 5.24642 7.55473 5.09882V1.50002C7.55473 1.46488 7.54781 1.43008 7.53436 1.39762C7.52091 1.36515 7.5012 1.33565 7.47635 1.3108C7.4515 1.28595 7.422 1.26624 7.38954 1.25279C7.35707 1.23934 7.32227 1.23242 7.28713 1.23242C7.25199 1.23242 7.21719 1.23934 7.18473 1.25279C7.15226 1.26624 7.12276 1.28595 7.09791 1.3108C7.07306 1.33565 7.05335 1.36515 7.0399 1.39762C7.02645 1.43008 7.01953 1.46488 7.01953 1.50002V5.09942C7.01953 5.24702 7.13953 5.36642 7.28713 5.36642ZM16.9795 5.36642C17.1271 5.36642 17.2471 5.24642 17.2471 5.09882V1.50002C17.2471 1.46488 17.2402 1.43008 17.2268 1.39762C17.2133 1.36515 17.1936 1.33565 17.1688 1.3108C17.1439 1.28595 17.1144 1.26624 17.0819 1.25279C17.0495 1.23934 17.0147 1.23242 16.9795 1.23242C16.9444 1.23242 16.9096 1.23934 16.8771 1.25279C16.8447 1.26624 16.8152 1.28595 16.7903 1.3108C16.7655 1.33565 16.7457 1.36515 16.7323 1.39762C16.7189 1.43008 16.7119 1.46488 16.7119 1.50002V5.09942C16.7119 5.24702 16.8313 5.36642 16.9795 5.36642Z" fill="black"/>
                                        <path d="M5.90449 11.9766C6.719 11.9766 7.37929 11.3163 7.37929 10.5018C7.37929 9.68727 6.719 9.02698 5.90449 9.02698C5.08998 9.02698 4.42969 9.68727 4.42969 10.5018C4.42969 11.3163 5.08998 11.9766 5.90449 11.9766Z" fill="black"/>
                                        <path d="M10.1428 11.9766C10.9573 11.9766 11.6176 11.3163 11.6176 10.5018C11.6176 9.68727 10.9573 9.02698 10.1428 9.02698C9.32826 9.02698 8.66797 9.68727 8.66797 10.5018C8.66797 11.3163 9.32826 11.9766 10.1428 11.9766Z" fill="black"/>
                                        <path d="M14.3811 11.9766C15.1956 11.9766 15.8559 11.3163 15.8559 10.5018C15.8559 9.68727 15.1956 9.02698 14.3811 9.02698C13.5665 9.02698 12.9062 9.68727 12.9062 10.5018C12.9062 11.3163 13.5665 11.9766 14.3811 11.9766Z" fill="black"/>
                                        <path d="M5.90449 16.0836C6.719 16.0836 7.37929 15.4233 7.37929 14.6088C7.37929 13.7943 6.719 13.134 5.90449 13.134C5.08998 13.134 4.42969 13.7943 4.42969 14.6088C4.42969 15.4233 5.08998 16.0836 5.90449 16.0836Z" fill="black"/>
                                        <path d="M10.1428 16.0836C10.9573 16.0836 11.6176 15.4233 11.6176 14.6088C11.6176 13.7943 10.9573 13.134 10.1428 13.134C9.32826 13.134 8.66797 13.7943 8.66797 14.6088C8.66797 15.4233 9.32826 16.0836 10.1428 16.0836Z" fill="black"/>
                                        <path d="M14.3811 16.0836C15.1956 16.0836 15.8559 15.4233 15.8559 14.6088C15.8559 13.7943 15.1956 13.134 14.3811 13.134C13.5665 13.134 12.9062 13.7943 12.9062 14.6088C12.9062 15.4233 13.5665 16.0836 14.3811 16.0836Z" fill="black"/>
                                        <path d="M5.90449 20.1906C6.719 20.1906 7.37929 19.5303 7.37929 18.7158C7.37929 17.9013 6.719 17.241 5.90449 17.241C5.08998 17.241 4.42969 17.9013 4.42969 18.7158C4.42969 19.5303 5.08998 20.1906 5.90449 20.1906Z" fill="black"/>
                                        <path d="M10.1428 20.1906C10.9573 20.1906 11.6176 19.5303 11.6176 18.7158C11.6176 17.9013 10.9573 17.241 10.1428 17.241C9.32826 17.241 8.66797 17.9013 8.66797 18.7158C8.66797 19.5303 9.32826 20.1906 10.1428 20.1906Z" fill="black"/>
                                        <path d="M14.3811 20.1906C15.1956 20.1906 15.8559 19.5303 15.8559 18.7158C15.8559 17.9013 15.1956 17.241 14.3811 17.241C13.5665 17.241 12.9062 17.9013 12.9062 18.7158C12.9062 19.5303 13.5665 20.1906 14.3811 20.1906Z" fill="black"/>
                                        <path d="M18.5197 11.9766C19.3342 11.9766 19.9945 11.3163 19.9945 10.5018C19.9945 9.68727 19.3342 9.02698 18.5197 9.02698C17.7052 9.02698 17.0449 9.68727 17.0449 10.5018C17.0449 11.3163 17.7052 11.9766 18.5197 11.9766Z" fill="black"/>
                                        <path d="M18.5197 16.0836C19.3342 16.0836 19.9945 15.4233 19.9945 14.6088C19.9945 13.7943 19.3342 13.134 18.5197 13.134C17.7052 13.134 17.0449 13.7943 17.0449 14.6088C17.0449 15.4233 17.7052 16.0836 18.5197 16.0836Z" fill="black"/>
                                        <path d="M18.5197 20.1906C19.3342 20.1906 19.9945 19.5303 19.9945 18.7158C19.9945 17.9013 19.3342 17.241 18.5197 17.241C17.7052 17.241 17.0449 17.9013 17.0449 18.7158C17.0449 19.5303 17.7052 20.1906 18.5197 20.1906Z" fill="black"/>
                                    </svg>
                                    <span>Année</span>
                                </div>
                                <div>
                                    2019
                                </div>
                            </div>
                            <div class="carac">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                        <path d="M17.334 11.9166C19.1323 11.9166 20.5732 10.465 20.5732 8.66663C20.5732 6.86829 19.1323 5.41663 17.334 5.41663C15.5357 5.41663 14.084 6.86829 14.084 8.66663C14.084 10.465 15.5357 11.9166 17.334 11.9166ZM8.66732 11.9166C10.4657 11.9166 11.9065 10.465 11.9065 8.66663C11.9065 6.86829 10.4657 5.41663 8.66732 5.41663C6.86898 5.41663 5.41732 6.86829 5.41732 8.66663C5.41732 10.465 6.86898 11.9166 8.66732 11.9166ZM8.66732 14.0833C6.14315 14.0833 1.08398 15.3508 1.08398 17.875V20.5833H16.2507V17.875C16.2507 15.3508 11.1915 14.0833 8.66732 14.0833ZM17.334 14.0833C17.0198 14.0833 16.6623 14.105 16.2832 14.1375C17.5398 15.0475 18.4173 16.2716 18.4173 17.875V20.5833H24.9173V17.875C24.9173 15.3508 19.8582 14.0833 17.334 14.0833Z" fill="black"/>
                                    </svg>
                                    <span>Places</span>
                                </div>
                                <div>
                                    06
                                </div>
                            </div>
                            <div class="carac">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                        <path d="M19.2267 10L21.3333 14.6667H10.6667L12.56 10H19.2267ZM12 16C11.2667 16 10.6667 16.6 10.6667 17.3334C10.6667 18.0667 11.2667 18.6667 12 18.6667C12.7333 18.6667 13.3333 18.0667 13.3333 17.3334C13.3333 16.6 12.7333 16 12 16ZM20 16C19.2667 16 18.6667 16.6 18.6667 17.3334C18.6667 18.0667 19.2667 18.6667 20 18.6667C20.7333 18.6667 21.3333 18.0667 21.3333 17.3334C21.3333 16.6 20.7333 16 20 16ZM28 6.66671V14.6667C28 22.0667 22.88 28.9867 16 30.6667C9.12 28.9867 4 22.0667 4 14.6667V6.66671L16 1.33337L28 6.66671ZM24 16L21.12 9.33337C20.8533 8.56004 20.1067 8.00004 19.2267 8.00004H12.56C11.68 8.00004 10.9333 8.56004 10.6667 9.33337L8 16V21.3334C8 22.0667 8.6 22.6667 9.33333 22.6667H10.6667C11.4 22.6667 12 22.0667 12 21.3334V20H20V21.3334C20 22.0667 20.6 22.6667 21.3333 22.6667H22.6667C23.4 22.6667 24 22.0667 24 21.3334V16Z" fill="black"/>
                                    </svg>
                                    <span>Quotion</span>
                                </div>
                                <div>
                                    82 000 Fr
                                </div>
                            </div>
                            <div class="carac">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M25.6673 14C25.6673 20.4435 20.4442 25.6667 14.0007 25.6667C7.55715 25.6667 2.33398 20.4435 2.33398 14C2.33398 7.55654 7.55715 2.33337 14.0007 2.33337C20.4442 2.33337 25.6673 7.55654 25.6673 14ZM9.33398 9.62504C9.56605 9.62504 9.78861 9.71723 9.9527 9.88132C10.1168 10.0454 10.209 10.268 10.209 10.5V13.125H13.1257V10.5C13.1257 10.268 13.2178 10.0454 13.3819 9.88132C13.546 9.71723 13.7686 9.62504 14.0007 9.62504C14.2327 9.62504 14.4553 9.71723 14.6194 9.88132C14.7835 10.0454 14.8757 10.268 14.8757 10.5V13.125H15.1673C15.7227 13.125 16.096 13.125 16.3842 13.1052C16.6653 13.0854 16.8018 13.0515 16.8917 13.0142C17.2498 12.866 17.5333 12.5825 17.6815 12.2244C17.7188 12.1345 17.7527 11.998 17.7725 11.7169C17.7923 11.4287 17.7923 11.0554 17.7923 10.5C17.7923 10.268 17.8845 10.0454 18.0486 9.88132C18.2127 9.71723 18.4353 9.62504 18.6673 9.62504C18.8994 9.62504 19.1219 9.71723 19.286 9.88132C19.4501 10.0454 19.5423 10.268 19.5423 10.5V10.5292C19.5423 11.0484 19.5423 11.4812 19.519 11.8359C19.5039 12.1984 19.429 12.5559 19.2973 12.894C19.1362 13.2834 18.9 13.6372 18.6021 13.9353C18.3043 14.2334 17.9506 14.4698 17.5613 14.6312C17.223 14.7712 16.873 14.826 16.5032 14.8505C16.1485 14.875 15.7157 14.875 15.1965 14.875H14.8757V17.5C14.8757 17.7321 14.7835 17.9547 14.6194 18.1188C14.4553 18.2829 14.2327 18.375 14.0007 18.375C13.7686 18.375 13.546 18.2829 13.3819 18.1188C13.2178 17.9547 13.1257 17.7321 13.1257 17.5V14.875H10.209V17.5C10.209 17.7321 10.1168 17.9547 9.9527 18.1188C9.78861 18.2829 9.56605 18.375 9.33398 18.375C9.10192 18.375 8.87936 18.2829 8.71527 18.1188C8.55117 17.9547 8.45898 17.7321 8.45898 17.5V10.5C8.45898 10.3851 8.48162 10.2714 8.52559 10.1652C8.56956 10.059 8.63402 9.96257 8.71527 9.88132C8.79652 9.80007 8.89298 9.73562 8.99914 9.69165C9.1053 9.64767 9.21908 9.62504 9.33398 9.62504Z" fill="black"/>
                                    </svg>
                                    <span>Transmission</span>
                                </div>
                                <div>
                                    Automatique
                                </div>
                            </div>
                        </div>
                        <form>
                            <h2>Récapitulatif</h2>
                            <div class="form-group">
                                <label for="lieu">
                                    <span>Lieu</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="22" viewBox="0 0 17 22" fill="none">
                                        <path d="M8.4 10.322C7.60435 10.322 6.84129 10.0501 6.27868 9.56604C5.71607 9.08198 5.4 8.42546 5.4 7.7409C5.4 7.05634 5.71607 6.39982 6.27868 5.91577C6.84129 5.43171 7.60435 5.15977 8.4 5.15977C9.19565 5.15977 9.95871 5.43171 10.5213 5.91577C11.0839 6.39982 11.4 7.05634 11.4 7.7409C11.4 8.07986 11.3224 8.4155 11.1716 8.72866C11.0209 9.04182 10.7999 9.32636 10.5213 9.56604C10.2427 9.80572 9.91203 9.99584 9.54805 10.1256C9.18407 10.2553 8.79397 10.322 8.4 10.322ZM8.4 0.513733C6.17218 0.513733 4.03561 1.27516 2.4603 2.63052C0.884997 3.98588 0 5.82414 0 7.7409C0 13.1613 8.4 21.1628 8.4 21.1628C8.4 21.1628 16.8 13.1613 16.8 7.7409C16.8 5.82414 15.915 3.98588 14.3397 2.63052C12.7644 1.27516 10.6278 0.513733 8.4 0.513733Z" fill="black" fill-opacity="0.71"/>
                                    </svg>
                                </label>
                                <select name="lieu" id="lieu">
                                    <option value="" selected hidden>Choisir un lieu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="date_debut">
                                    <span>Date de début</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                        <path d="M24.5 23.3333V6.99998C24.5 5.71315 23.4535 4.66665 22.1667 4.66665H19.8333V2.33331H17.5V4.66665H10.5V2.33331H8.16667V4.66665H5.83333C4.5465 4.66665 3.5 5.71315 3.5 6.99998V23.3333C3.5 24.6201 4.5465 25.6666 5.83333 25.6666H22.1667C23.4535 25.6666 24.5 24.6201 24.5 23.3333ZM10.5 21H8.16667V18.6666H10.5V21ZM10.5 16.3333H8.16667V14H10.5V16.3333ZM15.1667 21H12.8333V18.6666H15.1667V21ZM15.1667 16.3333H12.8333V14H15.1667V16.3333ZM19.8333 21H17.5V18.6666H19.8333V21ZM19.8333 16.3333H17.5V14H19.8333V16.3333ZM22.1667 10.5H5.83333V8.16665H22.1667V10.5Z" fill="black" fill-opacity="0.71"/>
                                    </svg>
                                </label>
                                <input type="date" name="date_debut" id="date_debut">
                            </div>
                            <div class="form-group">
                                <label for="date_fin">
                                    <span>Date de fin</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                        <path d="M24.5 23.3334V7.00004C24.5 5.71321 23.4535 4.66671 22.1667 4.66671H19.8333V2.33337H17.5V4.66671H10.5V2.33337H8.16667V4.66671H5.83333C4.5465 4.66671 3.5 5.71321 3.5 7.00004V23.3334C3.5 24.6202 4.5465 25.6667 5.83333 25.6667H22.1667C23.4535 25.6667 24.5 24.6202 24.5 23.3334ZM10.5 21H8.16667V18.6667H10.5V21ZM10.5 16.3334H8.16667V14H10.5V16.3334ZM15.1667 21H12.8333V18.6667H15.1667V21ZM15.1667 16.3334H12.8333V14H15.1667V16.3334ZM19.8333 21H17.5V18.6667H19.8333V21ZM19.8333 16.3334H17.5V14H19.8333V16.3334ZM22.1667 10.5H5.83333V8.16671H22.1667V10.5Z" fill="black" fill-opacity="0.71"/>
                                    </svg>
                                </label>
                                <input type="date" name="date_debut" id="date_fin">
                            </div>
                            <div class="extra">
                                <hr>
                                <span>Extras</span>
                                <hr>
                            </div>
                            <div class="choice">
                                <input type="checkbox" name="avec_chauffeur" id="avec_chauffeur">
                                <label for="avec_chauffeur">Avec chauffeur</label>
                            </div>
                            <div class="choice">
                                <input type="checkbox" name="siege_enfant" id="siege_enfant">
                                <label for="siege_enfant">Siège enfant</label>
                            </div>
                            <div class="buttons">
                                <button type="submit">Valider</button>
                                <button type="submit" id="price-button">125.000Fr</button>
                            </div>
                        </form>
                    </div>
                </section>
            </main>
            <footer>
                <div>
                    <section class="description">
                        <h1>Auto<span>Rent.</span></h1>
                        <p>
                            Le choix incontesté des connaisseurs en matière de location de véhicules. Nous ne sommes pas simplement un service, nous sommes une expérience.
                        </p>
                    </section>
                    <section class="contact">
                        <h1 class="middle-underline">Contact</h1>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                <path d="M13.0001 12.4582C12.2818 12.4582 11.5929 12.1728 11.085 11.6649C10.5771 11.157 10.2917 10.4681 10.2917 9.74984C10.2917 9.03154 10.5771 8.34267 11.085 7.83476C11.5929 7.32685 12.2818 7.0415 13.0001 7.0415C13.7184 7.0415 14.4073 7.32685 14.9152 7.83476C15.4231 8.34267 15.7084 9.03154 15.7084 9.74984C15.7084 10.1055 15.6384 10.4577 15.5023 10.7863C15.3661 11.1149 15.1667 11.4134 14.9152 11.6649C14.6637 11.9164 14.3651 12.1159 14.0365 12.252C13.7079 12.3881 13.3557 12.4582 13.0001 12.4582ZM13.0001 2.1665C10.9889 2.1665 9.06001 2.96546 7.63786 4.38761C6.2157 5.80976 5.41675 7.73861 5.41675 9.74984C5.41675 15.4373 13.0001 23.8332 13.0001 23.8332C13.0001 23.8332 20.5834 15.4373 20.5834 9.74984C20.5834 7.73861 19.7845 5.80976 18.3623 4.38761C16.9402 2.96546 15.0113 2.1665 13.0001 2.1665Z" fill="black"/>
                            </svg>
                            <p>
                                Arconville, Zopah lot 122 parcelle R
                            </p>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                <path d="M21.6667 4.3335H4.33341C3.14175 4.3335 2.17758 5.3085 2.17758 6.50016L2.16675 19.5002C2.16675 20.6918 3.14175 21.6668 4.33341 21.6668H21.6667C22.8584 21.6668 23.8334 20.6918 23.8334 19.5002V6.50016C23.8334 5.3085 22.8584 4.3335 21.6667 4.3335ZM21.6667 8.66683L13.0001 14.0835L4.33341 8.66683V6.50016L13.0001 11.9168L21.6667 6.50016V8.66683Z" fill="black"/>
                            </svg>
                            <p>
                                inoussalouqmane@gmail.com
                            </p>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M4.82667 10.3867C6.74667 14.16 9.84 17.24 13.6133 19.1733L16.5467 16.24C16.9067 15.88 17.44 15.76 17.9067 15.92C19.4 16.4133 21.0133 16.68 22.6667 16.68C23.4 16.68 24 17.28 24 18.0133V22.6667C24 23.4 23.4 24 22.6667 24C10.1467 24 0 13.8533 0 1.33333C0 0.6 0.6 0 1.33333 0H6C6.73333 0 7.33333 0.6 7.33333 1.33333C7.33333 3 7.6 4.6 8.09333 6.09333C8.24 6.56 8.13333 7.08 7.76 7.45333L4.82667 10.3867Z" fill="black"/>
                            </svg>
                            <p>
                                +229 61 78 62 22
                            </p>
                        </div>
                    </section>
                    <section class="liens-utiles">
                        <h1 class="middle-underline">Liens utiles</h1>
                        <div>
                            <a href="#">Explorer</a>
                            <a href="#">Give-back</a>
                            <a href="#">Contactez-nous</a>
                        </div>
                    </section>
                </div>
                <hr>
                <p id="copyrigth">
                    @Copywrite. All Rights Reserved
                </p>
            </footer>
        </div>
    </body>
</html>
