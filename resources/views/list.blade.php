@extends('layouts.app')

@section('content')

    <div style="margin-left: 20px" id="formsSearching">

        <div style="display: inline-block" class="form-group">

            <label for="exampleFormControlSelect1">Выберите поле для поиска:</label>

            <select class="form-control" id="formSelectSearch">

                <option value="firstName">Имя</option>
                <option value="lastName">Фамилия</option>
                <option value="surName">Отчество</option>
                <option value="postValue">Должность</option>
                <option value="adoptionDate">Дата приема на работу</option>
                <option value="salary">Заработная плата</option>

            </select>

        </div>

        <div style="display: inline-block" class="form-group">

            <label for="exampleFormControlInput1">Значение поля</label>
            <input class="form-control" id="dataInput" placeholder="Введите текст">

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

@endsection