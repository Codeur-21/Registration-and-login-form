{{-- Structure statique : tous les formulaires et panneaux sont présents. --}}
<div  x-data="{login:true,register:false}" class="auth-container">

  {{-- COLONNE GAUCHE : FORMULAIRES --}}
  <section  class="form-panel min-w-0">
    <div class="auth-tabs">
      <button @click="login=true; register=false" type="button" class="auth-tab" :class="{active: login}" >
        Connexion
      </button>
      <button @click="register=true; login=false" type="button" class="auth-tab" :class="{active: register}" >
        Inscription
      </button>
    </div>

    {{-- FORMULAIRE DE CONNEXION --}}

    <section x-show="login">
    <form wire:sumbit="login" class="auth-form">
      <div>
        <h2>Bon retour 👋</h2>
        <p class="auth-description mt-6">Connectez-vous à votre compte</p>
      </div>

      <div class="auth-field">
        <label for="email">Adresse email</label>
        <input id="email" wire:model="email" type="email" class="auth-input" placeholder="vous@exemple.com"
          autocomplete="email">

          @error('email')
                <div class="bg-red-500 text-white font-bold p-1 m-1">
                        {{message}}
               </div>

          @enderror
      </div>

      <div class="auth-field">
        <label for="password">Mot de passe</label>
        <div class="relative">
          <input id="password" type="password" wire:model="password" class="auth-input pr-12" placeholder="••••••••"
            autocomplete="current-password">
          <button type="button" aria-label="Afficher le mot de passe"
            class="absolute inset-y-0 right-4 flex items-center text-slate-400 hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
              stroke-linecap="round" stroke-linejoin="round">
              <path
                d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
              <circle cx="12" cy="12" r="3" />
            </svg>
          </button>


        </div>
         @error('password')
                <div class="bg-red-500 text-white font-bold p-1 m-1">
                        {{message}}
               </div>

          @enderror
      </div>

      <button type="submit" class="auth-submit">Se connecter</button>
    </form>
    </section>

    {{-- FORMULAIRE D'INSCRIPTION --}}
    <section  x-show="register" x-cloak >
        <form  class="auth-form">
        <div>
            <h2>Créer un compte ✨</h2>
            <p class="auth-description mt-6">Rejoignez-nous en quelques secondes</p>
        </div>

        <div class="auth-field">
            <label for="register-name">Nom complet</label>
            <input id="register-name" type="text" class="auth-input" placeholder="Votre nom complet"
            autocomplete="name">
        </div>

        <div class="auth-field">
            <label for="register-email">Adresse email</label>
            <input id="register-email" type="email" class="auth-input" placeholder="vous@exemple.com"
            autocomplete="email">
        </div>

        <div class="auth-field">
            <label for="register-password">Mot de passe</label>
            <div class="relative">
            <input id="register-password" type="password" class="auth-input pr-12"
                placeholder="••••••••" autocomplete="new-password">
            <button type="button" aria-label="Afficher le mot de passe"
                class="absolute inset-y-0 right-4 flex items-center text-slate-400 hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                stroke-linecap="round" stroke-linejoin="round">
                <path
                    d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                <circle cx="12" cy="12" r="3" />
                </svg>
            </button>
            </div>
        </div>

        <div class="auth-field">
            <label for="register-password-confirmation">Confirmer le mot de passe</label>
            <input id="register-password-confirmation" type="password" class="auth-input"
            placeholder="Confirmez votre mot de passe" autocomplete="new-password">
        </div>

        <div class="auth-field">
            <label for="register-bio">Biographie</label>
            <textarea id="register-bio" rows="3" class="auth-input resize-none"
            placeholder="Quelques mots sur vous..."></textarea>
        </div>

        <div class="auth-field">
            <label for="register-avatar">Photo de profil</label>
            <input id="register-avatar" type="file" accept="image/*" class="auth-input">
        </div>

        <button type="submit" class="auth-submit">S'inscrire</button>
        </form>

    </section>
  </section>

  {{-- COLONNE DROITE : UN SEUL PANNEAU OCCUPE LA CASE DE GRILLE --}}
  <div class="relative min-w-0 overflow-hidden">
    {{-- Connexion : image plein panneau --}}
    <section  x-show="login" class="preview-panel preview-login">
      <img src="{{ asset('bouclier.png') }}" alt="Connexion sécurisée"
        class="login-cover">
    </section>

    {{-- Inscription : aperçu du profil --}}
    <section  x-show="register" x-cloak class="preview-panel preview-register">
      <div class="preview-card">
        <div class="preview-header">
          <span class="preview-badge">Aperçu du profil</span>
          <h2>Votre futur profil</h2>
          <p>Découvrez comment vos informations apparaîtront sur votre profil.</p>
        </div>
        <div class="preview-avatar">?</div>
        <h3 class="preview-name">Votre nom complet</h3>
        <p class="preview-email">votre@email.com</p>
        <div class="preview-section">
          <span class="preview-label">Biographie</span>
          <div class="preview-bio">Votre biographie apparaîtra ici...</div>
        </div>
        <div class="preview-account">
          <h4>Informations du compte</h4>
          <div class="preview-account-row">
            <span>Adresse email</span>
            <span class="preview-account-value">Non renseignée</span>
          </div>
          <div class="preview-account-row">
            <span>Mot de passe</span>
            <span class="preview-status"><span class="preview-status-dot"></span>À vérifier</span>
          </div>
          <div class="preview-account-row">
            <span>Confirmation</span>
            <span class="preview-status"><span class="preview-status-dot"></span>En attente</span>
          </div>
          <div class="preview-account-row">
            <span>Photo de profil</span>
            <span class="preview-account-value">Non ajoutée</span>
          </div>
        </div>
        <div class="preview-footer">
          <span class="preview-footer-dot"></span>
          Profil en cours de création
        </div>
      </div>
    </section>
  </div>
</div>
