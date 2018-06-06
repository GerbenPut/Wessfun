{{

$dbh = mysqli_connect('localhost', 'root', '', 'wessfun');
$query = "SELECT url FROM images";
$result = mysqli_query($dbh, $query)

//echo $query;
//echo $result;

}}

<img src="{{$result}}" style="height: 50%; width: auto">




