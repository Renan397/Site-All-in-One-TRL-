<nav id="menu-h">
<div id="menu-content">
        <ul>
            <li>
                <a href="#top_redirect" id="trl_menu">
                    TRL Sites
                </a>
            </li>

            <li><a class="divs_redirect" href="#servicos_redirect">Serviços</a></li>
            
            <li><a class="divs_redirect" href="#sobre_redirect">Sobre nós</a></li>
            
            <li><a class="divs_redirect" href="#contato_redirect">Contato</a></li>
        </ul>
        </div>
    </nav>
      <style>
        * {
            margin: 0 auto;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
        }
        #menu-h{
            position: fixed;
            background: radial-gradient(circle, rgba(0,112,184,1) 0%, rgba(0,212,255,1) 0%, rgba(0,110,182,1) 0%, rgba(0,105,179,1) 65%, rgba(47,163,232,100) 100%);
            height: 70px;
            width: 100%;
            z-index: 3;
        }
        #menu-content {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            border-bottom-left-radius: 10%;
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
            padding: 22px;
            display: inline-block;
            text-decoration: none;
            transition: background .4s;
        }

        #trl_menu {
            font-family: 'Shippori Antique B1', sans-serif;
        }
        .divs_redirect {
            font-family: 'Shippori Antique B1', sans-serif;
        }
        .divs_redirect:hover {
            background-color: rgb(24, 139, 233);
        }

        #menu-h ul li:first-child {
            float: left;
            background-color: #025c9c;
        }
    </style>
    