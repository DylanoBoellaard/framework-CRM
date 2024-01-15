<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Klantenlijst') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('klantenlijst.store') }}" method="post" class="">
                        @csrf
                        <div class="inputContainer">
                            <label for="Bedrijf">Bedrijf:</label>
                            <select name="Bedrijf" id="Bedrijf" class="bg-white dark:bg-gray-800">
                                <option value='0'>Nee</option>
                                <option value='1'>Ja</option>
                            </select>

                            <!-- [Only show bedrijfsnummer & kvk nummer when user selects 'ja' option] -->
                            <div id="bedrijfFields" style="display: none;">
                                <label for="Bedrijfsnaam">Bedrijfsnaam:</label>
                                <input type="text" name="Bedrijfsnaam" id="Bedrijfsnaam" class="bg-white dark:bg-gray-800">

                                <label for="KVKNummer">KVK nummer:</label>
                                <input type="text" name="KVKNummer" id="KVKNummer" class="bg-white dark:bg-gray-800">
                            </div>

                            <!-- [Only show these input fields when user selects 'nee' option] -->
                            <div id="klantFields">
                                <label for="Voornaam">Voornaam:</label>
                                <input type="text" name="Voornaam" id="Voornaam" class="bg-white dark:bg-gray-800">

                                <label for="Achternaam">Achternaam:</label>
                                <input type="text" name="Achternaam" id="Achternaam" class="bg-white dark:bg-gray-800">

                                <label for="Straat">Straat:</label>
                                <input type="text" name="Straat" id="Straat" class="bg-white dark:bg-gray-800">

                                <label for="Huisnummer">Huisnummer:</label>
                                <input type="text" name="Huisnummer" id="Huisnummer" class="bg-white dark:bg-gray-800">

                                <label for="Postcode">Postcode:</label>
                                <input type="text" name="Postcode" id="Postcode" class="bg-white dark:bg-gray-800">

                                <label for="Plaats">Plaats:</label>
                                <input type="text" name="Plaats" id="Plaats" class="bg-white dark:bg-gray-800">

                                <label for="Email">Email:</label>
                                <input type="text" name="Email" id="Email" class="bg-white dark:bg-gray-800">

                                <label for="Telefoonnummer">Telefoonnummer:</label>
                                <input type="text" name="Telefoonnummer" id="Telefoonnummer" class="bg-white dark:bg-gray-800">

                                <label for="Functie">Functie:</label>
                                <input type="text" name="Functie" id="Functie" class="bg-white dark:bg-gray-800">

                            </div>
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('Bedrijf').addEventListener('change', function() {
            var bedrijfsFields = document.getElementById('bedrijfFields');
            var nonBedrijfsFields = document.getElementById('klantFields');

            if (this.value === '1') {
                bedrijfsFields.style.display = 'block';
                nonBedrijfsFields.style.display = 'none';
            } else {
                bedrijfsFields.style.display = 'none';
                nonBedrijfsFields.style.display = 'block';
            }
        });
    </script>
</x-app-layout>