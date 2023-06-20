<head>
        <title>Event database</title>
</head>
<body>
        <table border="5">
                <tr>
                        <td>Id</td>
                        <td>Name</td>
                        <td>Slug</td>
                        <td>operation</td>
                </tr>
                
                <tr>
                        <td>{{$dataEach['id']}}</td>
                        <td>{{$dataEach['name']}}</td>
                        <td>{{$dataEach['slug']}}</td>
                        <td>
                                <button name="edit" value="update" > update</button>
                                <button name="edit" value="delete" > delete</button>
                        </td>
                </tr>
                

        </table>
</body>

