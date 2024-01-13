<article>
    <a href="{{ route("presentation_voiture",$vehicule->id) }}">
        <div class="image">
            <img src="{{ asset('assets/img/voiture31.png') }}" alt="">
            <button class="add-to-favorite">❤️</button>
        </div>
        <p class="annee">
            <span>
                {{ $vehicule->annee }}
            </span>
        </p>
        <p class="nom-vehicule">
            {{ $vehicule->nom }}
        </p>
        <p class="location-prix">
            {{ $vehicule->prix_location }}<span>/ jour</span>
        </p>
        <hr>
        <div class="ligne">
            <div class="users">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="28" viewBox="0 0 32 28" fill="none">
                    <path d="M21.3333 13.0729C23.5467 13.0729 25.32 11.5682 25.32 9.70415C25.32 7.84014 23.5467 6.33545 21.3333 6.33545C19.12 6.33545 17.3333 7.84014 17.3333 9.70415C17.3333 11.5682 19.12 13.0729 21.3333 13.0729ZM10.6667 13.0729C12.88 13.0729 14.6533 11.5682 14.6533 9.70415C14.6533 7.84014 12.88 6.33545 10.6667 6.33545C8.45334 6.33545 6.66668 7.84014 6.66668 9.70415C6.66668 11.5682 8.45334 13.0729 10.6667 13.0729ZM10.6667 15.3187C7.56001 15.3187 1.33334 16.6325 1.33334 19.2488V22.0561H20V19.2488C20 16.6325 13.7733 15.3187 10.6667 15.3187ZM21.3333 15.3187C20.9467 15.3187 20.5067 15.3411 20.04 15.3748C21.5867 16.318 22.6667 17.5869 22.6667 19.2488V22.0561H30.6667V19.2488C30.6667 16.6325 24.44 15.3187 21.3333 15.3187Z" fill="black" fill-opacity="0.81"/>
                </svg>
                <span>{{ $vehicule->nombre_places }}</span>
            </div>
            <div class="manual">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="24" viewBox="0 0 22 24" fill="none">
                    <path d="M13.3333 9.24752V17.1078M8.66666 9.24752V17.1078M6.33332 5.31736C6.33332 6.3597 6.82499 7.35935 7.70016 8.0964C8.57533 8.83345 9.76231 9.24752 11 9.24752C12.2377 9.24752 13.4247 8.83345 14.2998 8.0964C15.175 7.35935 15.6667 6.3597 15.6667 5.31736C15.6667 4.27502 15.175 3.27537 14.2998 2.53832C13.4247 1.80128 12.2377 1.38721 11 1.38721C9.76231 1.38721 8.57533 1.80128 7.70016 2.53832C6.82499 3.27537 6.33332 4.27502 6.33332 5.31736ZM1.66666 23.0031H20.3333V20.0554H1.66666V23.0031ZM5.16666 20.0554H16.8333V17.1078H5.16666V20.0554Z" stroke="black" stroke-opacity="0.81" stroke-width="2"/>
                </svg>
                <span>{{ $vehicule->transmission }}</span>
            </div>
            <div class="gasoil">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="28" viewBox="0 0 32 28" fill="none">
                    <g clip-path="url(#clip0_229_17)">
                      <path d="M29.8667 11.5008V21.3823C29.8667 21.6206 29.7543 21.8491 29.5542 22.0175C29.3542 22.186 29.0829 22.2806 28.8 22.2806C28.5171 22.2806 28.2458 22.186 28.0457 22.0175C27.8457 21.8491 27.7333 21.6206 27.7333 21.3823V17.789C27.7333 17.0743 27.3962 16.3888 26.7961 15.8834C26.196 15.378 25.382 15.0941 24.5333 15.0941H21.3333V4.31422C21.3333 3.83772 21.1086 3.38074 20.7085 3.0438C20.3084 2.70687 19.7658 2.51758 19.2 2.51758H6.4C5.8342 2.51758 5.29158 2.70687 4.8915 3.0438C4.49142 3.38074 4.26666 3.83772 4.26666 4.31422V24.0773C4.26666 24.5538 4.49142 25.0108 4.8915 25.3477C5.29158 25.6846 5.8342 25.8739 6.4 25.8739H19.2C19.7658 25.8739 20.3084 25.6846 20.7085 25.3477C21.1086 25.0108 21.3333 24.5538 21.3333 24.0773V16.8907H24.5333C24.8162 16.8907 25.0875 16.9854 25.2876 17.1538C25.4876 17.3223 25.6 17.5508 25.6 17.789V21.3823C25.6 22.0971 25.9371 22.7825 26.5373 23.2879C27.1374 23.7934 27.9513 24.0773 28.8 24.0773C29.6487 24.0773 30.4626 23.7934 31.0627 23.2879C31.6629 22.7825 32 22.0971 32 21.3823V9.70415C32 9.22765 31.7752 8.77066 31.3752 8.43373C30.9751 8.09679 30.4325 7.9075 29.8667 7.9075V5.19457C29.8611 4.95945 29.7462 4.73555 29.5468 4.57095C29.3474 4.40635 29.0792 4.31417 28.8 4.31422C28.6514 4.31629 28.505 4.34395 28.3696 4.39551C28.2342 4.44708 28.1129 4.52144 28.0129 4.61402C27.913 4.7066 27.8366 4.81544 27.7885 4.93383C27.7404 5.05221 27.7217 5.17764 27.7333 5.30237V9.70415C27.7333 10.0595 27.8584 10.4069 28.0929 10.7023C28.3273 10.9978 28.6605 11.228 29.0503 11.364C29.4401 11.5 29.869 11.5356 30.2829 11.4663C30.6967 11.3969 31.0768 11.2258 31.3752 10.9746C31.6735 10.7233 31.8767 10.4032 31.959 10.0547C32.0413 9.70614 31.9991 9.34489 31.8376 9.0166C31.6761 8.68831 31.4027 8.40771 31.0519 8.21029C30.7011 8.01288 30.2886 7.9075 29.8667 7.9075V11.5008ZM19.2 12.3991C19.2 12.6374 19.0876 12.8659 18.8876 13.0343C18.6875 13.2028 18.4162 13.2974 18.1333 13.2974H7.46666C7.18377 13.2974 6.91245 13.2028 6.71242 13.0343C6.51238 12.8659 6.4 12.6374 6.4 12.3991V7.00918C6.4 6.77093 6.51238 6.54244 6.71242 6.37397C6.91245 6.20551 7.18377 6.11086 7.46666 6.11086H18.1333C18.4162 6.11086 18.6875 6.20551 18.8876 6.37397C19.0876 6.54244 19.2 6.77093 19.2 7.00918V12.3991Z" fill="black" fill-opacity="0.81"/>
                    </g>
                    <defs>
                      <clipPath id="clip0_229_17">
                        <rect width="32" height="26.9496" fill="white" transform="translate(0 0.720703)"/>
                      </clipPath>
                    </defs>
                  </svg>
                <span>{{ $vehicule->carburant }}</span>
            </div>
        </div>
        <a href="#">Réserver</a>
    </a>
</article>
