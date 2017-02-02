<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.spinner {
            font-size: 17px;
            text-indent: -999em;
            position: relative;
            border-radius: 48%;
            overflow: hidden;
            width: 0em;
            height: 0em;
            margin: 6em auto;
            box-shadow: none;
            animation: spin6 2s infinite linear;
        }
        @keyframes spin6 {
            15% {
                box-shadow: -1.5em -1.5em 0 0.2em green, -1.5em 1.5em 0 0.2em blue, 1.5em 1.5em 0 0.2em red, 1.5em -1.5em 0 0.2em yellow;
                transform: rotate(0.25turn);
            }
            80% {
                width: 10em;
                height: 10em;
                margin: 1em auto;
                transform: rotate(2turn);
            }
        }
	</style>
</head>
<body>
    <div class="loading">
    	<div class="spinner">
    	</div>
    </div>
</body>
</html>