<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        CLOCKS
    </title>
    <link rel="stylesheet" href="styles.css"/>
</head>
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <div id="runningTime"></div>

    <script type="text/javascript">
    $(document).ready(function() {
        setInterval(runningTime, 1000);
    });
    function runningTime() {
        $.ajax({
            url: 'clockScript.php',
            success: function(data) {
                $('#runningTime').html(data);
                },
        });
    }
    </script>    

    <header>
        <h1> Welcome </h1>
    </header>

</body>
</html>