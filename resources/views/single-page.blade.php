@extends('layouts.app')

@section('content')

@if(Auth::check())

    <form id="updateForm" method="POST" action="{{route('getCurrentEmployeer')}}" enctype="multipart/form-data">@csrf</form>
    <form id="deleteForm" method="POST" action="/api/delete-employeer/{{$employeer->id}}">@csrf</form>

    <div>

        <div class="container">

            <div class="row">

                <div class="col-md-3 ">

                    <img class="border border-dark rounded" style="height: 370px;  object-fit: cover; width: 270px;" src="{{$employeer->imageProfile ? '/img/emp/'.$employeer->imageProfile : 'https://pbs.twimg.com/profile_images/824716853989744640/8Fcd0bji_400x400.jpg'}}">

                    <div hidden id="inputFile" class="custom-file" style="margin-top: 15px;">
                        <input name="image" type="file" class="custom-file-input" id="validatedCustomFile" accept="image/*">
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

                                    <div class="form-group row">
                                        <label for="idEmployee" class="col-4 col-form-label">ID: </label>
                                        <div class="col-8 align-self-center">
                                            <label style="margin-bottom: 0px;">{{$employeer->id}}</label>
                                            <input form="updateForm" value="{{$employeer->id}}" type="hidden" id="idEmployee" name="idEmployee">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="firstName" class="col-4 col-form-label">Имя: </label>
                                        <div class="col-8">
                                            <input form="updateForm" disabled value="{{$employeer->firstName}}" id="firstName" name="firstName" class="form-control here" required="required" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="lastName" class="col-4 col-form-label">Фамилия: </label>
                                        <div class="col-8">
                                            <input form="updateForm" disabled value="{{$employeer->lastName}}" id="lastName"  name="lastName" class="form-control here" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="surName" class="col-4 col-form-label">Отчество: </label>
                                        <div class="col-8">
                                            <input form="updateForm" disabled value="{{$employeer->surName}}" id="surName" name="surName" class="form-control here" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <label for="postValue" class="col-4 col-form-label">Должность: </label>
                                        <div class="col-8">

                                            <select form="updateForm" disabled id="postValue" name="postValue" class="custom-select">

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

                                    <div id="chiefDiv" class="form-group row">

                                        <label for="chief" class="col-4 col-form-label">Шеф: </label>

                                            <div id="chiefNone" class="col-8">
                                                <input form="updateForm" disabled value="Отсутствует" class="form-control here" required="required" type="text">
                                            </div>

                                            <div id="chiefInfo" class="col-5">
                                                <input form="updateForm" disabled value="{{$director ? $director->firstName . ' ' . $director->lastName . ' ' . $director->surName : ''}}" id="chief" name="chief"  class="form-control here" required="required" type="text">
                                            </div>

                                            <div id="labelChiefID" class="col-1 align-self-center">
                                                <label style="margin-bottom: 0px;">ID: </label>
                                            </div>

                                            <div id="chiefInputID" class="col-2">
                                                <input form="updateForm" disabled min="1" value="{{$director ? $director->id : ''}}" id="chiefID" name="chiefID" class="form-control here" required="required" type="number">
                                            </div>

                                    </div>

                                    <div class="form-group row">
                                        <label for="salary" class="col-4 col-form-label">Зарплата: </label>
                                        <div class="col-8">
                                            <input form="updateForm" disabled min="1" max="300000" value="{{$employeer->salary}}" id="salary" name="salary"  class="form-control here" required="required" type="number">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="adoptionDate" class="col-4 col-form-label">Дата приема на работу: </label>
                                        <div class="col-8">
                                            <input form="updateForm" disabled value="{{str_replace(' ', 'T', $employeer->adoptionDate)}}" id="adoptionDate" name="adoptionDate" class="form-control here" required="required" type="datetime-local">
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <div id="confirmButtonsAndMessage" class="offset-4 col-10">
                                            <button form="updateForm" disabled id="submit" name="submit" type="submit" class="btn btn-primary">Обновить данные</button>
                                            <div id="editEmployee" name="editEmployee" class="btn btn-dark">Редактировать сотрудника</div>
                                            <button form="deleteForm" id="deleteEmployee" name="deleteEmployee" class="btn btn-danger">Удалить сотрудника</button>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <script src="{{ asset('js/SinglePageUser.js' )}}"></script>

@else

    @include('auth.login')

@endif

@endsection