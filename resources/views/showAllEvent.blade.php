
<head>
        <title>Event database</title>
</head>
<body>
<form method="get" action="">
<label for="Id">Id:</label>
<input id="Id" type="text" name="id" ></input>
<button name="Choice" value="search" > Search</button>

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
                                <button name="edit" value="update" > update</button>
                                <button name="edit" value="delete" > delete</button>
                                <input id="Id" type="hidden" name="idChosen" value="{{$dataEach['id']}}"></input>
                        </td>
                </tr>
                @endforeach

        </table>
        <p>{{$test}}</p>
        <p>{{$idChosen}}</p>
</form>
</body>

