
<head>
        <title>Event database</title>
</head>
<body>
<form method="get" action="">
<label for="Id">Id:</label>
<input id="Id" type="text" name="id" value="" ></input>
        <table border="5">
                <tr>
                        <td>Id</td>
                        <td>Name</td>
                        <td>Slug</td>
                        <td>operation</td>
                </tr>
                @foreach($data as $dataEach)
                <tr>
                        <td><?php echo strval($dataEach['id']); ?></td>
                        <td>{{$dataEach['name']}}</td>
                        <td>{{$dataEach['slug']}}</td>
                        <td>
                                <button name="edit" value="[update,{{$dataEach['id']}}]" > update</button>
                                <button name="edit" value="delete" > delete</button>
                        </td>
                </tr>
                @endforeach

        </table>
        <p>{{$test}}</p>
</form>
</body>

