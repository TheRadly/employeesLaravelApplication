@extends('layouts.app')

@section('content')

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