<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
        crossorigin="anonymous"></script>
<style>
    body {
        margin: 0px;
        padding: 0px;
    }

    .menu-container-fluid {
        width: 100%;
        margin: auto;
    }

    .menu-nav-link {
        display: block;
        padding: 1rem 2.1rem;
        font-size: 20px;
        border: none;
        background: none;
        width: 100%;
        text-decoration: none;
    }

    .menu-nav-link:focus, .menu-nav-link:hover {
        text-decoration: none
    }

    .btn-a {
        transition: none;
        text-align: left;
    }

    .btn-but {

        display: inline-block;
        padding: 7px;


        text-align: center;
        text-decoration: none;
        vertical-align: middle;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        border: var(--bs-btn-border-width) solid var(--bs-btn-border-color);
        border-radius: var(--bs-btn-border-radius);
        background-color: var(--bs-btn-bg);
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
    }

    .menu-nav, .menu-nav-twoo {

        padding: 0;
        margin: 0;
        list-style: none

    }

    .menu-nav-item {

        background: white;
        border-bottom: 1px solid #c7c7c7;


    }

    .close-dismiss-div {
        background: #0f6674;
        height: 50px;
    }

    .close-dismiss-div .btn-but {
        float: right;
    }

    #menu-nav {
        position: fixed;
        left: -100%;
        top: 0%;
        bottom: 0%;
        background: #b8cdd5;
        height: 100%;
        width: 100%;
        transition: .45s;
    }

    .menu-nav-twoo {
        position: fixed;
        left: 100%;
        top: 0%;
        bottom: 0%;
        background: #b8cdd5;
        height: 100%;
        width: 100%;
        transition: .45s;
    }
    .menu-nav-three {
        position: fixed;
        left: 200%;
        top: 0%;
        bottom: 0%;
        background: #b8cdd5;
        height: 100%;
        width: 100%;
        transition: .45s;
    }

    .menu-goster {
        left: 0% !important;
    }
</style>
<body>

<button type="button" class="btn-but btn-menu-open">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="Black" class="bi bi-x-lg" viewBox="0 0 16 16">
        <path
            d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
    </svg>
</button>


<div id="menu-nav">
    <div class="menu-container-fluid">
        <nav class="menu-nav">
            <div class="close-dismiss-div">
                <button type="button" class="btn-but btn-menu-close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-x-lg"
                         viewBox="0 0 16 16">
                        <path
                            d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                    </svg>
                </button>


            </div>
            <ul class="menu-nav">
                @foreach($menu as $item)
                    <li class="menu-nav-item">
                        <button type="button" onclick="opennav('#twoo{{$item->id}}')"
                                class="menu-nav-link btn-a ">{{$item->name}}</button>
                        <ul class="menu-nav-twoo " id="twoo{{$item->id}}">
                            @foreach($item->getP as $itemTwo)
                                <div class="close-dismiss-div">
                                    <button type="button" onclick="openclose('#twoo{{$item->id}}' )" class="btn-but ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-x-lg"
                                             viewBox="0 0 16 16">
                                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                                        </svg>
                                    </button>
                                </div>

                                <li class="menu-nav-item">
                                    <a class="menu-nav-link btn-a " href="#">{{$itemTwo->name}}</a>




                                    <ul class="menu-nav-three " id="three{{$itemTwo->id}}">
                                        @foreach($itemTwo->getP as $itemThree)
                                            <div class="close-dismiss-div">
                                                <button type="button" onclick="openclose('#three{{$itemTwo->id}}' )"
                                                        class="btn-but ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                         fill="white" class="bi bi-x-lg"
                                                         viewBox="0 0 16 16">
                                                        <path
                                                            d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                                                    </svg>
                                                </button>
                                            </div>
                                            <li class="menu-nav-item">
                                                <a class="menu-nav-link btn-a " href="#">{{$itemThree->name}}</a>
                                            </li>
                                        @endforeach

                                    </ul>


                                </li>
                            @endforeach

                        </ul>
                    </li>
                @endforeach

            </ul>
        </nav>
    </div>
</div>

</body>
<script>
    $(".btn-menu-open").click(function () {
        $("#menu-nav").addClass("menu-goster")
    })
    $(".btn-menu-close").click(function () {
        $("#menu-nav").removeClass("menu-goster")
    })

    function opennav(a) {

        $(a).addClass("menu-goster")

    }

    function openclose(a) {

        $(a).removeClass("menu-goster")

    }
</script>
</html>
