<head>
        <title>Event database</title>
</head>
<body>
    <p>Update event</p>
<form method="get" action="">

<br/>
<label for="Name">Name:</label>
<input id='Name' type="text" name="name" value="{{$dataEach[0]['name']}}"></input>

<br/>
<label for="Slug">Slug:</label>
<input id='Slug' type="text" name="slug" value="{{$dataEach[0]['slug']}}"></input>

<br/>
<label for="StartAt">StartAt:</label>
<input id='StartAt' type="text" name="startAt" value="{{$dataEach[0]['startAt']}}"></input>

<br/>
<label for="EndAt">EndAt:</label>
<input id='EndAt' type="text" name="endAt" value="{{$dataEach[0]['endAt']}}"></input>

<button type="submit" name="choice" value="update"> Submit</button>
</form>


<form method="get" action="">
<button> back</button>
</form>

</body>