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
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/6.2.1/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/game.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/card.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bubble.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/button.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/board.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/loading.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/cursor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/transfer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/boxnft.css') }}">
</head>

<body class="game-page">
    <div id="loading">
        <div class="wrapper">
            <div class="overlay"></div>
        </div>
        <div class="text-loading">Now Loading...</div>
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
            <div class="group-main-content">
                <div class="left-main-content">
                    <div class="box-user">
                        <div class="avatar">
                            <img src="{{ asset('assets/images/pages/home/avatar.png') }}" alt="reward">
                        </div>
                        <div class="info-user">
                            <div class="name-user" id="name-wallet">Wallet Address</div>
                            <div class="type-user" id="add-text">Connect</div>
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
                    <div class="cus-btn-bg">
                        <div class="cus-btn cus-btn-text switch-team">Go left</div>
                        <div class="cus-btn cus-btn-text zoom-team"
                            style="--path: 0 0, 85% 0, 100% 35%, 100% 100%, 15% 100%, 0 65%;">Go go go right</div>
                    </div>
                </div>
                <div class="center-main-content">

                    <div class="boxnft-group"> 
                        <div class="sunburst"></div>
                        <div class="cardpack pack_bronze packtype_regular">     
                          <div class="upper_rip"></div>
                          <div class="upper"></div>
                          <div class="label" style="background: url({{ asset('assets/images/packs/label-regular.min.png') }}) no-repeat;">
                            <div class="label_packtype" data-i18n="pack_regular">BRONZE</div>
                            <div class="label_pack" data-i18n="pack_pack">BOX</div>
                            <div class="label_includes" data-i18n="pack_includes">Random</div>
                            <div class="label_cardcount" data-i18n="pack_includes_cards" data-num="5">FIFA NFT</div>
                            <div class="stars_from hstars_1"></div>
                            <div class="stars_hyphen">-</div>
                            <div class="stars_to hstars_6"></div>
                          </div>
                          <div class="lower"></div>
                        </div>

                        <div class="cardpack pack_silver packtype_regular">
                          <div class="upper_rip"></div>
                          <div class="upper"></div>
                          <div class="label" style="background: url({{ asset('assets/images/packs/label-performance.min.png') }}) no-repeat;">
                            <div class="label_packtype" data-i18n="pack_regular">SILVER</div>
                            <div class="label_pack" data-i18n="pack_pack">BOX</div>
                            <div class="label_includes" data-i18n="pack_includes">Random</div>
                            <div class="label_cardcount" data-i18n="pack_includes_cards" data-num="5">FIFA NFT</div>
                            <div class="stars_from hstars_3"></div>
                            <div class="stars_hyphen">-</div>
                            <div class="stars_to hstars_6"></div>
                          </div>
                          <div class="lower"></div>
                        </div>

                        <div class="cardpack pack_gold packtype_regular">
                          <div class="upper_rip"></div>
                          <div class="upper"></div>
                          <div class="label" style="background: url({{ asset('assets/images/packs/label-mega.min.png') }}) no-repeat;">
                            <div class="label_packtype" data-i18n="pack_regular">GOLD</div>
                            <div class="label_pack" data-i18n="pack_pack">BOX</div>
                            <div class="label_includes" data-i18n="pack_includes">Random</div>
                            <div class="label_cardcount" data-i18n="pack_includes_cards" data-num="5">FIFA NFT</div>
                            <div class="stars_from hstars_4"></div>
                            <div class="stars_hyphen">-</div>
                            <div class="stars_to hstars_6"></div>
                          </div>
                          <div class="lower"></div>
                        </div>

                    </div>
                </div>        
                <div class="right-main-content"></div>        
            </div>
        </div>
    </div>

    @include('inc.bubble')
    @include('inc.cursor')

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/regenerator-runtime@0.13.11/runtime.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/near-api-js@0.44.2/dist/near-api-js.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    {{-- <script src="{{ asset('assets/js/index.js') }}" type="module"></script> --}}
    <script src="{{ asset('assets/js/loading.js') }}"></script>
    <script src="{{ asset('assets/js/cursor.js') }}"></script>
    <script src="{{ asset('assets/js/radarchart.js') }}"></script>


    <script>
        $(".nav-item .nav-link").on('click', function() {
            $(".nav-item .nav-link").removeClass('active');
            $(this).addClass('active');
        });

        $('.switch-team').on('click', function(e) {
            $('.world').toggleClass("flipped");
            e.preventDefault();
        });

        $('.zoom-team').on('click', function(e) {
            $('.world').toggleClass("switched");
            e.preventDefault();
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
    </script>

</body>

</html>
