<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Infinite FIFA NFT</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link rel="preload" href="{{ asset('assets/fonts/Black Bison.otf') }}" as="font" type="font" crossorigin>
    {{-- CSS --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" /> --}}
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/6.2.1/css/all.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/card.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bubble.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/loading.css') }}">
</head>

<body class="home-page">
    <div id="loading">
        <div class="wrapper" >
            <div class="overlay"></div>
        </div>
        @include('inc.loading')
    </div>
    <div class="wrapper" id="contents">
        <div class="overlay">
            <div class="nav-home">
                <div class="logo">
                    <a href="/"><img src="{{ asset('assets/images/pages/home/xbox.svg') }}" alt="Infinite"></a>
                </div>
                <nav id="navigation-scroll">
                    <ul id="navigation" class="nav">
                        <li class="nav-item"><a class="nav-link active" href="/"> Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#features">Feature</a></li>
                        <li class="nav-item"><a class="nav-link" href="#download">Game</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link icon-play" href="/game"><i
                                    class="fa-solid fa-play"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="box-game">
                <div class="image-game">
                    <img src="{{ asset('assets/images/pages/home/ronaldo-messi.png') }}" alt="Infinite">
                </div>
                <div class="box-info-game">
                    <h1 class="title-game">Infinite FIFA</h1>
                    <p class="des-game"> A football manager game about <span class="des-game-bold">NFT player</span></p>
                </div>
            </div>
            <div class="left-home">
                <div class="box-user">
                    <div class="avatar">
                        <img src="{{ asset('assets/images/pages/home/avatar.png') }}" alt="reward">
                    </div>
                    <div class="info-user">
                        <div class="name-user" id="name-wallet">Wallet Address</div>
                        <div class="type-user" id="add-text">Connect</div>
                        <div class="box-del" style="position: absolute; top 0; right:0;">
                            <ul id="messages"></ul>
                            <textarea id="text" placeholder="Add Message"></textarea>
                        </div>
                    </div>
                    <div class="reward-user">
                        <div class="image-reward">
                            <img src="{{ asset('assets/images/pages/home/reward.svg') }}" alt="reward">
                        </div>
                        <div class="quantity-reward" id="amount-near">-</div>
                    </div>
                </div>

                <div class="box-main">
                    <div class="image-main">
                        <img src="{{ asset('assets/images/pages/home/bg.png') }}" alt="Infinite">
                        <div class="text-main">
                            <div class="title-main">SEASON 1</div>
                            <div class="des-main">Be A King</div>
                        </div>
                    </div>
                    <div class="action-main">
                        <a href="/game">
                            <div class="play-main">PLAY
                                <span>
                                    <i class="btn-play-game fa-solid fa-play"></i>
                                </span>
                            </div>
                        </a>
                        <div class="chapter-main">Chapter 6</div>
                        <div class="chapter-name-main">Euro Town Mission</div>
                        <div class="done-main">Done 95%</div>
                    </div>
                </div>

                <div class="list-card">
                    <div class="card-item">
                        <div class="imgmarketmain testbackground player_card" id="playernft">
                            <img class="card-background" style="position: absolute;width: 100%;" alt=""
                                src="{{ asset('assets/images/icon/bg5.png') }}">
                            <div class="card-animation"
                                style="background-image: url('{{ asset('assets/images/icon/ani5.png') }}');animation: 2s steps(60) 0s infinite normal none running anicard;">
                            </div>
                            <div class="card-animation"
                                style="background-image: url('{{ asset('assets/images/icon/ani01.png') }}');animation: 2s steps(60) 0s infinite normal none running anicard;">
                            </div>
                            <img class="card-player" style="position: absolute;" alt=""
                                src="{{ asset('assets/images/icon/avatar.png') }}">
                            <div class="infoplayer">
                                <span class="powerplayer">86</span>
                                <span class="positionplayer">FW</span>
                                <span class="flagplayer"><img class="flag-player" style="position: absolute;"
                                        alt="" src="{{ asset('assets/images/flags/38.png') }}"></span>
                                <span class="nameplayer">T.Henry</span>
                                <span class="plusplayer">+<span class="starplayer">10</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <div class="imgmarketmain testbackground player_card" id="playernft">
                            <img class="card-background" style="position: absolute;width: 100%;" alt=""
                                src="{{ asset('assets/images/icon/bg4.png') }}">
                            <div class="card-animation"
                                style="background-image: url('{{ asset('assets/images/icon/ani4.png') }}');animation: 2s steps(60) 0s infinite normal none running anicard;">
                            </div>
                            <div class="card-animation"
                                style="background-image: url('{{ asset('assets/images/icon/ani01.png') }}');animation: 2s steps(60) 0s infinite normal none running anicard;">
                            </div>
                            <img class="card-player" style="position: absolute;" alt=""
                                src="{{ asset('assets/images/icon/avatar.png') }}">
                            <div class="infoplayer">
                                <span class="powerplayer">86</span>
                                <span class="positionplayer">FW</span>
                                <span class="flagplayer"><img class="flag-player" style="position: absolute;"
                                        alt="" src="{{ asset('assets/images/flags/38.png') }}"></span>
                                <span class="nameplayer">T.Henry</span>
                                <span class="plusplayer">+<span class="starplayer">10</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <div class="imgmarketmain testbackground player_card" id="playernft">
                            <img class="card-background" style="position: absolute;width: 100%;" alt=""
                                src="{{ asset('assets/images/icon/bg3.png') }}">
                            <div class="card-animation"
                                style="background-image: url('{{ asset('assets/images/icon/ani3.png') }}');animation: 2s steps(60) 0s infinite normal none running anicard;">
                            </div>
                            <div class="card-animation"
                                style="background-image: url('{{ asset('assets/images/icon/ani01.png') }}');animation: 2s steps(60) 0s infinite normal none running anicard;">
                            </div>
                            <img class="card-player" style="position: absolute;" alt=""
                                src="{{ asset('assets/images/icon/avatar.png') }}">
                            <div class="infoplayer">
                                <span class="powerplayer">86</span>
                                <span class="positionplayer">FW</span>
                                <span class="flagplayer"><img class="flag-player" style="position: absolute;"
                                        alt="" src="{{ asset('assets/images/flags/38.png') }}"></span>
                                <span class="nameplayer">T.Henry</span>
                                <span class="plusplayer">+<span class="starplayer">10</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <div class="imgmarketmain testbackground player_card" id="playernft">
                            <img class="card-background" style="position: absolute;width: 100%;" alt=""
                                src="{{ asset('assets/images/icon/bg2.png') }}">
                            <div class="card-animation"
                                style="background-image: url('{{ asset('assets/images/icon/ani2.png') }}');animation: 2s steps(60) 0s infinite normal none running anicard;">
                            </div>
                            <div class="card-animation"
                                style="background-image: url('{{ asset('assets/images/icon/ani01.png') }}');animation: 2s steps(60) 0s infinite normal none running anicard;">
                            </div>
                            <img class="card-player" style="position: absolute;" alt=""
                                src="{{ asset('assets/images/icon/avatar.png') }}">
                            <div class="infoplayer">
                                <span class="powerplayer">86</span>
                                <span class="positionplayer">FW</span>
                                <span class="flagplayer"><img class="flag-player" style="position: absolute;"
                                        alt="" src="{{ asset('assets/images/flags/38.png') }}"></span>
                                <span class="nameplayer">T.Henry</span>
                                <span class="plusplayer">+<span class="starplayer">10</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <div class="imgmarketmain testbackground player_card" id="playernft">
                            <img class="card-background" style="position: absolute;width: 100%;" alt=""
                                src="{{ asset('assets/images/icon/bg1.png') }}">
                            <div class="card-animation"
                                style="background-image: url('{{ asset('assets/images/icon/ani1.png') }}');animation: 2s steps(60) 0s infinite normal none running anicard;">
                            </div>
                            <div class="card-animation"
                                style="background-image: url('{{ asset('assets/images/icon/ani01.png') }}');animation: 2s steps(60) 0s infinite normal none running anicard;">
                            </div>
                            <img class="card-player" style="position: absolute;" alt=""
                                src="{{ asset('assets/images/icon/avatar.png') }}">
                            <div class="infoplayer">
                                <span class="powerplayer">86</span>
                                <span class="positionplayer">FW</span>
                                <span class="flagplayer"><img class="flag-player" style="position: absolute;"
                                        alt="" src="{{ asset('assets/images/flags/38.png') }}"></span>
                                <span class="nameplayer">T.Henry</span>
                                <span class="plusplayer">+<span class="starplayer">10</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('inc.bubble')

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/regenerator-runtime@0.13.11/runtime.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/near-api-js@0.44.2/dist/near-api-js.min.js"></script>
    {{-- <script src="{{ asset('assets/js/index.js') }}" type="module"></script> --}}
    <script src="{{ asset('assets/js/loading.js') }}"></script>

    <script>
        $(".nav-item .nav-link").on('click', function() {
            $(".nav-item .nav-link").removeClass('active');
            $(this).addClass('active');
        });

        // connect to NEAR
        const near = new nearApi.Near({
            keyStore: new nearApi.keyStores.BrowserLocalStorageKeyStore(),
            networkId: 'testnet',
            nodeUrl: 'https://rpc.testnet.near.org',
            walletUrl: 'https://wallet.testnet.near.org'
        });

        // connect to the NEAR Wallet
        const wallet = new nearApi.WalletConnection(near, 'my-app');

        console.log(wallet.account());
        getInfoAccount();
        async function getInfoAccount() {
            // gets account balance
            const walletAccountId = await wallet.getAccountId();
            console.log("walletAccountId", walletAccountId);
            const walletAccountObj = await wallet.account();
            console.log("walletAccountObj", walletAccountObj);
            const balance = await wallet.account().getAccountBalance();
            const balanceMin = nearApi.utils.format.formatNearAmount(balance['available'], 5);
            console.log(balanceMin);
            const accountInfo = await wallet.account().getAccountDetails();
            console.log(accountInfo);
            $('#name-wallet').html(wallet.account().accountId);
            $('#amount-near').html(balanceMin);
        }

        // connect to a NEAR smart contract
        const contract = new nearApi.Contract(wallet.account(), 'guest-book.testnet', {
            viewMethods: ['getMessages'],
            changeMethods: ['addMessage']
        });

        const button = document.getElementById('add-text');
        if (!wallet.isSignedIn()) {
            button.textContent = 'Connect'
        } else {
            button.textContent = 'Logout'
        }

        document.getElementById('add-text').addEventListener('click', () => {
            if (wallet.isSignedIn()) {
                wallet.signOut();
                button.textContent = 'Connect';
                $('#name-wallet').html("Wallet Address");
                $('#amount-near').html("-");
            } else {
                wallet.requestSignIn({
                    contractId: 'guest-book.testnet',
                    methodNames: ['getMessages', 'addMessage']
                });
            }
        });

        // call the getMessages view method
        contract.getMessages()
            .then(messages => {
                const ul = document.getElementById('messages');
                messages.forEach(message => {
                    const li = document.createElement('li');
                    li.textContent = `${message.sender} - ${message.text}`;
                    ul.appendChild(li);
                })
            });

        // Either sign in or call the addMessage change method on button click
        // document.getElementById('add-text').addEventListener('click', () => {
        //     if (wallet.isSignedIn()) {
        //         contract.addMessage({
        //             args: {
        //                 text: document.getElementById('text').value
        //             },
        //             amount: nearApi.utils.format.parseNearAmount('1')
        //         })
        //     } else {
        //         wallet.requestSignIn({
        //             contractId: 'guest-book.testnet',
        //             methodNames: ['getMessages', 'addMessage']
        //         });
        //     }
        // });
    </script>

</body>

</html>
