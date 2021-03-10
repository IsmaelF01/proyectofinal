<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carrito</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Fredoka+One);

        html,
        body,
        div,
        span,
        applet,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        a,
        abbr,
        acronym,
        address,
        big,
        cite,
        code,
        del,
        dfn,
        em,
        img,
        ins,
        kbd,
        q,
        s,
        samp,
        small,
        strike,
        strong,
        sub,
        sup,
        tt,
        var,
        b,
        u,
        i,
        center,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        fieldset,
        form,
        label,
        legend,
        table,
        caption,
        tbody,
        tfoot,
        thead,
        tr,
        th,
        td,
        article,
        aside,
        canvas,
        details,
        embed,
        figure,
        figcaption,
        footer,
        header,
        hgroup,
        menu,
        nav,
        output,
        ruby,
        section,
        summary,
        time,
        mark,
        audio,
        video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
            outline: none;
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        html {
            overflow-y: scroll;
        }

        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 62.5%;
            line-height: 1;
            color: #414141;
            background: #caccf7 url('https://i.imgur.com/Syv2IVk.png');
            /* https://subtlepatterns.com/old-map/ */
            padding: 25px 0;
        }

        ::selection {
            background: #bdc0e8;
        }

        ::-moz-selection {
            background: #bdc0e8;
        }

        ::-webkit-selection {
            background: #bdc0e8;
        }

        br {
            display: block;
            line-height: 1.6em;
        }

        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section {
            display: block;
        }

        ol,
        ul {
            list-style: none;
        }

        input,
        textarea {
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            outline: none;
        }

        blockquote,
        q {
            quotes: none;
        }

        blockquote:before,
        blockquote:after,
        q:before,
        q:after {
            content: '';
            content: none;
        }

        strong,
        b {
            font-weight: bold;
        }

        em,
        i {
            font-style: italic;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        img {
            border: 0;
            max-width: 100%;
        }

        h1 {
            font-family: 'Fredoka One', Helvetica, Tahoma, sans-serif;
            color: #fff;
            text-shadow: 1px 2px 0 #7184d8;
            font-size: 3.5em;
            line-height: 1.1em;
            padding: 6px 0;
            font-weight: normal;
            text-align: center;
        }


        /* page structure */
        #w {
            display: block;
            width: 600px;
            margin: 0 auto;
        }

        #title {
            display: block;
            width: 100%;
            background: #95a6d6;
            padding: 10px 0;
            -webkit-border-top-right-radius: 6px;
            -webkit-border-top-left-radius: 6px;
            -moz-border-radius-topright: 6px;
            -moz-border-radius-topleft: 6px;
            border-top-right-radius: 6px;
            border-top-left-radius: 6px;
        }

        #page {
            display: block;
            background: #fff;
            padding: 15px 0;
            -webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
            -moz-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
        }

        /** cart table **/
        #cart {
            display: block;
            border-collapse: collapse;
            margin: 0;
            width: 100%;
            font-size: 1.2em;
            color: #444;
        }

        #cart thead th {
            padding: 8px 0;
            font-weight: bold;
        }

        #cart thead th.first {
            width: 175px;
        }

        #cart thead th.second {
            width: 45px;
        }

        #cart thead th.third {
            width: 230px;
        }

        #cart thead th.fourth {
            width: 130px;
        }

        #cart thead th.fifth {
            width: 20px;
        }

        #cart tbody td {
            text-align: center;
            margin-top: 4px;
        }

        tr.productitm {
            height: 65px;
            line-height: 65px;
            border-bottom: 1px solid #d7dbe0;
        }


        #cart tbody td img.thumb {
            vertical-align: bottom;
            border: 1px solid #ddd;
            margin-bottom: 4px;
        }

        .qtyinput {
            width: 33px;
            height: 22px;
            border: 1px solid #a3b8d3;
            background: #dae4eb;
            color: #616161;
            text-align: center;
        }

        tr.totalprice,
        tr.extracosts {
            height: 35px;
            line-height: 35px;
        }

        tr.extracosts {
            background: #e4edf4;
        }

        .remove {
            /* http://findicons.com/icon/261449/trash_can?id=397422 */
            cursor: pointer;
            position: relative;
            right: 12px;
            top: 5px;
        }


        .light {
            color: #888b8d;
            text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.45);
            font-size: 1.1em;
            font-weight: normal;
        }

        .thick {
            color: #272727;
            font-size: 1.7em;
            font-weight: bold;
        }


        /** submit btn **/
        tr.checkoutrow {
            background: #cfdae8;
            border-top: 1px solid #abc0db;
            border-bottom: 1px solid #abc0db;
        }

        td.checkout {
            padding: 12px 0;
            padding-top: 20px;
            width: 100%;
            text-align: right;
        }


        /* https://codepen.io/guvootes/pen/eyDAb */
        #submitbtn {
            width: 150px;
            height: 35px;
            outline: none;
            border: none;
            border-radius: 5px;
            margin: 0 0 10px 0;
            font-size: 1.3em;
            letter-spacing: 0.05em;
            font-family: Arial, Tahoma, sans-serif;
            color: #fff;
            text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.2);
            cursor: pointer;
            overflow: hidden;
            border-bottom: 1px solid #0071ff;
            background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #66aaff), color-stop(100%, #4d9cff));
            background-image: -webkit-linear-gradient(#66aaff, #4d9cff);
            background-image: -moz-linear-gradient(#66aaff, #4d9cff);
            background-image: -o-linear-gradient(#66aaff, #4d9cff);
            background-image: linear-gradient(#66aaff, #4d9cff);
        }

        #submitbtn:hover {
            background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #4d9cff), color-stop(100%, #338eff));
            background-image: -webkit-linear-gradient(#4d9cff, #338eff);
            background-image: -moz-linear-gradient(#4d9cff, #338eff);
            background-image: -o-linear-gradient(#4d9cff, #338eff);
            background-image: linear-gradient(#4d9cff, #338eff);
        }

        #submitbtn:active {
            border-bottom: 0;
            background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #338eff), color-stop(100%, #4d9cff));
            background-image: -webkit-linear-gradient(#338eff, #4d9cff);
            background-image: -moz-linear-gradient(#338eff, #4d9cff);
            background-image: -o-linear-gradient(#338eff, #4d9cff);
            background-image: linear-gradient(#338eff, #4d9cff);
            -webkit-box-shadow: inset 0 1px 3px 1px rgba(0, 0, 0, 0.25);
            -moz-box-shadow: inset 0 1px 3px 1px rgba(0, 0, 0, 0.25);
            box-shadow: inset 0 1px 3px 1px rgba(0, 0, 0, 0.25);
        }

    </style>
</head>

<body>
    @if (!count(Cart::getContent()))
        <div id="w">
            <header id="title">
                <a href="..">
                    <h1 style="color: red; margin-left: 60px">Tu pedido</h1>
                    <img src="{{ url('/img/logo.png') }}" alt=""
                        style="width: 70px; position: absolute; left: 40%; top: 25px">
                </a>
            </header>
            <div id="page">
                <table id="cart">
                    <thead>
                        <tr>
                            <th class="first">Foto</th>
                            <th class="second">Cantidad</th>
                            <th class="third">Plato</th>
                            <th class="fourth">Line Total</th>
                            <th class="fifth">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td colspan="4" style="text-align: center">No has pedido nada</td>
                    </tbody>
                </table>
            </div>
        </div>
    @else
        <div id="w">
            <header id="title">
                <a href="./">
                    <h1 style="color: rgb(255, 28, 28); margin-left: 60px">Tus pedidos</h1>
                    <img src="{{ url('/img/logo.png') }}" alt=""
                        style="width: 70px; position: absolute; left: 40%; top: 25px">
                </a>
            </header>
            <div id="page">
                <table id="cart">
                    <thead>
                        <tr>
                            <th class="first">Foto</th>
                            <th class="second">Cantidad</th>
                            <th class="third">Plato</th>
                            <th class="fourth">Line Total</th>
                            <th class="fifth">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (Cart::getContent() as $item)
                            <tr class="productitm">
                                <!-- http://www.inkydeals.com/deal/ginormous-bundle/ -->
                                <td style="width: 225px"><img class="thumb" style="width: 70%"
                                        src="{{ url('storage/img/platos', [$item->attributes->urlfoto]) }}"></td>
                                <td style="width: 225px">{{ $item->quantity }}</td>
                                <td style="width: 225px">{{ $item->name }}</td>
                                <td style="width: 225px">{{ $item->price }} €</td>
                                <td style="width: 100px;">
                                    <form action="cart-removeitem" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                        <button style="margin-right: 30px; width: 45px; background: white; border: 0;" type="submit"
                                            class="btn btn-link btn-sm text-danger"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGNpcmNsZSBzdHlsZT0iZmlsbDojRkZBQTIwOyIgY3g9IjI1NiIgY3k9IjI1NiIgcj0iMjU2Ii8+DQo8cGF0aCBzdHlsZT0iZmlsbDojRTY3NTAwOyIgZD0iTTUxMiwyNTZjMC0xMi42NjEtMC45MzUtMjUuMTAzLTIuNzEtMzcuMjcxTDM5NC40MzQsMTAzLjg3MmgtMjcuNTU4TDMyMC42LDU3Ljc5M0gxOTEuNDAxdjQ2LjA3OQ0KCWgtNzMuODM0djcyLjU1TDEzMy40NSwxOTEuNVY0MzBsNzguMTU0LDc4LjE1NEMyMjYuMDI0LDUxMC42NzYsMjQwLjg1Nyw1MTIsMjU2LDUxMkMzOTcuMzg1LDUxMiw1MTIsMzk3LjM4NSw1MTIsMjU2eiIvPg0KPHBvbHlnb24gc3R5bGU9ImZpbGw6IzZENzZFNzsiIHBvaW50cz0iMTkxLjQwMSw1Ny43OTIgMTkxLjQwMSwxMTAuMDgxIDIxNC41OTIsMTEwLjA4MSAyMTQuNTkyLDc1LjQ0IDI5Ny40MDgsNzUuNDQgDQoJMjk3LjQwOCwxMTAuMDgxIDMyMC41OTksMTEwLjA4MSAzMjAuNTk5LDU3Ljc5MiAiLz4NCjxwb2x5Z29uIHN0eWxlPSJmaWxsOiMxQzJFREU7IiBwb2ludHM9IjMyMC42LDU3Ljc5IDMyMC42LDExMC4wOCAyOTcuNDEsMTEwLjA4IDI5Ny40MSw3NS40NCAyNTYsNzUuNDQgMjU2LDU3Ljc5ICIvPg0KPHJlY3QgeD0iMTMzLjQ1IiB5PSIxNjUuMTUiIHN0eWxlPSJmaWxsOiM2RDc2RTc7IiB3aWR0aD0iMjQ1LjEiIGhlaWdodD0iMjY0Ljg1Ii8+DQo8cmVjdCB4PSIyNTYiIHk9IjE2NS4xNSIgc3R5bGU9ImZpbGw6IzFDMkVERTsiIHdpZHRoPSIxMjIuNTUiIGhlaWdodD0iMjY0Ljg1Ii8+DQo8cmVjdCB4PSIxMTcuNTciIHk9IjEwMy44NyIgc3R5bGU9ImZpbGw6IzU0RkJGRjsiIHdpZHRoPSIyNzYuODciIGhlaWdodD0iNzIuNTUiLz4NCjxyZWN0IHg9IjI1NiIgeT0iMTAzLjg3IiBzdHlsZT0iZmlsbDojMDBCN0JFOyIgd2lkdGg9IjEzOC40MyIgaGVpZ2h0PSI3Mi41NSIvPg0KPGc+DQoJPHBhdGggc3R5bGU9ImZpbGw6IzU0RkJGRjsiIGQ9Ik0xOTEuNTUxLDM4Mi43OThoLTEuMmMtMTAuMTI5LDAtMTguMzQtOC4yMTEtMTguMzQtMTguMzRWMjM1LjEwNWMwLTEwLjEyOSw4LjIxMS0xOC4zNCwxOC4zNC0xOC4zNA0KCQloMS4yYzEwLjEyOSwwLDE4LjM0LDguMjExLDE4LjM0LDE4LjM0djEyOS4zNTNDMjA5Ljg5MSwzNzQuNTg3LDIwMS42OCwzODIuNzk4LDE5MS41NTEsMzgyLjc5OHoiLz4NCgk8cGF0aCBzdHlsZT0iZmlsbDojNTRGQkZGOyIgZD0iTTI1Ni42LDM4Mi43OThoLTEuMmMtMTAuMTI5LDAtMTguMzQtOC4yMTEtMTguMzQtMTguMzRWMjM1LjEwNWMwLTEwLjEyOSw4LjIxMS0xOC4zNCwxOC4zNC0xOC4zNA0KCQloMS4yYzEwLjEyOSwwLDE4LjM0LDguMjExLDE4LjM0LDE4LjM0djEyOS4zNTNDMjc0Ljk0LDM3NC41ODcsMjY2LjcyOSwzODIuNzk4LDI1Ni42LDM4Mi43OTh6Ii8+DQo8L2c+DQo8Zz4NCgk8cGF0aCBzdHlsZT0iZmlsbDojMDBCN0JFOyIgZD0iTTI3NC45NCwyMzUuMXYxMjkuMzZjMCwxMC4xMy04LjIxLDE4LjM0LTE4LjM0LDE4LjM0SDI1NlYyMTYuNzdoMC42DQoJCUMyNjYuNzMsMjE2Ljc3LDI3NC45NCwyMjQuOTgsMjc0Ljk0LDIzNS4xeiIvPg0KCTxwYXRoIHN0eWxlPSJmaWxsOiMwMEI3QkU7IiBkPSJNMzIxLjY0OSwzODIuNzk4aC0xLjJjLTEwLjEyOSwwLTE4LjM0LTguMjExLTE4LjM0LTE4LjM0VjIzNS4xMDVjMC0xMC4xMjksOC4yMTEtMTguMzQsMTguMzQtMTguMzQNCgkJaDEuMmMxMC4xMjksMCwxOC4zNCw4LjIxMSwxOC4zNCwxOC4zNHYxMjkuMzUzQzMzOS45ODgsMzc0LjU4NywzMzEuNzc3LDM4Mi43OTgsMzIxLjY0OSwzODIuNzk4eiIvPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=" /></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        <!-- tax + subtotal -->
                        <tr class="extracosts">
                            <td class="light">SubTotal:</td>
                            <td colspan="2" class="light"></td>
                            <td colspan="2" style="color: black">{{Cart::getSubTotal()}} €</td>
                            <td>&nbsp;</td>
                        </tr>
                        <?php
                        $iva = Cart::getTotal()*0.21;
                        ?>
                        <tr class="totalprice">
                            <td class="light">Total con IVA:</td>
                            <td colspan="2">&nbsp;</td>
                            <td colspan="2"><span class="thick">{{Cart::getTotal()+$iva}} €</span></td>
                        </tr>

                        <!-- checkout btn -->
                        <tr class="checkoutrow">
                            <form action="/fooding/restaurante/{{$id}}/pedido" method="POST">
                                @csrf
                                @php
                                $cont = 0;
                                @endphp
                                @foreach (Cart::getContent() as $item)
                                    <input type="hidden" name="{{$cont}}" value="{{$item->id}}">
                                    <input type="hidden" name="{{"cant".$cont}}" value="{{$item->quantity}}">
                                    @php
                                    $cont++
                                    @endphp
                                @endforeach

                            <td colspan="5" class="checkout"><button id="submitbtn">Enviar Pedido</button></td>
                            </form>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @endif

</body>

</html>
