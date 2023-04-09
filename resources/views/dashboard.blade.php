@extends('layouts.app')

@section('content')

<section class="content">
    <header class="main-header">
        <div class="main-header__nav">
            <h1 class="main-header__title">
                <i class="pe-7f-home"></i>
                <span>Dashboard</span>
            </h1>
            <ul class="main-header__breadcrumb">
                <li>
                    <a href="#" onclick="return false;">Home</a>
                </li>
                <li>
                    <a href="#" onclick="return false;">Dashboard</a>
                </li>
                <li class="active">
                    <a href="#" onclick="return false;">Sample Pages</a>
                </li>
            </ul>
        </div>

        <div class="main-header__date">
            <input type="radio" id="radio_date_1" name="tab-radio" value="today" checked>
            <!--
        -->
            <label class="fixed-width" for="radio_date_1">Today</label><!--
        --><input type="radio" id="radio_date_2" name="tab-radio" value="yesterday">
            <!--
        -->
            <label class="fixed-width" for="radio_date_2">Yesterday</label>
            <!--
        -->
            <button>
                <i class="pe-7f-date"></i>
                <span>February 26, 2014</span>
            </button>
        </div>
    </header>
    <!-- /main-header -->

    <div data-tab-radio="tab-radio" class="tab-radio-content row" id="today">
        <div class="main-stats__stat col-md-3 col-sm-3">
            <h3 class="main-stats__title">Resume<br> of the day.</h3>
            <p class="main-stats__resume">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>

        </div>
        <!-- /col -->

        <div class="main-stats__stat col-md-3 col-sm-3 col-xs-4">
            <div class="stat-circle">
                <h3>16k</h3>
                <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 92 92">
                    <circle style="opacity:0.16;fill:none;stroke:#000000;stroke-width:2;stroke-miterlimit:10;" cx="46" cy="46" r="45"/>
                    <path style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-miterlimit:10;" d="M84.839,68.718C88.749,62.049,91,54.289,91,46C91,21.147,70.853,1,46,1"/>
                </svg>
            </div>
            <!-- /stat-circle -->
            <h4 class="main-stats__subtitle">Total<br> balance<br>
                <span class="main-stats__resume">+ 43%</span>
            </h4>
        </div>
        <!-- /col -->

        <div class="main-stats__stat col-md-3 col-sm-3 col-xs-4">
            <div class="stat-circle">
                <h3>194</h3>
                <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 92 92">
                    <circle style="opacity:0.16;fill:none;stroke:#000000;stroke-width:2;stroke-miterlimit:10;" cx="46" cy="46" r="45"/>
                    <path style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-miterlimit:10;" d="M6.185,66.968C13.725,81.256,28.721,91,46,91c24.853,0,45-20.147,45-45C91,21.147,70.853,1,46,1"/>
                </svg>
            </div>
            <!-- /stat-circle -->
            <h4 class="main-stats__subtitle">New<br> members<br>
                <span class="main-stats__resume">+ 65%</span>
            </h4>

        </div>
        <!-- /col -->

        <div class="main-stats__stat col-md-3 col-sm-3 col-xs-4">
            <div class="stat-circle">
                <h3>76</h3>
                <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 92 92">
                    <circle style="opacity:0.16;fill:none;stroke:#000000;stroke-width:2;stroke-miterlimit:10;" cx="46" cy="46" r="45"/>
                    <path style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-miterlimit:10;" d="M91,46C91,21.147,70.853,1,46,1"/>
                </svg>
            </div>
            <!-- /stat-circle -->
            <h4 class="main-stats__subtitle">New<br> orders<br>
                <span class="main-stats__resume">+ 25%</span>
            </h4>
        </div>
        <!-- /col -->

    </div>
    <!-- row -->

    <div data-tab-radio="tab-radio" class="tab-radio-content row" id="yesterday">
        <div class="main-stats__stat col-md-3 col-sm-3">
            <h3 class="main-stats__title">Resume<br> of yesterday.</h3>
            <p class="main-stats__resume">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia illo earum est quisquam, atque non!</p>

        </div>
        <!-- /col -->

        <div class="main-stats__stat col-md-3 col-sm-3 col-xs-4">
            <div class="stat-circle">
                <h3>19k</h3>
                <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 92 92">
                    <circle style="opacity:0.16;fill:none;stroke:#000000;stroke-width:2;stroke-miterlimit:10;" cx="46" cy="46" r="45"/>
                    <path style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-miterlimit:10;" d="M84.839,68.718C88.749,62.049,91,54.289,91,46C91,21.147,70.853,1,46,1"/>
                </svg>
            </div>
            <!-- /stat-circle -->
            <h4 class="main-stats__subtitle">Total<br> balance<br>
                <span class="main-stats__resume">+ 49%</span>
            </h4>
        </div>
        <!-- /col -->

        <div class="main-stats__stat col-md-3 col-sm-3 col-xs-4">
            <div class="stat-circle">
                <h3>184</h3>
                <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 92 92">
                    <circle style="opacity:0.16;fill:none;stroke:#000000;stroke-width:2;stroke-miterlimit:10;" cx="46" cy="46" r="45"/>
                    <path style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-miterlimit:10;" d="M6.185,66.968C13.725,81.256,28.721,91,46,91c24.853,0,45-20.147,45-45C91,21.147,70.853,1,46,1"/>
                </svg>
            </div>
            <!-- /stat-circle -->
            <h4 class="main-stats__subtitle">New<br> members<br>
                <span class="main-stats__resume">+ 61%</span>
            </h4>

        </div>
        <!-- /col -->

        <div class="main-stats__stat col-md-3 col-sm-3 col-xs-4">
            <div class="stat-circle">
                <h3>52</h3>
                <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 92 92">
                    <circle style="opacity:0.16;fill:none;stroke:#000000;stroke-width:2;stroke-miterlimit:10;" cx="46" cy="46" r="45"/>
                    <path style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-miterlimit:10;" d="M91,46C91,21.147,70.853,1,46,1"/>
                </svg>
            </div>
            <!-- /stat-circle -->
            <h4 class="main-stats__subtitle">New<br> orders<br>
                <span class="main-stats__resume">+ 15%</span>
            </h4>
        </div>
        <!-- /col -->

    </div>
    <!-- row -->

    <div class="row">

        <div class="col-md-7">
            <article class="widget">
                <header class="widget__header">
                    <div class="widget__title">
                        <i class="pe-7f-graph3"></i>
                        <h3>Statistics</h3>
                    </div>
                    <div class="widget__config">
                        <a href="#">
                            <i class="pe-7f-refresh"></i>
                        </a>
                        <a href="#">
                            <i class="pe-7s-close"></i>
                        </a>
                    </div>
                </header>

                <div class="widget__content filled">
                    <p class="graph-number">
                        <span>6,184</span> Visits</p>
                    <div id="chartdiv" style="width: 100%; height: 362px;"></div>

                </div>
            </article>
            <!-- /widget -->
        </div>

        <div class="col-md-5">
            <article class="widget">
                <header class="widget__header">
                    <div class="widget__title">
                        <i class="pe-7f-graph"></i>
                        <h3>Pie Chart</h3>
                    </div>
                    <div class="widget__config">
                        <a href="#">
                            <i class="pe-7f-refresh"></i>
                        </a>
                        <a href="#">
                            <i class="pe-7s-close"></i>
                        </a>
                    </div>
                </header>

                <div class="widget__content filled">
                    <p class="graph-number">
                        <span>3,424</span> Total Balance</p>
                    <div class="pie-container">
                        <div class="pie-number">
                            <h3>42</h3>
                            <p>my balance</p>
                        </div>
                        <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 180 179">
                            <path fill="#ff3a2f" d="M88,0C48.6,0.9,15.4,27,4,62.9L7.9,64C18.8,29.8,50.4,4.9,88,4V0z"/>
                            <path fill="#52d669" d="M113.4,167.6C106,169.8,98,171,89.9,171C44.7,171,8,134.4,8,89.4c0-8,1.2-15.8,3.4-23.1L3.6,64
                                C1.3,72,0,80.5,0,89.4C0,138.9,40.2,179,89.9,179c9.1,0,17.8-1.4,26.1-3.9L113.4,167.6z"/>
                            <path fill="#1c7dfa" d="M90,0v16c40.8,0,74,33.1,74,73.8c0,32.5-21.2,60.2-50.5,70l5.1,15.2c35.7-11.9,61.4-45.6,61.4-85.2
                                C180,40.2,139.7,0,90,0z"/>
                        </svg>
                    </div>

                </div>

                <div class="widget__content filled">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-4 mini-stats">
                            <div class="pie-small blue"></div>
                            <p>
                                <span>43%</span><br>
                                Members
                            </p>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4 mini-stats">
                            <div class="pie-small green"></div>
                            <p>
                                <span>36%</span><br>
                                Sales
                            </p>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4 mini-stats">
                            <div class="pie-small red"></div>
                            <p>
                                <span>21%</span><br>
                                Loss
                            </p>
                        </div>
                    </div>
                </div>

            </article>
            <!-- /widget -->
        </div>

    </div>
    <!-- /row -->

    <div class="row">

        <div class="col-md-6">
            <article class="widget">
                <header class="widget__header">
                    <div class="widget__title">
                        <i class="pe-7f-chat"></i>
                        <h3>Messages</h3>
                    </div>
                    <div class="widget__config">
                        <a href="#">
                            <i class="pe-7f-refresh"></i>
                        </a>
                        <a href="#" style="line-height: 68px;">
                            <i class="pe-7g-arrow2-down"></i>
                        </a>
                    </div>
                </header>

                <div class="widget__content">
                    <div class="tabs">
                        <input type="radio" id="tab1" name="msgs_tabs" checked>
                        <label for="tab1" class="tabs__tab">Latest</label>
                        <input type="radio" id="tab2" name="msgs_tabs">
                        <label for="tab2" class="tabs__tab">Oldest</label>
                        <input type="radio" id="tab3" name="msgs_tabs">
                        <label for="tab3" class="tabs__tab">Favorites</label>
                        <div class="clearfix"></div>

                        <div class="tabs__content">

                            <div class="tabs__content--1">

                                <div class="media message">
                                    <figure class="pull-left rounded-image message__img">
                                        <img class="media-object" src="assets/img/user1.jpg" alt="user">
                                    </figure>
                                    <div class="media-body">
                                        <h4 class="media-heading message__heading">Victoria Campel  <span>from twitter  /  6 hours ago</span></h4>
                                        <p class="message__msg">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                        <input type="checkbox" class="msg-o" id="msg-o1" checked>
                                        <label class="message__controls--opener" for="msg-o1">
                                            <i class="pe-7s-note"></i>
                                        </label>
                                        <div class="message__controls--cont">
                                            <ul class="message__controls">
                                                <li>
                                                    <a href="#" onclick="return false;">
                                                        <i class="pe-7f-back pe-rotate-180"></i>
                                                        <span>Reply</span></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="set_fav" onclick="return false;">
                                                        <i class="pe-7f-star"></i>
                                                        <span>Favorite</span></a>
                                                </li>
                                                <li>
                                                    <a href="#" onclick="return false;">
                                                        <i class="pe-7f-trash"></i>
                                                        <span>Delete</span></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="close_cntrl" onclick="return false;">
                                                        <i class="pe-7g-arrow2-up"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /message -->

                                <div class="media message fav">
                                    <figure class="pull-left rounded-image message__img">
                                        <img class="media-object" src="assets/img/user2.jpg" alt="user">
                                    </figure>
                                    <div class="media-body">
                                        <h4 class="media-heading message__heading">Joseph Lewis <span>from twitter  /  1 day ago</span></h4>
                                        <p class="message__msg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                        <input type="checkbox" class="msg-o" id="msg-o2">
                                        <label class="message__controls--opener" for="msg-o2">
                                            <i class="pe-7s-note"></i>
                                        </label>
                                        <div class="message__controls--cont">
                                            <ul class="message__controls">
                                                <li>
                                                    <a href="#" onclick="return false;">
                                                        <i class="pe-7f-back pe-rotate-180"></i>
                                                        <span>Reply</span></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="set_fav" onclick="return false;">
                                                        <i class="pe-7f-star"></i>
                                                        <span>Favorite</span></a>
                                                </li>
                                                <li>
                                                    <a href="#" onclick="return false;">
                                                        <i class="pe-7f-trash"></i>
                                                        <span>Delete</span></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="close_cntrl" onclick="return false;">
                                                        <i class="pe-7g-arrow2-up"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /message -->

                                <div class="media message">
                                    <figure class="pull-left rounded-image message__img">
                                        <img class="media-object" src="assets/img/user3.jpg" alt="user">
                                    </figure>
                                    <div class="media-body">
                                        <h4 class="media-heading message__heading">Robert Smith  <span>from twitter  /  2 days ago</span></h4>
                                        <p class="message__msg">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                        <hr>
                                        <div class="message__reply">
                                            <h4 class="media-heading message__heading">
                                                <i class="pe-7f-back pe-rotate-180"></i> Admin  <span>/  2 days ago</span></h4>
                                            <p class="message__msg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                        <input type="checkbox" class="msg-o" id="msg-o3">
                                        <label class="message__controls--opener" for="msg-o3">
                                            <i class="pe-7s-note"></i>
                                        </label>
                                        <div class="message__controls--cont">
                                            <ul class="message__controls">
                                                <li>
                                                    <a href="#" onclick="return false;">
                                                        <i class="pe-7f-back pe-rotate-180"></i>
                                                        <span>Reply</span></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="set_fav" onclick="return false;">
                                                        <i class="pe-7f-star"></i>
                                                        <span>Favorite</span></a>
                                                </li>
                                                <li>
                                                    <a href="#" onclick="return false;">
                                                        <i class="pe-7f-trash"></i>
                                                        <span>Delete</span></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="close_cntrl" onclick="return false;">
                                                        <i class="pe-7g-arrow2-up"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /message -->
                                <div class="message__write">
                                    <form action="#">
                                        <input type="file" id="add_attachment">
                                        <label for="add_attachment">
                                            <i class="pe-7f-paperclip  pe-rotate-90"></i>
                                        </label><input type="text" placeholder="Leave a Message ..."><input type="submit" id="send_msg">
                                        <label for="send_msg">
                                            <i class="pe-7g-arrow2-up"></i>
                                        </label>
                                    </form>
                                </div>
                            </div>
                            <!-- /tabscontent1 -->

                            <div class="tabs__content--2">

                                <div class="media message">
                                    <figure class="pull-left rounded-image message__img">
                                        <img class="media-object" src="assets/img/user1.jpg" alt="user">
                                    </figure>
                                    <div class="media-body">
                                        <h4 class="media-heading message__heading">Victoria Campel  <span>from twitter  /  6 hours ago</span></h4>
                                        <p class="message__msg">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                                        <input type="checkbox" class="msg-o" id="msg-o4" checked>
                                        <label class="message__controls--opener" for="msg-o4">
                                            <i class="pe-7s-note"></i>
                                        </label>
                                        <div class="message__controls--cont">
                                            <ul class="message__controls">
                                                <li>
                                                    <a href="#" onclick="return false;">
                                                        <i class="pe-7f-back pe-rotate-180"></i>
                                                        <span>Reply</span></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="set_fav" onclick="return false;">
                                                        <i class="pe-7f-star"></i>
                                                        <span>Favorite</span></a>
                                                </li>
                                                <li>
                                                    <a href="#" onclick="return false;">
                                                        <i class="pe-7f-trash"></i>
                                                        <span>Delete</span></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="close_cntrl" onclick="return false;">
                                                        <i class="pe-7g-arrow2-up"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /message -->

                                <div class="media message fav">
                                    <figure class="pull-left rounded-image message__img">
                                        <img class="media-object" src="assets/img/user2.jpg" alt="user">
                                    </figure>
                                    <div class="media-body">
                                        <h4 class="media-heading message__heading">Joseph Lewis <span>from twitter  /  1 day ago</span></h4>
                                        <p class="message__msg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <input type="checkbox" class="msg-o" id="msg-o5">
                                        <label class="message__controls--opener" for="msg-o5">
                                            <i class="pe-7s-note"></i>
                                        </label>
                                        <div class="message__controls--cont">
                                            <ul class="message__controls">
                                                <li>
                                                    <a href="#" onclick="return false;">
                                                        <i class="pe-7f-back pe-rotate-180"></i>
                                                        <span>Reply</span></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="set_fav" onclick="return false;">
                                                        <i class="pe-7f-star"></i>
                                                        <span>Favorite</span></a>
                                                </li>
                                                <li>
                                                    <a href="#" onclick="return false;">
                                                        <i class="pe-7f-trash"></i>
                                                        <span>Delete</span></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="close_cntrl" onclick="return false;">
                                                        <i class="pe-7g-arrow2-up"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /message -->

                                <div class="message__write">
                                    <form action="#">
                                        <input type="file" id="add_attachment">
                                        <label for="add_attachment">
                                            <i class="pe-7f-paperclip  pe-rotate-90"></i>
                                        </label><input type="text" placeholder="Leave a Message ..."><input type="submit" id="send_msg">
                                        <label for="send_msg">
                                            <i class="pe-7f-up-arrow"></i>
                                        </label>
                                    </form>
                                </div>
                            </div>
                            <!-- /tabscontent2 -->

                            <div class="tabs__content--3">

                                <div class="media message fav">
                                    <figure class="pull-left rounded-image message__img">
                                        <img class="media-object" src="assets/img/user2.jpg" alt="user">
                                    </figure>
                                    <div class="media-body">
                                        <h4 class="media-heading message__heading">Joseph Lewis <span>from twitter  /  1 day ago</span></h4>
                                        <p class="message__msg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <input type="checkbox" class="msg-o" id="msg-o6">
                                        <label class="message__controls--opener" for="msg-o6">
                                            <i class="pe-7s-note"></i>
                                        </label>
                                        <div class="message__controls--cont">
                                            <ul class="message__controls">
                                                <li>
                                                    <a href="#" onclick="return false;">
                                                        <i class="pe-7f-back pe-rotate-180"></i>
                                                        <span>Reply</span></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="set_fav" onclick="return false;">
                                                        <i class="pe-7f-star"></i>
                                                        <span>Favorite</span></a>
                                                </li>
                                                <li>
                                                    <a href="#" onclick="return false;">
                                                        <i class="pe-7f-trash"></i>
                                                        <span>Delete</span></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="close_cntrl" onclick="return false;">
                                                        <i class="pe-7g-arrow2-up"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /message -->

                                <div class="media message">
                                    <figure class="pull-left rounded-image message__img">
                                        <img class="media-object" src="assets/img/user3.jpg" alt="user">
                                    </figure>
                                    <div class="media-body">
                                        <h4 class="media-heading message__heading">Robert Smith  <span>from twitter  /  2 days ago</span></h4>
                                        <p class="message__msg">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                        <hr>
                                        <div class="message__reply">
                                            <h4 class="media-heading message__heading">
                                                <i class="pe-7f-back pe-rotate-180"></i> Admin  <span>/  2 days ago</span></h4>
                                            <p class="message__msg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                        <input type="checkbox" class="msg-o" id="msg-o7">
                                        <label class="message__controls--opener" for="msg-o7">
                                            <i class="pe-7s-note"></i>
                                        </label>
                                        <div class="message__controls--cont">
                                            <ul class="message__controls">
                                                <li>
                                                    <a href="#" onclick="return false;">
                                                        <i class="pe-7f-back pe-rotate-180"></i>
                                                        <span>Reply</span></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="set_fav" onclick="return false;">
                                                        <i class="pe-7f-star"></i>
                                                        <span>Favorite</span></a>
                                                </li>
                                                <li>
                                                    <a href="#" onclick="return false;">
                                                        <i class="pe-7f-trash"></i>
                                                        <span>Delete</span></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="close_cntrl" onclick="return false;">
                                                        <i class="pe-7g-arrow2-up"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /message -->
                                <div class="message__write">
                                    <form action="#">
                                        <input type="file" id="add_attachment">
                                        <label for="add_attachment">
                                            <i class="pe-7f-paperclip  pe-rotate-90"></i>
                                        </label><input type="text" placeholder="Leave a Message ..."><input type="submit" id="send_msg">
                                        <label for="send_msg">
                                            <i class="pe-7f-up-arrow"></i>
                                        </label>
                                    </form>
                                </div>
                            </div>
                            <!-- /tabscontent3 -->
                        </div>

                    </div>
                    <!-- /tabs -->

                </div>
                <!-- /widget__content -->

            </article>
            <!-- /widget -->
        </div>

        <div class="col-md-6">
            <article class="widget">
                <header class="widget__header">
                    <div class="widget__title">
                        <i class="pe-7f-user"></i>
                        <h3>Members</h3>
                    </div>
                    <div class="widget__config">
                        <a href="#">
                            <i class="pe-7f-refresh"></i>
                        </a>
                        <a href="#">
                            <i class="pe-7s-close"></i>
                        </a>
                    </div>
                </header>

                <div class="widget__content">
                    <div class="members__controls">
                        <div class="members__controls--total">
                            Total users <span>184,036</span>
                        </div>
                        <div class="members__controls--order custom-dropdown">
                            <select class="dropdown-select">
                                <option value="1">Sort by <i style="
                            content:url(assets/img/arrow.svg);
                            width: 15px; height: 15px;
                            display: inline-block;
                            vertical-align: middle;
                            margin-left: 6px;
                            margin-top: -3px;
                        "></i>
                                </option>
                                <option value="2">Name</option>
                                <option value="3">Location</option>
                                <option value="4">Added</option>
                            </select>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="members__container">

                        <div class="media message checked">
                            <figure class="pull-left rounded-image message__img">
                                <img class="media-object" src="assets/img/user4.jpg" alt="user">
                            </figure>
                            <div class="media-body">
                                <h4 class="media-heading message__heading">Paul Robert Smith</h4>
                                <p class="message__location">
                                    <i class="pe-7f-map-marker"></i>  Manhattan, United States
                                </p>

                                <a class="c-btn--check"></a>
                                <input type="checkbox" class="btn-more-check" id="more1">
                                <label class="c-btn--more" for="more1"></label>

                                <div class="message__details">
                                    <table>
                                        <tr>
                                            <td>Email:</td>
                                            <td>info@contact.com</td>
                                        </tr>
                                        <tr>
                                            <td>Site:</td>
                                            <td>www.companyname.com</td>
                                        </tr>
                                        <tr>
                                            <td>Company:</td>
                                            <td>CompanyName</td>
                                        </tr>
                                        <tr>
                                            <td>Plan:</td>
                                            <td>Premium</td>
                                        </tr>
                                        <tr>
                                            <td>Messages:</td>
                                            <td>
                                                <span class="badge badge--line badge--blue">16</span></td>
                                        </tr>
                                    </table>
                                </div>

                            </div>
                        </div>

                        <div class="media message checked">
                            <figure class="pull-left rounded-image message__img">
                                <img class="media-object" src="assets/img/user1.jpg" alt="user">
                            </figure>
                            <div class="media-body">
                                <h4 class="media-heading message__heading">Victoria Campel</h4>
                                <p class="message__location">
                                    <i class="pe-7f-map-marker"></i>  Barcelona, Spain
                                </p>

                                <a class="c-btn--check"></a>
                                <input type="checkbox" class="btn-more-check" id="more2" checked>
                                <label class="c-btn--more" for="more2"></label>

                                <div class="message__details">
                                    <table>
                                        <tr>
                                            <td>Email:</td>
                                            <td>info@contact.com</td>
                                        </tr>
                                        <tr>
                                            <td>Site:</td>
                                            <td>www.companyname.com</td>
                                        </tr>
                                        <tr>
                                            <td>Company:</td>
                                            <td>CompanyName</td>
                                        </tr>
                                        <tr>
                                            <td>Pan:</td>
                                            <td>Premium</td>
                                        </tr>
                                        <tr>
                                            <td>Messages:</td>
                                            <td>
                                                <span class="badge badge--line badge--blue">16</span></td>
                                        </tr>
                                    </table>
                                </div>

                            </div>
                        </div>

                        <div class="media message">
                            <figure class="pull-left rounded-image message__img">
                                <img class="media-object" src="assets/img/user2.jpg" alt="user">
                            </figure>
                            <div class="media-body">
                                <h4 class="media-heading message__heading">Joseph Lewis</h4>
                                <p class="message__location">
                                    <i class="pe-7f-map-marker"></i>  London, United Kingdom
                                </p>

                                <a class="c-btn--check"></a>
                                <input type="checkbox" class="btn-more-check" id="more3">
                                <label class="c-btn--more" for="more3"></label>

                                <div class="message__details">
                                    <table>
                                        <tr>
                                            <td>Email:</td>
                                            <td>info@contact.com</td>
                                        </tr>
                                        <tr>
                                            <td>Site:</td>
                                            <td>www.companyname.com</td>
                                        </tr>
                                        <tr>
                                            <td>Company:</td>
                                            <td>CompanyName</td>
                                        </tr>
                                        <tr>
                                            <td>Pan:</td>
                                            <td>Premium</td>
                                        </tr>
                                        <tr>
                                            <td>Messages:</td>
                                            <td>
                                                <span class="badge badge--line badge--blue">16</span></td>
                                        </tr>
                                    </table>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- /members__container -->

                    <div class="clearfix"></div>

                    <div class="members__footer">
                        <button class="members__load-more">
                            <span>+</span> Load More...</button>
                        <button class="members__search">
                            <i class="pe-7s-graph2"></i> Analytics
                        </button>
                    </div>

                </div>
            </article>
            <!-- /widget -->
        </div>

    </div>
    <!-- /row -->

    <div class="row">

        <div class="col-md-4">
            <article class="widget">
                <header class="widget__header one-btn">
                    <div class="widget__title">
                        <i class="pe-7f-speaker"></i>
                        <h3>Alert messages</h3>
                    </div>
                    <div class="widget__config">
                        <a href="#">
                            <i class="pe-7f-refresh"></i>
                        </a>
                    </div>
                </header>

                <div class="widget__content">

                    <div class="alert alert-fixed alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">
                                <i class="pe-7s-close"></i>
                            </span>
                            <span class="sr-only">Close</span></button>
                        <div class="alert__icon pull-left">
                            <i class="pe-7s-check"></i>
                        </div>
                        <p class="alert__text"> Success! The page has been...</p>
                    </div>

                    <div class="alert alert-fixed alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">
                                <i class="pe-7s-close"></i>
                            </span>
                            <span class="sr-only">Close</span></button>
                        <div class="alert__icon pull-left">
                            <i class="pe-7s-attention"></i>
                        </div>
                        <p class="alert__text"> Warning! Your monthly<br> traffic...</p>
                    </div>

                    <div class="alert alert-fixed alert-info alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">
                                <i class="pe-7s-close"></i>
                            </span>
                            <span class="sr-only">Close</span></button>
                        <div class="alert__icon pull-left">
                            <i class="pe-7s-info"></i>
                        </div>
                        <p class="alert__text"> Info! You have 24 unread <br>mess...</p>
                    </div>

                    <div class="alert alert-fixed alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">
                                <i class="pe-7s-close"></i>
                            </span>
                            <span class="sr-only">Close</span></button>
                        <div class="alert__icon pull-left">
                            <i class="pe-7s-close-circle"></i>
                        </div>
                        <p class="alert__text"> Error! The Chart page has...</p>
                    </div>

                </div>
                <!-- /widget__content -->

            </article>
            <!-- /widget -->
        </div>

        <div class="col-md-8">
            <article class="widget">
                <header class="widget__header one-btn">
                    <div class="widget__title">
                        <i class="pe-7f-menu"></i>
                        <h3>Media Table</h3>
                    </div>
                    <div class="widget__config">
                        <a href="#">
                            <i class="pe-7s-plus"></i>
                        </a>
                    </div>
                </header>

                <div class="widget__content table-responsive">

                    <table class="table table-striped media-table">
                        <thead>
                            <tr>
                                <th width="270">Post Description</th>
                                <th width="120">Date</th>
                                <th>Post Info</th>
                                <th>Del</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr class="spacer"></tr>
                            <tr>
                                <td>
                                    <div class="media">
                                        <figure class="pull-left post__img">
                                            <img class="media-object" src="assets/img/post1.jpg" alt="user">
                                        </figure>
                                        <div class="media-body post_desc">
                                            <h3>Gravity Psd B-Cards</h3>
                                            <p>A classic approach...</p>
                                            <button class="btn blue btn-sm">Edit</button>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="post__date">26 Feb, 2014 <br>15:20</p>
                                </td>
                                <td class="not-padding">
                                    <p class="post__info">A classic approach to our gravity series of psd business cards mockup which can be used for both vertical...</p>
                                </td>
                                <td>
                                    <a href="#" onclick="return false;" class="post__del">
                                        <i class="pe-7f-close"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr class="spacer"></tr>
                            <tr>
                                <td>
                                    <div class="media">
                                        <figure class="pull-left post__img">
                                            <img class="media-object" src="assets/img/post2.jpg" alt="user">
                                        </figure>
                                        <div class="media-body post_desc">
                                            <h3>Psd Foil Sticker</h3>
                                            <p>A set of shiny psd foil...</p>
                                            <button class="btn blue btn-sm">Edit</button>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="post__date">20 Feb, 2014 <br>11:05</p>
                                </td>
                                <td class="not-padding">
                                    <p class="post__info">A set of shiny psd foil stickers to decorate your designs. Easily change the color and content to create a nifty…</p>
                                </td>
                                <td>
                                    <a href="#" onclick="return false;" class="post__del">
                                        <i class="pe-7f-close"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr class="spacer"></tr>
                            <tr>
                                <td>
                                    <div class="media">
                                        <figure class="pull-left post__img">
                                            <img class="media-object" src="assets/img/post3.jpg" alt="user">
                                        </figure>
                                        <div class="media-body post_desc">
                                            <h3>Wood Burning Logo</h3>
                                            <p>A fresh looking wood...</p>
                                            <button class="btn blue btn-sm">Edit</button>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="post__date">19 Jan, 2014 <br>19:53</p>
                                </td>
                                <td class="not-padding">
                                    <p class="post__info">A fresh looking wood burning psd logo mockup with a pyrogravure art style to create burn marks of your design…</p>
                                </td>
                                <td>
                                    <a href="#" onclick="return false;" class="post__del">
                                        <i class="pe-7f-close"></i>
                                    </a>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                </div>
                <!-- /widget__content -->

            </article>
            <!-- /widget -->
        </div>

    </div>
    <!-- /row -->

    <div class="row">

        <div class="col-md-6">
            <article class="widget">
                <header class="widget__header">
                    <div class="widget__title">
                        <i class="pe-7f-edit"></i>
                        <h3>UI Elements</h3>
                    </div>
                    <div class="widget__config">
                        <a href="#">
                            <i class="pe-7f-refresh"></i>
                        </a>
                        <a href="#">
                            <i class="pe-7s-close"></i>
                        </a>
                    </div>
                </header>

                <div class="widget__content filled widget-ui">

                    <div class="row">
                        <div class="col-md-6 text-center">
                            <div class="switch-showcase">
                                Off

                                <input type="checkbox" id="s-2" class="sw"/>
                                <label class="switch2 blue" for="s-2"></label>

                                <input type="checkbox" id="s-1" class="sw"/>
                                <label class="switch" for="s-1"></label>
                                <br>

                                On

                                <input type="checkbox" id="s-3" class="sw" checked/>
                                <label class="switch2 blue" for="s-3"></label>

                                <input type="checkbox" id="s-4" class="sw" checked/>
                                <label class="switch" for="s-4"></label>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="cr-showcase">
                                <input type="radio" class="custom-radio" name="c-radio" id="cr1">
                                <label for="cr1"></label>
                                <input type="radio" class="custom-radio" name="c-radio" id="cr2" checked>
                                <label for="cr2"></label>
                                <input type="radio" class="custom-radio" name="c-radio" id="cr3">
                                <label for="cr3"></label>

                                <input type="checkbox" class="custom-checkbox" id="cc1">
                                <label for="cc1"></label>
                                <input type="checkbox" class="custom-checkbox" id="cc2" checked>
                                <label for="cc2"></label>

                                <div class="loader loader-small"></div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="progress blue">
                                <span class="num-min">
                                    <i class="pe-7f-play"></i>
                                </span>
                                <div class="progress-bar progress-bar-loaded" style="width: 35%">
                                    <span class="sr-only">35% Complete (success)</span>
                                </div>
                                <div class="progress-bar progress-bar-buffered" style="width: 20%">
                                    <span class="sr-only">20% Complete (warning)</span>
                                </div>
                                <span class="num-max">2:35</span>
                            </div>

                            <!-- <div class="slider"></div> -->
                            <div class="slider range-min active">
                                <span class="num-min">4k</span>
                                <span class="num-max">10k</span>
                            </div>
                            <div class="slider range green">
                                <span class="num-min">32k</span>
                                <span class="num-max">61k</span>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /widget__content -->

            </article>
            <!-- /widget -->
        </div>

        <div class="col-md-6">
            <article class="widget">
                <header class="widget__header">
                    <div class="widget__title">
                        <i class="pe-7f-browser"></i>
                        <h3>Buttons</h3>
                    </div>
                    <div class="widget__config">
                        <a href="#">
                            <i class="pe-7f-refresh"></i>
                        </a>
                        <a href="#">
                            <i class="pe-7s-close"></i>
                        </a>
                    </div>
                </header>

                <div class="widget__content filled pad20">

                    <div class="row">
                        <div class="col-md-5 text-center btn__showcase">
                            <button class="btn blue fixed">Blue</button><br>
                            <button class="btn green fixed">Green</button><br>
                            <button class="btn yellow fixed">Yellow</button><br>
                            <button class="btn red fixed">Red</button><br>
                            <button class="btn white fixed">White</button><br>
                            <button class="btn dark fixed">Dark</button>
                        </div>

                        <div class="col-md-7 text-center btn__showcase">

                            <div class="btn-group block">
                                <a type="button" class="btn blue">Left</a>
                                <a type="button" class="btn blue">Middle</a>
                                <a type="button" class="btn blue">Right</a>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-block white dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                                Dropdown
                                <span class="caret">
                                        <i class="pe-7g-arrow2-down"></i>
                                    </span>
                                </button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="#">Image Gallery</a>
                                    </li>
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="#">Latest Features</a>
                                    </li>
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="#">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown open">
                                <button class="btn btn-block blue dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown">
                                Dropdown
                                <span class="caret">
                                        <i class="pe-7g-arrow2-down"></i>
                                    </span>
                                </button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2">
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="#">Image Gallery</a>
                                    </li>
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="#">Latest Features</a>
                                    </li>
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="#">Contact Us</a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>

                </div>
            </article>
            <!-- /widget -->
        </div>

    </div>

</section>

@endsection
