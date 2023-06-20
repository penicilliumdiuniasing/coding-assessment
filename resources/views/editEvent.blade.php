<head>
        <title>Event database</title>
</head>
<body>
    <p>Updat event</p>
<form method="get" action="">
<br/>
<label for="Id">Id:</label>
<input id="Id" type="text" name="id" value="{{$dataEach['id']}}"></input>

<br/>
<label for="Name">Name:</label>
<input id='Name' type="text" name="name" value="{{$dataEach['name']}}"></input>

<br/>
<label for="Slug">Slug:</label>
<input id='Slug' type="text" name="slug" value="{{$dataEach['slug']}}"></input>

<br/>
<label for="StartAt">StartAt:</label>
<input id='StartAt' type="text" name="startAt" value="{{$dataEach['startAt']}}"></input>

<br/>
<label for="EndAt">EndAt:</label>
<input id='EndAt' type="text" name="endAt" value="{{$dataEach['endAt']}}"></input>

<button type="submit" name="edit" value="update"> Submit</button>
</form>


<form method="get" action="">
<button> back</button>
</form>

</body>