@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
            <div class="well profile">
                <div class="col-sm-12">
                    <div class="col-xs-12 col-sm-8">

                        <h2 value="firstName">Имя: </h2>
                        <h2 value="lastName">Фамилия: </h2>
                        <h2 value="surName">Отчество: </h2>

                        <p><strong>Обо мне: </strong> Веб-дизайнер. </p>
                        <p><strong>Хобби: </strong> Книги, природа, активный отдых, сайтостроение, дизайн, верстка </p>
                        <p><strong>Знания: </strong>
                            <span class="tags">HTML5</span>
                            <span class="tags">CSS3</span>
                            <span class="tags">jQuery</span>
                            <span class="tags">Bootstrap</span>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-4 text-center">
                        <figure>
                            <img src="http://placehold.it/167x167" alt="user" class="img-circle img-responsive">
                            <figcaption class="ratings">
                                <p>Рейтинг
                                    <a href="#">
                                        <span class="fa fa-star"></span>
                                    </a>
                                    <a href="#">
                                        <span class="fa fa-star"></span>
                                    </a>
                                    <a href="#">
                                        <span class="fa fa-star"></span>
                                    </a>
                                    <a href="#">
                                        <span class="fa fa-star"></span>
                                    </a>
                                    <a href="#">
                                        <span class="fa fa-star-o"></span>
                                    </a>
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-xs-12 divider text-center">
                    <div class="col-xs-12 col-sm-4 emphasis">
                        <h2><strong> 32,4K </strong></h2>
                        <p><small>Подписчиков</small></p>
                        <button class="btn btn-success btn-block"><span class="fa fa-plus-circle"></span> Подписатся</button>
                    </div>
                    <div class="col-xs-12 col-sm-4 emphasis">
                        <h2><strong>723</strong></h2>
                        <p><small>Записей</small></p>
                        <button class="btn btn-info btn-block"><span class="fa fa-user"></span> Профиль</button>
                    </div>
                    <div class="col-xs-12 col-sm-4 emphasis">
                        <h2><strong>74</strong></h2>
                        <p><small>Работы</small></p>
                        <div class="btn-group dropup btn-block">
                            <button type="button" class="btn btn-primary"><span class="fa fa-gear"></span> Опции</button>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu text-left" role="menu">
                                <li><a href="#"><span class="fa fa-envelope pull-right"></span> Отправить email </a></li>
                                <li><a href="#"><span class="fa fa-list pull-right"></span> Редактировать список</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><span class="fa fa-warning pull-right"></span>Сообщить о спаме</a></li>
                                <li class="divider"></li>
                                <li><a href="#" class="btn disabled" role="button"> Отписатся </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection