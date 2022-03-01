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
    <?php include "title.php" ?>
    
    <script type="text/javascript">
        
       
        $(document).ready(function() {
            setInterval(clockTime, 1000);
        });
        
        function clockTime() {
            $.ajax({
                url: 'clockScript.php',
                success: function(data) {
                    var hour = data.substr(0,2);
                    var min = data.substr(3,2);
                    var sec = data.substr(6,2);
                    var hourLine = document.getElementById('hourLine');
                    var minLine = document.getElementById('minLine');
                    var secLine = document.getElementById('secLine');
                    hourLine.setAttribute("transform","rotate(" + hour*360/24 +")");
                    minLine.setAttribute("transform","rotate("+ min*360/60 +")");
                    secLine.setAttribute("transform","rotate("+ sec*360/60 +")");
                    },
            });
        }
    </script>

    <section>
        <div id="Content">
            <div id="Clocks">
                <span class="dot"></span>
                <svg id="hourLine" height="200" width="200">
                    <line x1="100" y1="100" x2="100" y2="0" style="stroke:rgb(0,0,0);stroke-width:3" />
                </svg>
                <svg id="minLine" height="200" width="200">
                    <line x1="100" y1="100" x2="100" y2="50" style="stroke:rgb(0,0,0);stroke-width:2" />
                </svg>
                <svg id="secLine" height="200" width="200">
                    <line x1="100" y1="100" x2="100" y2="20" style="stroke:rgb(0,0,0);stroke-width:1" />
                </svg>
            </div>
        </div>
        <?php include "navigation.php" ?>
    <section>
    <?php include "footer.html" ?>
</body>
</html>