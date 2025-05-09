<div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
    <select id="language-select" class="block w-auto px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-500 focus:border-indigo-500 ">
        @foreach($available_locales as $locale_name => $available_locale)
            <option value="{{ $available_locale }}" @if($available_locale === $current_locale) selected @endif>{{ $locale_name }}</option>
        @endforeach
    </select>
</div>
<script>
    // Récupérer l'élément select
    const languageSelect = document.getElementById('language-select');
    
    // Ajouter un écouteur d'événements pour détecter les changements de sélection
    languageSelect.addEventListener('change', function() {
        // Récupérer la valeur sélectionnée (la nouvelle langue)
        const newLocale = this.value;
        // Rediriger vers l'URL correspondante pour changer la langue
        window.location.href = `language/${newLocale}`;
    });
</script>