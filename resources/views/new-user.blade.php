@extends('layouts.app')

@section('content')

    @if(Auth::check())

        <div id="newUser"></div>

        <form enctype="multipart/form-data" method="POST" action="/api/create-new-employeer">

            <div class="container">

                <div class="row">

                    <div class="col-md-3 ">

                        <img class="border border-dark rounded" style="height: 370px;  object-fit: cover; width: 270px;" src="{{'https://pbs.twimg.com/profile_images/824716853989744640/8Fcd0bji_400x400.jpg'}}">

                        <div id="inputFile" class="custom-file" style="margin-top: 15px;">
                            <input name="image" type="file" class="custom-file-input" id="validatedCustomFile" accept="image/*">
                            <label class="custom-file-label" for="validatedCustomFile" id="imageLabel">Choose file...</label>
                        </div>

                    </div>

                    <div class="col-md-9">

                        <div class="card">

                            <div class="card-body">

                                <div class="row">

                                    <div class="col-md-12">

                                        <h4>Создание нового сотрудника</h4>
                                        <hr>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-12">

                                        <div class="form-group row">
                                            <label for="firstName" class="col-4 col-form-label">Имя: </label>
                                            <div class="col-8">
                                                <input placeholder="Введите имя сотрудника .." value="" id="firstName" name="firstName" class="form-control here" required="required" type="text">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="lastName" class="col-4 col-form-label">Фамилия: </label>
                                            <div class="col-8">
                                                <input placeholder="Введите фамилию сотрудника .." value="" id="lastName"  name="lastName" class="form-control here" type="text" required="required">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="surName" class="col-4 col-form-label">Отчество: </label>
                                            <div class="col-8">
                                                <input placeholder="Введите отчество сотрудника .." value="" id="surName" name="surName" class="form-control here" type="text" required="required">
                                            </div>
                                        </div>

                                        <div class="form-group row">

                                            <label for="postValue" class="col-4 col-form-label">Должность: </label>
                                            <div class="col-8">

                                                <select id="postValue" name="postValue" class="custom-select" required="required">

                                                    <option value="1">Director</option>
                                                    <option value="2">Deputy</option>
                                                    <option value="3">Lawyer</option>
                                                    <option value="4">Dispatcher</option>
                                                    <option value="5">Secretary</option>

                                                </select>

                                            </div>

                                        </div>

                                        <div id="chiefDiv" class="form-group row">

                                            <label for="chief" class="col-4 col-form-label">Шеф: </label>

                                            <div id="chiefNone" class="col-8">
                                                <input disabled value="Шеф отсутствует" id="chiefNone" name="chiefNone" class="form-control here" type="text">
                                            </div>

                                            <div id="chiefInfo" class="col-5">
                                                <input disabled value="" id="chief" name="chief" class="form-control here" type="text">
                                            </div>

                                            <div id="labelChiefID" class="col-1 align-self-center">
                                                <label style="margin-bottom: 0px;">ID: </label>
                                            </div>

                                            <div id="chiefInputID" class="col-2">
                                                <input min="1" value="" id="chiefID" name="chiefID" class="form-control here" required="required" type="number">
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <label for="salary" class="col-4 col-form-label">Зарплата: </label>
                                            <div class="col-8">
                                                <input min="1" max="300000" placeholder="Введите значение зарплаты сотрудника ..." value="" id="salary" name="salary" class="form-control here" required="required" type="number">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="adoptionDate" class="col-4 col-form-label">Дата приема на работу: </label>
                                            <div class="col-8">
                                                <input value="" id="adoptionDate" name="adoptionDate" class="form-control here" required="required" type="datetime-local">
                                            </div>
                                        </div>

                                        <div class="form-group row">

                                            <div class="offset-4 col-8">
                                                <button id="create" name="create" type="submit" class="btn btn-primary">Создать сотрудника</button>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </form>

        <script src="{{ asset('js/SinglePageUser.js' )}}"></script>

    @else

        @include('auth.login')

    @endif

@endsection