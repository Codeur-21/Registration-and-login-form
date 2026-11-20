<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Authentification' }}</title>


    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <style>
        [x-cloak] {
            display: none !important;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            background: #19192d;
            color: white;
            font-family: system-ui, sans-serif;
        }

        .auth-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            width: 100%;
            max-width: 1125px;
            min-height: 680px;
            overflow: hidden;
            border-radius: 25px;
            background: #182340;
            box-shadow: 0 25px 70px rgba(0, 0, 0, .35);
        }

        .form-panel {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 50px;
        }

        .auth-tabs {
            display: flex;
            gap: 12px;
            margin-bottom: 40px;
        }

        .auth-tab {
            flex: 1;
            padding: 16px;
            border: 2px solid #123b6c;
            border-radius: 12px;
            background: transparent;
            color: #a0a5ba;
            font-weight: 600;
            cursor: pointer;
            transition: .25s;
        }

        .auth-tab.active {
            border-color: #e94560;
            background: #e94560;
            color: white;
        }


        .auth-tab:hover:not(.active) {
            border-color: #e94560;
            color: white;
        }

        .auth-form {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .auth-form h2 {
            margin: 0;
            font-size: 30px;
            font-weight: 700;
        }

        .auth-description {
            margin: 0 0 12px;
            color: #a2a8bf;
        }

        .auth-field {
            display: flex;
            flex-direction: column;
            gap: 9px;
        }

        .auth-field label {
            color: #c9d2e7;
            font-size: 14px;
        }

        .auth-input {
            width: 100%;
            padding: 16px 18px;
            border: 2px solid transparent;
            border-radius: 12px;
            outline: none;
            background: #153b6b;
            color: white;
            transition: border-color .2s;
        }

        .auth-input::placeholder {
            color: #7787ae;
        }

        .auth-input:focus {
            border-color: #e94560;
        }

        .auth-submit {
            margin-top: 10px;
            padding: 17px;
            border: none;
            border-radius: 12px;
            background: #e94560;
            color: white;
            font-weight: 700;
            cursor: pointer;
            transition: .25s;
        }

        .auth-submit:hover {
            background: #fa526d;
        }

        .preview-panel {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 45px;
            background: linear-gradient(
                145deg,
                #e94560 0%,
                #a83d75 48%,
                #533483 100%
            );
        }

        .preview-card {
            width: 100%;
            max-width: 400px;
            padding: 40px 35px;
            border: 1px solid rgba(255, 255, 255, .25);
            border-radius: 20px;
            background: rgba(255, 255, 255, .12);
            backdrop-filter: blur(15px);
            text-align: center;
        }

        .preview-avatar {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100px;
            height: 100px;
            margin: 0 auto 28px;
            border: 3px solid rgba(255, 255, 255, .45);
            border-radius: 50%;
            background: rgba(255, 255, 255, .18);
            color: white;
            font-size: 42px;
            font-weight: 700;
        }

        .preview-name {
            margin-bottom: 8px;
            font-size: 24px;
            font-weight: 700;
        }

        .preview-email {
            color: rgba(255, 255, 255, .7);
            font-size: 14px;
        }

        .preview-bio {
            margin-top: 25px;
            padding: 20px;
            border-radius: 14px;
            background: rgba(0, 0, 0, .15);
            color: rgba(255, 255, 255, .7);
            font-size: 14px;
        }
        {{-- PANNEAU DROIT : CONNEXION --}}
<section class="preview-panel preview-login">

    <img
        src="{{ asset('bouclier.png') }}"
        alt="Illustration de connexion s?curis?e"
        class="login-cover"
    >

</section>

        @media (max-width: 768px) {
    .preview-login {
        min-height: 350px;
    }
}

        @media (max-width: 768px) {
            body {
                padding: 14px;
            }

            .auth-container {
                grid-template-columns: 1fr;
            }

            .form-panel {
                padding: 32px 24px;
            }

            .preview-panel {
                padding: 35px 24px;
            }

            .preview-card {
                padding: 30px 20px;
            }
        }
    </style>
</head>

<body>

    {{ $slot }}

    @livewireScripts

</body>
</html>
