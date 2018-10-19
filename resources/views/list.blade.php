@extends('layouts.app')

@section('content')

<!-- Если пользователь авторизирован -->
@if(Auth::check())

    <div style="margin-left: 20px" id="formsSearching">

        <div style="display: inline-block" class="form-group">

            <label>Выберите поле для поиска:</label>

            <select class="form-control" id="formSelectSearch">

                <option value="id">ID</option>
                <option value="firstName">Имя</option>
                <option value="lastName">Фамилия</option>
                <option value="surName">Отчество</option>
                <option value="postValue">Должность</option>
                <option value="adoptionDate">Дата приема на работу</option>
                <option value="salary">Заработная плата</option>

            </select>

        </div>

        <p style="display: inline-block">-></p>

        <div style="display: inline-block" class="form-group">

            <label>Значение поля</label>
            <input class="form-control" id="dataInput" placeholder="Введите текст">

        </div>

    </div>

    <div style="margin-left: 20px" id="formsSorts">

        <div style="display: inline-block" class="form-group">

            <label>Тип сортировки:</label>

            <select class="form-control" id="formSelectSortType">

                <option value="asc">По возрастанию</option>
                <option value="desc">По убыванию</option>

            </select>

        </div>

        <p style="display: inline-block">-></p>

        <div style="display: inline-block" class="form-group">

            <label>Сортировать по: </label>

            <select class="form-control" id="formSelectSortName">

                <option value="id">ID</option>
                <option value="firstName">Имени</option>
                <option value="lastName">Фамилии</option>
                <option value="surName">Отчеству</option>
                <option value="postValue">Должности</option>
                <option value="adoptionDate">Даты приема на работу</option>
                <option value="salary">Заработной плате</option>

            </select>

        </div>

    </div>

    <table class="table table-inverse">

        <thead>

            <tr>
                <th>#</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Отчество</th>
                <th>Должность</th>
                <th>Дата приема на работу</th>
                <th>Заработная плата</th>
            </tr>

        </thead>

        <tbody id="table">

        </tbody>

    </table>

    <script src="{{ asset('js/EmployeesList.js' )}}"></script>

<!-- Иначе пользователя перекидывает на страницу авторизации -->
@else

    @include('auth.login')

@endif

@endsection