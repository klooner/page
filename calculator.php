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
    
    <section>
        <div id="Content">
            
            <div id="numvisual"></div>

            <script type="text/javascript">            
                var str1 = "";
                var op = "";
                var str2 = "";

            

                function getexpr()
                {
                    return str1 + op + str2;
                }

                function getres()
                {
                    if(op == "+")
                        return parseInt(str1) + parseInt(str2);
                    if(op == "-")
                        return parseInt(str1) - parseInt(str2);
                    if(op == "*")
                        return parseInt(str1) * parseInt(str2);
                    if(op == "/")
                        return parseInt(str1) / parseInt(str2);
                    return getexpr();
                }

                function num(num) {
                    if(op!="")
                        str2 += num;
                    else
                        str1 += num;
                    $('#numvisual').html(getexpr());
                }

                function add()
                {
                    if(str1=="") return;
                    op="+";
                    $('#numvisual').html(getexpr());
                }

                function sub()
                {
                    if(str1=="") return;
                    op="-";
                    $('#numvisual').html(getexpr());
                }

                function mul()
                {
                    if(str1=="") return;
                    op="*";
                    $('#numvisual').html(getexpr());
                }

                function div()
                {
                    if(str1=="") return;
                    op="/";
                    $('#numvisual').html(getexpr());
                }

                function clearnum() 
                {
                    $('#numvisual').html(getres());
                    str1 = "";
                    str2 = "";
                    op = "";                    
                }

                function equal() 
                {
                    $('#numvisual').html(getres());
                    str1 = "";
                    str2 = "";
                    op = "";                    
                }
            </script>             

            <div class="grid-container">
                <button type="button" onclick="num(1)">1</button>
                <button type="button" onclick="num(2)">2</button>
                <button type="button" onclick="num(3)">3</button>
                <button type="button" onclick="num(4)">4</button>
                <button type="button" onclick="num(5)">5</button>
                <button type="button" onclick="num(6)">6</button>
                <button type="button" onclick="num(7)">7</button>
                <button type="button" onclick="num(8)">8</button>
                <button type="button" onclick="num(9)">9</button>
                <button type="button" onclick="num(0)">0</button>

                <button type="button" onclick="add()">+</button>
                <button type="button" onclick="sub()">-</button>
                <button type="button" onclick="mul()">*</button>
                <button type="button" onclick="div()">/</button>
                <button type="button" onclick="clear()">ce</button>
                <button type="button" onclick="equal()">=</button>
            </div>
        </div>
        <?php include "navigation.php" ?>
    </section>
    <?php include "footer.html" ?>
</body>
</html>