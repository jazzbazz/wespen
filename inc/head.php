<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php if(basename($_SERVER['PHP_SELF'],'.php') == 'index'){ echo "Dashboard"; }else{ echo basename($_SERVER['PHP_SELF'],'.php'); } ?></title>
    <link href="https://fonts.googleapis.com/css?family=Lexend+Zetta&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        header {
            display: flex;
            justify-content: center;
            align-items:center;
            width: 100vw;
            background:black;
            min-height: 120px;
        }
        h2 {
			font-family: 'Lexend Zetta', sans-serif;
			color : white;
            text-transform: uppercase;
            font-size: 2.6rem;
            
            
		}
	</style>
</head>

<body>