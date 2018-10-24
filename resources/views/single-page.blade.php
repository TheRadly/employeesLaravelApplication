@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3 ">

                <img class="border border-dark rounded" style="height: 370px;  object-fit: cover; width: 270px;" src="https://лада.онлайн/uploads/posts/2015-01/1421148530_pf240_1.jpg">
                <div hidden id="inputFile" class="custom-file" style="margin-top: 15px;">
                    <input type="file" class="custom-file-input" id="validatedCustomFile" accept="image/*" required>
                    <label class="custom-file-label" for="validatedCustomFile" id="imageLabel">Choose file...</label>
                </div>

            </div>
            <div class="col-md-9">

                <div class="card">

                    <div class="card-body">

                        <div class="row">

                            <div class="col-md-12">

                                <h4>Профиль сотрудника: {{$employeer->lastName . ' ' . $employeer->firstName . ' ' . $employeer->surName}}</h4>
                                <hr>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-12">

                                <form method="POST" action="/api/get-current-employeer">

                                    <div class="form-group row">
                                        <label for="id" class="col-4 col-form-label">ID: </label>
                                        <div class="col-8">
                                            <input disabled value="{{$employeer->id}}" id="id" name="id" class="form-control here" required="required" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="firstName" class="col-4 col-form-label">Имя: </label>
                                        <div class="col-8">
                                            <input disabled value="{{$employeer->firstName}}" id="firstName" name="firstName" class="form-control here" required="required" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="lastName" class="col-4 col-form-label">Фамилия: </label>
                                        <div class="col-8">
                                            <input disabled value="{{$employeer->lastName}}" id="lastName"  name="lastName" class="form-control here" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="surName" class="col-4 col-form-label">Отчество: </label>
                                        <div class="col-8">
                                            <input disabled value="{{$employeer->surName}}" id="surName" name="surName" class="form-control here" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <label for="postValue" class="col-4 col-form-label">Должность: </label>
                                        <div class="col-8">

                                            <select disabled id="postValue" name="postValue" class="custom-select">

                                                @foreach ($positions as $position)

                                                    @if($position->positionID === $employeer->positionID)
                                                        <option selected value="{{$position->positionID}}">{{$position->postValue}}</option>
                                                    @else
                                                        <option value="{{$position->positionID}}">{{$position->postValue}}</option>
                                                    @endif

                                                @endforeach

                                            </select>

                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <label for="chief" class="col-4 col-form-label">Шеф: </label>

                                            @if ($employeer->chiefID === null)

                                                <div class="col-8">
                                                    <input disabled value="Отсутствует" id="chief" name="chief"  class="form-control here" required="required" type="text">
                                                </div>

                                            @else

                                                <div class="col-5">
                                                    <input disabled value="{{$director->firstName . ' ' . $director->lastName . ' ' . $director->surName}}" id="chief" name="chief"  class="form-control here" required="required" type="text">
                                                </div>

                                                <div class="col-1 align-self-center">
                                                    <label style="margin-bottom: 0px;">ID: </label>
                                                </div>

                                                <div class="col-2">
                                                    <input disabled min="1" value="{{$director->id}}" id="chiefID" name="chiefID" class="form-control here" required="required" type="number">
                                                </div>

                                            @endif

                                    </div>

                                    <div class="form-group row">
                                        <label for="salary" class="col-4 col-form-label">Зарплата: </label>
                                        <div class="col-8">
                                            <input disabled value="{{$employeer->salary}}" id="salary" name="salary"  class="form-control here" required="required" type="text">
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
                                            <button disabled id="submit" name="submit" type="submit" class="btn btn-primary">Обновить данные</button>
                                            <div id="editEmployee" name="editEmployee" class="btn btn-dark">Редактировать сотрудника</div>
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

    <script src="{{ asset('js/SinglePageUser.js' )}}"></script>
@endsection