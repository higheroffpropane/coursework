<!DOCTYPE html>
<html>
	
	<!-- HEAD -->

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
		<title><?php getTitle(); ?></title>

		<!-- EXTERNAL CSS LINKS -->

		<link rel="stylesheet" type="text/css" href="Design/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="Design/fonts/css/all.min.css">
		<link rel="stylesheet" type="text/css" href="Design/css/main.css">
		<link rel="stylesheet" type="text/css" href="Design/css/responsive.css">

		<!-- GOOGLE FONTS -->

		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">

        <script src="https://api-maps.yandex.ru/3.0/?apikey=66ea1c98-ef99-415d-b312-39b41f7e41f4&lang=ru_RU"></script>
        <script>
            ymaps3.ready.then(() => {
                const map1 = new ymaps3.YMap(document.getElementById('YMapsID'), {
                    location: {
                        center: [37.64, 55.76],
                        zoom: 10
                    }
                });
            });
        </script>

	</head>

	<!-- BODY -->

	<body>
	