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
    <link rel="stylesheet" href="{{ asset('assets/css/tactic.css') }}">
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

                    <div class="col-xs-12 col-md-6">
                        <div class="box p3x1 line_tactics">
                          <div class="title">Line tactics</div>
                          <div class="field"></div>
                          <div class="line_fw">
                            <div class="subtitle">Forwards</div>
                            <div class="carrousel">
                              <div id="fwoption" class="option_3 selected" data-fw="3" style=""></div>
                            </div>
                            <div class="labels">
                              <div class="vcenter fwoption_2" style="display: none;"><p>Support midfield</p></div>
                              <div class="vcenter fwoption_3 selected" style=""><p>Attack only</p></div>
                              <div class="vcenter fwoption_1" style="display: none;"><p>Drop deep</p></div>
                            </div>
                            <span id="prefw" class="left_arrow_yellow hover_fx"><span>˂</span></span>
                            <span id="nextfw" class="right_arrow_yellow hover_fx"><span>˃</span></span>
                          </div>
                          <div class="line_mf">
                            <div class="subtitle">Midfielders</div>
                            <div class="carrousel">
                              <div id="mfoption" class="option_2 selected" data-mf="2" style=""></div>
                            </div>
                            <div class="labels">
                              <div class="vcenter mfoption_2 selected" style=""><p>Stay in position</p></div>
                              <div class="vcenter mfoption_3" style="display: none;"><p>Push forward</p></div>
                              <div class="vcenter mfoption_1" style="display: none;"><p>Protect the defense</p></div>
                            </div>
                            <span id="premf" class="left_arrow_yellow hover_fx"><span>˂</span></span>
                            <span id="nextmf" class="right_arrow_yellow hover_fx"><span>˃</span></span>
                          </div>    
                          <div class="line_df">
                            <div class="subtitle">Defenders</div>
                            <div class="carrousel">
                              <div id="dfoption" class="option_1 selected" data-df="1" style=""></div>
                            </div>
                            <div class="labels">
                              <div class="vcenter dfoption_2" style="display: none;"><p>Support midfield</p></div>
                              <div class="vcenter dfoption_3" style="display: none;"><p>Attacking full-backs</p></div>
                              <div class="vcenter dfoption_1 selected" style=""><p>Defend deep</p></div>
                            </div>
                            <span id="predf" class="left_arrow_yellow hover_fx"><span>˂</span></span>
                            <span id="nextdf" class="right_arrow_yellow hover_fx"><span>˃</span></span>
                          </div>  
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-6">
                          <div class="box style_of_play">
                            <div class="title">Style of play</div>
                            <div class="carrousel">
                              <div id="styleoption" class="option_5" data-style="5" style="z-index: 1;"></div>
                            </div>
                            <div class="labels">
                              <div class="vcenter styleoption_4" style="display: none;"><p>Shoot on sight</p></div>
                              <div class="vcenter styleoption_1" style="display: none;"><p>Long ball</p></div>
                              <div class="vcenter styleoption_5 selected" style="z-index: 1;"><p>Passing game</p></div>
                              <div class="vcenter styleoption_3" style="z-index: 2; display: none;"><p>Wing play</p></div>
                              <div class="vcenter styleoption_2" style="display: none;"><p>Counterattack</p></div>
                            </div>
                            <span id="prestyleofplay" class="left_arrow_yellow hover_fx"><span>˂</span></span>
                            <span id="nextstyleofplay" class="right_arrow_yellow hover_fx"><span>˃</span></span>
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
