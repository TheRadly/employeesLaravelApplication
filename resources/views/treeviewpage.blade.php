<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <script src="js/jquery.min.js"></script>
    <script src="js/tree.jquery.js"></script>
    <link rel="stylesheet" href="css/jqtree.css">

</head>
<body>

    <div id="tree1">

    </div>

    <script>

        var data = [
            {
                name: 'node1', id: 1,
                children: [
                    { name: 'child1', id: 2 },
                    { name: 'child2', id: 3 }
                ]
            },
            {
                name: 'node2', id: 4,
                children: [
                    { name: 'child3', id: 5 }
                ]
            }
        ];

        $('#tree1').tree({
            data: data
        });

    </script>

</body>
</html>