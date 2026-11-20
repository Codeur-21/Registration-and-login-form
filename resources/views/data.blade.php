  {{-- <div x-data="{ ouvert: false }">

        <button @click="ouvert = !ouvert">
            Afficher le menu
        </button>

        <div x-show="ouvert">
            Bienvenue dans mon dashboard !
        </div>

    </div> --}}

    <hr>
  <div x-data="{ declencher: false }">

            <button x-on:click="declencher = !declencher">
                Declencher l'événement
            </button>

            <div x-show="declencher">
                L'événement a été déclenché !
            </div>

        </div>

        <hr>
        <div x-data="{ showPassword: false, passwordView:true }">

            <button x-on:click="showPassword =!showPassword">Afficher le mot de passe</button>

            <div x-show="showPassword">
                <b>
                    mot de passe
                </b>
                <input :type="passwordView ? 'password':'text'" x-model="password">

            </div>
            <button x-on:click="passwordView =!passwordView">Afficher le mot de passe</button>



        </div>

    {{-- <div x-data="{
            nom: 'Naruto',
            age: 20,
            actif: true
        }">
            <p x-text="nom"></p>
            <p x-text="age"></p>
            <p x-text="actif"></p>
        </div>

        <hr>
        <div x-data="{ actif: true }">

            <p x-text="actif ? 'Compte actif' : 'Compte désactivé'">
            </p>

            <button @click="actif = !actif">
                Changer le statut
            </button>

        </div>

        <hr>

        <div x-data="{
            compteur: 0,

            incrementer() {
                this.compteur++;
            },

            decrementer() {
                this.compteur--;
            },

            reinitialiser() {
                this.compteur = 0;
            }
        }">

            <h1 x-text="compteur"></h1>

            <button @click="incrementer()">+</button>
            <button @click="decrementer()">-</button>
            <button @click="reinitialiser()">Réinitialiser</button>

        </div> --}}

    <hr>


    <div x-data="{
        stock: 10,

        retirer() {
            if (this.stock > 0) {
                this.stock--;
            }
        },

        ajouter() {
            this.stock++;
        }
    }">

        <p class="text-2xl font-bold" x-text="stock"></p>

        <p x-show="stock=== 0">
            Stock épuisé
        </p>

        <button @click="retirer()">Retirer</button>

        <button @click="ajouter()">Ajouter</button>

    </div>

    <hr>

    <div x-data="{
        nom: '',
        email: '',
        password: '',
        message: '',
        succes: false,

        inscrire() {
            if (
                this.nom.trim() === '' ||
                this.email.trim() === '' ||
                this.password === ''
            ) {
                this.succes = false;
                this.message = 'Veuillez remplir tous les champs';
            } else {
                this.succes = true;
                this.message = 'Formulaire validé avec succès';
            }
        }
    }">

        <input type="text" x-model="nom" placeholder="Nom">

        <input type="email" x-model="email" placeholder="Email">

        <input type="password" x-model="password" placeholder="Mot de passe">

        <button type="button" @click="inscrire()">
            Enregistrer
        </button>

        <p x-text="nom"></p>
        <p x-text="email"></p>

        <p x-show="message !== ''" x-text="message" :class="succes ? 'text-green-600' : 'text-red-600'"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform scale-95"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-100"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-95"></p>

    </div>

    <hr>
    <b>
        donne de test
    </b>
    <div x-data="{
        nom: '',
        email: '',
        password: '',
        message: '',
        succes: false,
        soumis: false,

        inscrire() {
            this.soumis = true;

            if (
                this.nom.trim() === '' ||
                this.email.trim() === '' ||
                this.password.length < 8
            ) {
                this.succes = false;
                this.message = 'Veuillez corriger les erreurs';
            } else {
                this.succes = true;
                this.message = 'Formulaire validé avec succès';
            }
        }
    }">

        <input type="text" x-model="nom" placeholder="Nom">

        <p x-show="soumis && nom.trim() === ''" class="text-red-600">
            Nom obligatoire
        </p>

        <input type="email" x-model="email" placeholder="Email">

        <p x-show="soumis && email.trim() === ''" class="text-red-600">
            Email obligatoire
        </p>

        <input type="password" x-model="password" placeholder="Mot de passe">

        <p x-show="soumis && password.length < 8" class="text-red-600">
            Mot de passe trop court (8 caractères minimum)
        </p>

        <button type="button" @click="inscrire()">
            Enregistrer
        </button>

        <p x-show="message !== ''" x-text="message" :class="succes ? 'text-green-600' : 'text-red-600'">
        </p>

    </div>