<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    </head>
    <body>

        <h1>Les réunions</h1>

        <div class="container">
            <div class="title">
                <div class="name">Nom</div>
                <div class="slot">horaire</div>
                <div class="employes">Parcticipants</div>
            </div>
            @forelse ( $meets as $meet )
                <div class="content">
                    <div class="name">{{ $meet->name}}</div>
                    <div class="slot">{{ $meet->slot->day}} {{ $meet->slot->hour}}</div>
                    <div class="employes">                       
                        @foreach ( $meet->employes as $employe )
                        <ul>
                            <li>{{ $employe->nom }}</li>
                        </ul>
                        @endforeach
                    </div>
                </div>
                @empty
                    <p>Aucune réunion créee</p>
            @endforelse
        </div>

    <h2> Créer une réunion</h2>

        <form id="meet-form" method="POST" action="{{ route('meet.store') }}">
            @csrf
            <div class="abc">
                <div class="meet-field">
                    <label for="nom de la réunion">Nom de la réunion</label>
                    <input type="text" name="name">
                </div>

                <div class="meet-field">
                    <label for="participants">Sélectionner les participants</label>
                    <select name="employes[]" multiple>
                        @foreach ($employes as $employe)
                            <option value="{{ $employe->id }}">{{ $employe->nom }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <button type="submit">Créer</button>
            @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div> {{ $error }}</div>
            @endforeach
        @endif

        </form>
    </body>
</html>