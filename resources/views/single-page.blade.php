@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3 ">
                <img class="border border-dark rounded" style="height: 370px;  object-fit: cover; width: 270px;" src="https://лада.онлайн/uploads/posts/2015-01/1421148530_pf240_1.jpg">
            </div>
            <div class="col-md-9">

                <div class="card">

                    <div class="card-body">

                        <div class="row">

                            <div class="col-md-12">

                                <h4>Профиль сотрудника: {{$employeer->firstName . ' ' . $employeer->lastName . ' ' . $employeer->surName}}</h4>
                                <hr>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-12">

                                <form method="POST" action="/api/get-current-employeer">

                                    <div class="form-group row">
                                        <label for="id" class="col-4 col-form-label">ID: </label>
                                        <div class="col-8">
                                            <input value="{{$employeer->id}}" id="id" name="id" class="form-control here" required="required" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="firstName" class="col-4 col-form-label">Имя: </label>
                                        <div class="col-8">
                                            <input value="{{$employeer->firstName}}" id="firstName" name="firstName" class="form-control here" required="required" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="lastName" class="col-4 col-form-label">Фамилия: </label>
                                        <div class="col-8">
                                            <input value="{{$employeer->lastName}}" id="lastName"  name="lastName" class="form-control here" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="surName" class="col-4 col-form-label">Отчество: </label>
                                        <div class="col-8">
                                            <input value="{{$employeer->surName}}" id="surName" name="surName" class="form-control here" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="postValue" class="col-4 col-form-label">Должность: </label>
                                        <div class="col-8">

                                            <select id="postValue" name="postValue" class="custom-select">
                                                <option selected value="{{$position->positionID}}">{{$position->postValue}}</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="chief" class="col-4 col-form-label">Шеф: </label>
                                        <div class="col-8">

                                            @if ($employeer->chiefID === null)
                                                <input value="Отсутствует" id="chief" name="chief"  class="form-control here" required="required" type="text">
                                            @else
                                                <input value="{{$employeer->chiefID}}" id="chief" name="chief"  class="form-control here" required="required" type="text">
                                            @endif

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="salary" class="col-4 col-form-label">Зарплата: </label>
                                        <div class="col-8">
                                            <input value="{{$employeer->salary}}" id="salary" name="salary"  class="form-control here" required="required" type="text">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="adoptionDate" class="col-4 col-form-label">Дата приема на работу: </label>
                                        <div class="col-8">
                                            {{--<input id="adoptionDate" name="adoptionDate" class="form-control here" required="required" type="text">--}}
                                            <span id="adoptionDate" name="adoptionDate">{{$employeer->adoptionDate}}</span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                            <button name="submit" type="submit" class="btn btn-primary">Обновить данные</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection