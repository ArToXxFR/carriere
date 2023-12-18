<header>
    <img src="{{ asset('mining.svg') }}" alt="logo de la mine">
    <ul>
        <a href="{{ route('home') }}">
            <li>Accueil</li>
        </a>
        <a href="{{ route('user.create.form') }}">
            <li>Ajouter utilisateur</li>
        </a>
        <a href="{{ route('user.show.all') }}">
            <li>Lister utilisateurs</li>
        </a>
        <li>A propos</li>
    </ul>
</header>