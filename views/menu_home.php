<nav id="menu-h">
<div id="menu-content">
        <ul>
            <li>
                <a href="#" id="trl_menu">
                    TRL Sites
                </a>
            </li>
            
            <li><a class="divs_redirect" href="#top">Início</a></li>

            <li><a class="divs_redirect" href="#carouselExampleControls">Serviços</a></li>
            
            <li><a class="divs_redirect" href="#sobre_redirect">Sobre nós</a></li>
            
            <li><a class="divs_redirect" href="#contato_redirect">Contato</a></li>
        </ul>
        </div>
    </nav>
      <style>
         @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');

        * {
            margin: 0 auto;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
        }

        #menu-h{
            position: fixed;
            background-color: #01548f;
            height: 65px;
            width: 100%;
            z-index: 3;
        }
        #menu-content {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        #menu-h ul {
            max-width: 80%;
            list-style: none;
            padding: 0;
        }

        #menu-h ul li {
            display: inline;
        }

        #menu-h ul li a {
            color: #FFF;
            padding: 20px;
            display: inline-block;
            text-decoration: none;
            transition: background .4s;
        }

        .divs_redirect:hover {
            background-color: rgb(24, 139, 233);
        }

        #menu-h ul li:first-child {
            float: left;
            background-color: #0171c2;
        }
    </style>
    