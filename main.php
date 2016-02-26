<html>
    <head>
        <link rel="stylesheet" type="text/css" href="index.css">
        <title>
            NITk360
        </title>
    </head>
    <body>
        <a href="inductions.php"><div id="induc"><br><br>INDUCTIONS</div></a>
       <a href="Clubs.php"  > <div id="div1" class="circle" >
            //clubs
                SAC
                MAD
                ELAD
                HLAD
                Photography
                Fine Arts
            <img src="Drums.png" id="pic" >
            
           </div></a>
        <div id="data1" class="info">
            MUSIC
        </div>
        <div id="div2" class="circle" >
            //Societies
                Technobyte
                Microbus
                Electroreck
                Infrastructure
                Mechsoc
            <img src="society.png" id="pic" >
            
        </div>
        <div id="div3" class="circle" >
           //social groups
                Rooh
                Shiksha 
            <img src="social.png" id="pic" >
            
        </div>
        <a href="Magazine.php" ><div id="div4" class="circle" >
           //Magzines
                Echo
                JAM
            <img src="books.png" id="pic" >
            
            </div></a>
        
        <div id="data2" class="info"> Societes</div>
        <div id="data3" class="info">Clubs</div>
        <div id="data4" class="info">Sports</div>
        
        <script>
    function hide1()
    {
        if(document.getElementById("data1").style.display==="block")
            document.getElementById("data1").style.display="none";
        else
        {
            document.getElementById("data1").style.display="block";
            document.getElementById("data2").style.display="none";
            document.getElementById("data3").style.display="none";
            document.getElementById("data4").style.display="none";
        }
        
    }
    function hide2()
    {
        if(document.getElementById("data2").style.display==="block")
            document.getElementById("data2").style.display="none";
        else
        {
            document.getElementById("data1").style.display="none";
            document.getElementById("data2").style.display="block";
            document.getElementById("data3").style.display="none";
            document.getElementById("data4").style.display="none";
        }
    }
    function hide3()
    {
         if(document.getElementById("data3").style.display==="block")
            document.getElementById("data3").style.display="none";   
       else
        {    document.getElementById("data1").style.display="none";
            document.getElementById("data2").style.display="none";
            document.getElementById("data3").style.display="block";
            document.getElementById("data4").style.display="none";
        }
    }
    function hide4()
    {
        if(document.getElementById("data4").style.display==="block")
            document.getElementById("data4").style.display="none";    
        else
       {
            document.getElementById("data1").style.display="none";
            document.getElementById("data2").style.display="none";
            document.getElementById("data3").style.display="none";
            document.getElementById("data4").style.display="block";
       }
    }
</script>
    </body>
</html>
