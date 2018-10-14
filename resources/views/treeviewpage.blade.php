<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Employee Application</title>

    <!-- TreeView JQuery -->
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/shieldui-core.min.js"></script>
    <script src="/js/shieldui-treeview.min.js"></script>

    <!-- TreeView -->
    <link href="/css/treeview.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

</head>
<body>

@extends('layouts.app')

@section('content')

<div id="treeview"></div>

<!-- Api TreeView-->
<script src="/js/TreeView.js"></script>

@endsection

</body>

</html>

