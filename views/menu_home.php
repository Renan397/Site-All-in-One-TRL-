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

    #menu-h {
        position: fixed;
        background-color: cornflowerblue;
        height: 80px;
        width: 100%;
        border-bottom-left-radius: 10%;
        box-shadow: 1px 1px 10px gray;
        z-index: 3;
    }

    #menu-content {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        border-bottom-left-radius: 50%;
        background-color: darkblue;
        height: 95%;
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
        border-radius: 0px 0px 15px 15px;
    }
    
    .divs_redirect:hover {
        background-color: royalblue;
        border-radius: 0px 0px 15px 15px;
    }

    #menu-h ul li:first-child {
        float: left;
        background-color: royalblue;
        border-radius: 0px 0px 15px 15px;
    }
</style>