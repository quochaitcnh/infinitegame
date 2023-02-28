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
    @livewireStyles
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
                    <div class="js-stage stage texture">
                        <div class="js-world world">
                            <div class="team js-team">
                                <div class="list-card list-fw">
                                    <div class="card-item">
                                        <div class="imgmarketmain testbackground player_card" id="playernft">
                                            <img class="card-background" style="position: absolute;width: 100%;"
                                                alt="" src="{{ asset('assets/images/icon/bg4.png') }}">
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
                                                <span class="flagplayer"><img class="flag-player"
                                                        style="position: absolute;" alt=""
                                                        src="{{ asset('assets/images/flags/38.png') }}"></span>
                                                <span class="nameplayer">T.Henry</span>
                                                <span class="plusplayer">+<span class="starplayer">10</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-item">
                                        <div class="imgmarketmain testbackground player_card" id="playernft">
                                            <img class="card-background" style="position: absolute;width: 100%;"
                                                alt="" src="{{ asset('assets/images/icon/bg2.png') }}">
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
                                                <span class="flagplayer"><img class="flag-player"
                                                        style="position: absolute;" alt=""
                                                        src="{{ asset('assets/images/flags/38.png') }}"></span>
                                                <span class="nameplayer">T.Henry</span>
                                                <span class="plusplayer">+<span class="starplayer">10</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-item">
                                        <div class="imgmarketmain testbackground player_card" id="playernft">
                                            <img class="card-background" style="position: absolute;width: 100%;"
                                                alt="" src="{{ asset('assets/images/icon/bg0.png') }}">
                                            <div class="card-animation"
                                                style="background-image: url('{{ asset('assets/images/icon/ani0.png') }}');animation: 2s steps(60) 0s infinite normal none running anicard;">
                                            </div>
                                            <div class="card-animation"
                                                style="background-image: url('{{ asset('assets/images/icon/ani01.png') }}');animation: 2s steps(60) 0s infinite normal none running anicard;">
                                            </div>
                                            <img class="card-player" style="position: absolute;" alt=""
                                                src="{{ asset('assets/images/icon/avatar.png') }}">
                                            <div class="infoplayer">
                                                <span class="powerplayer">86</span>
                                                <span class="positionplayer">FW</span>
                                                <span class="flagplayer"><img class="flag-player"
                                                        style="position: absolute;" alt=""
                                                        src="{{ asset('assets/images/flags/38.png') }}"></span>
                                                <span class="nameplayer">T.Henry</span>
                                                <span class="plusplayer">+<span class="starplayer">10</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-card list-mf">
                                    <div class="card-item">
                                        <div class="imgmarketmain testbackground player_card" id="playernft">
                                            <img class="card-background" style="position: absolute;width: 100%;"
                                                alt="" src="{{ asset('assets/images/icon/bg5.png') }}">
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
                                                <span class="flagplayer"><img class="flag-player"
                                                        style="position: absolute;" alt=""
                                                        src="{{ asset('assets/images/flags/38.png') }}"></span>
                                                <span class="nameplayer">T.Henry</span>
                                                <span class="plusplayer">+<span class="starplayer">10</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-item">
                                        <div class="imgmarketmain testbackground player_card" id="playernft">
                                            <img class="card-background" style="position: absolute;width: 100%;"
                                                alt="" src="{{ asset('assets/images/icon/bg4.png') }}">
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
                                                <span class="flagplayer"><img class="flag-player"
                                                        style="position: absolute;" alt=""
                                                        src="{{ asset('assets/images/flags/38.png') }}"></span>
                                                <span class="nameplayer">T.Henry</span>
                                                <span class="plusplayer">+<span class="starplayer">10</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-item">
                                        <div class="imgmarketmain testbackground player_card" id="playernft">
                                            <img class="card-background" style="position: absolute;width: 100%;"
                                                alt="" src="{{ asset('assets/images/icon/bg1.png') }}">
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
                                                <span class="flagplayer"><img class="flag-player"
                                                        style="position: absolute;" alt=""
                                                        src="{{ asset('assets/images/flags/38.png') }}"></span>
                                                <span class="nameplayer">T.Henry</span>
                                                <span class="plusplayer">+<span class="starplayer">10</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-card list-df">
                                    <div class="card-item">
                                        <div class="imgmarketmain testbackground player_card" id="playernft">
                                            <img class="card-background" style="position: absolute;width: 100%;"
                                                alt="" src="{{ asset('assets/images/icon/bg5.png') }}">
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
                                                <span class="flagplayer"><img class="flag-player"
                                                        style="position: absolute;" alt=""
                                                        src="{{ asset('assets/images/flags/38.png') }}"></span>
                                                <span class="nameplayer">T.Henry</span>
                                                <span class="plusplayer">+<span class="starplayer">10</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-item">
                                        <div class="imgmarketmain testbackground player_card" id="playernft">
                                            <img class="card-background" style="position: absolute;width: 100%;"
                                                alt="" src="{{ asset('assets/images/icon/bg4.png') }}">
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
                                                <span class="flagplayer"><img class="flag-player"
                                                        style="position: absolute;" alt=""
                                                        src="{{ asset('assets/images/flags/38.png') }}"></span>
                                                <span class="nameplayer">T.Henry</span>
                                                <span class="plusplayer">+<span class="starplayer">10</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-item">
                                        <div class="imgmarketmain testbackground player_card" id="playernft">
                                            <img class="card-background" style="position: absolute;width: 100%;"
                                                alt="" src="{{ asset('assets/images/icon/bg3.png') }}">
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
                                                <span class="flagplayer"><img class="flag-player"
                                                        style="position: absolute;" alt=""
                                                        src="{{ asset('assets/images/flags/38.png') }}"></span>
                                                <span class="nameplayer">T.Henry</span>
                                                <span class="plusplayer">+<span class="starplayer">10</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-item">
                                        <div class="imgmarketmain testbackground player_card" id="playernft">
                                            <img class="card-background" style="position: absolute;width: 100%;"
                                                alt="" src="{{ asset('assets/images/icon/bg2.png') }}">
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
                                                <span class="flagplayer"><img class="flag-player"
                                                        style="position: absolute;" alt=""
                                                        src="{{ asset('assets/images/flags/38.png') }}"></span>
                                                <span class="nameplayer">T.Henry</span>
                                                <span class="plusplayer">+<span class="starplayer">10</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-card list-gk">
                                    <div class="card-item">
                                        <div class="imgmarketmain testbackground player_card" id="playernft">
                                            <img class="card-background" style="position: absolute;width: 100%;"
                                                alt="" src="{{ asset('assets/images/icon/bg5.png') }}">
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
                                                <span class="flagplayer"><img class="flag-player"
                                                        style="position: absolute;" alt=""
                                                        src="{{ asset('assets/images/flags/38.png') }}"></span>
                                                <span class="nameplayer">T.Henry</span>
                                                <span class="plusplayer">+<span class="starplayer">10</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="terrain js-terrain">
                                <div class="field field--alt"></div>
                                <div class="field ground">
                                    <div class="field__texture field__texture--gradient"></div>
                                    <div class="field__texture field__texture--gradient-b"></div>
                                    <div class="field__texture field__texture--grass"></div>
                                    <div class="field__line field__line--goal"></div>
                                    <div class="field__line field__line--goal field__line--goal--far"></div>
                                    <div class="field__line field__line--outline"></div>
                                    <div class="field__line field__line--penalty"></div>
                                    <div class="field__line field__line--penalty-arc"></div>
                                    <div class="field__line field__line--penalty-arc field__line--penalty-arc--far">
                                    </div>
                                    <div class="field__line field__line--mid"></div>
                                    <div class="field__line field__line--circle"></div>
                                    <div class="field__line field__line--penalty field__line--penalty--far"></div>
                                </div>
                                <div class="field__side field__side--front"></div>
                                <div class="field__side field__side--left"></div>
                                <div class="field__side field__side--right"></div>
                                <div class="field__side field__side--back"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-main-content">
                    <div class="livewire-test" style="margin-bottom: 10rem;">
                        <livewire:counter />
                    </div>
                     
                    <div class="main-player">                        
                        <div class="info-main-player">
                            <div class="left-main-player">
                                <div class="line-info">
                                    <div class="position-main-player">FW</div>
                                    <div class="name-main-player">L.Messi</div>
                                </div>
                            </div>
                            <div class="center-main-player">
                                <div class="stat">
                                    <div class="radar-stat-wrapper">
                                        <div id="radarChartPlayer"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="right-main-player">
                                <div class="card-item">
                                    <div class="testbackground player_card" id="playernft">
                                        <img class="card-background" alt=""
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
                                            <span class="powerplayer">99</span>
                                            <span class="positionplayer">FW</span>
                                            <span class="flagplayer"><img class="flag-player"
                                                    style="position: absolute;" alt=""
                                                    src="{{ asset('assets/images/flags/38.png') }}"></span>
                                            <span class="nameplayer">L.Messi</span>
                                            <span class="plusplayer">+<span class="starplayer">10</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="power-main-player">
                            <div class="power-item">
                                <div class="name-power">PAC</div>
                                <div class="num-power">100</div>
                            </div>
                            <div class="power-item">
                                <div class="name-power">SHO</div>
                                <div class="num-power">99</div>
                            </div>
                            <div class="power-item">
                                <div class="name-power">PAS</div>
                                <div class="num-power">98</div>
                            </div>
                            <div class="power-item">
                                <div class="name-power">DRI</div>
                                <div class="num-power">100</div>
                            </div>
                            <div class="power-item">
                                <div class="name-power">DEF</div>
                                <div class="num-power">55</div>
                            </div>
                            <div class="power-item">
                                <div class="name-power">PHY</div>
                                <div class="num-power">89</div>
                            </div>
                        </div>
                    </div>
                    <div class="home-team">
                        <div class="player-item">
                            <div class="avatar-player">
                                <div class="card-item">
                                    <div class="testbackground player_card" id="playernft">
                                        <img class="card-background" alt=""
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
                                            <span class="flagplayer"><img class="flag-player"
                                                    style="position: absolute;" alt=""
                                                    src="{{ asset('assets/images/flags/38.png') }}"></span>
                                            <span class="nameplayer">T.Henry</span>
                                            <span class="plusplayer">+<span class="starplayer">10</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="position-player-wrapper">
                                <div class="player-position gk">GK</div>
                            </div>
                            <div class="name-player">Đặng Văn Lâm</div>
                            <div class="power-player rate1">90</div>
                        </div>
                        <div class="player-item">
                            <div class="avatar-player">
                                <div class="card-item">
                                    <div class="testbackground player_card" id="playernft">
                                        <img class="card-background" alt=""
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
                                            <span class="positionplayer">DF</span>
                                            <span class="flagplayer"><img class="flag-player"
                                                    style="position: absolute;" alt=""
                                                    src="{{ asset('assets/images/flags/38.png') }}"></span>
                                            <span class="nameplayer">T.Henry</span>
                                            <span class="plusplayer">+<span class="starplayer">10</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="position-player-wrapper">
                                <div class="player-position df">DF</div>
                            </div>
                            <div class="name-player">Đặng Văn Lâm</div>
                            <div class="power-player rate2">90</div>
                        </div>
                        <div class="player-item">
                            <div class="avatar-player">
                                <div class="card-item">
                                    <div class="testbackground player_card" id="playernft">
                                        <img class="card-background" alt=""
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
                                            <span class="positionplayer">MF</span>
                                            <span class="flagplayer"><img class="flag-player"
                                                    style="position: absolute;" alt=""
                                                    src="{{ asset('assets/images/flags/38.png') }}"></span>
                                            <span class="nameplayer">T.Henry</span>
                                            <span class="plusplayer">+<span class="starplayer">10</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="position-player-wrapper">
                                <div class="player-position mf">MF</div>
                            </div>
                            <div class="name-player">Đặng Văn Lâm</div>
                            <div class="power-player rate4">90</div>
                        </div>
                        <div class="player-item">
                            <div class="avatar-player">
                                <div class="card-item">
                                    <div class="testbackground player_card" id="playernft">
                                        <img class="card-background" alt=""
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
                                            <span class="flagplayer"><img class="flag-player"
                                                    style="position: absolute;" alt=""
                                                    src="{{ asset('assets/images/flags/38.png') }}"></span>
                                            <span class="nameplayer">T.Henry</span>
                                            <span class="plusplayer">+<span class="starplayer">10</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="position-player-wrapper">
                                <div class="player-position fw">FW</div>
                            </div>
                            <div class="name-player">Đặng Văn Lâm</div>
                            <div class="power-player rate5">90</div>
                        </div>
                        <div class="player-item">
                            <div class="avatar-player">
                                <div class="card-item">
                                    <div class="testbackground player_card" id="playernft">
                                        <img class="card-background" alt=""
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
                                            <span class="flagplayer"><img class="flag-player"
                                                    style="position: absolute;" alt=""
                                                    src="{{ asset('assets/images/flags/38.png') }}"></span>
                                            <span class="nameplayer">T.Henry</span>
                                            <span class="plusplayer">+<span class="starplayer">10</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="position-player-wrapper">
                                <div class="player-position fw">FW</div>
                            </div>
                            <div class="name-player">Đặng Văn Lâm</div>
                            <div class="power-player rate0">90</div>
                        </div>
                    </div>
                </div>
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
    @livewireScripts
</body>

</html>
