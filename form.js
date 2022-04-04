var form1=document.getElementById("form1");
        var form2=document.getElementById("form2");
        var form3=document.getElementById("form3");
        var form4=document.getElementById("form4");

        var next=document.getElementById("next");
        var next2=document.getElementById("next2");
        var next3=document.getElementById("next3");

        var back1=document.getElementById("back1");
        var back2=document.getElementById("back2");
        var back3=document.getElementById("back3");
        
        next.onclick=function()
        {
            form1.style.left="-450px";
            form2.style.left="45px";
        }
        back1.onclick=function()
        {
            form1.style.left="40px";
            form2.style.left="450px";
        }
        next2.onclick=function()
        {
            form2.style.left="-450px";
            form3.style.left="40px";
        }
        next3.onclick=function()
        {
            form3.style.left="-450px";
            form4.style.left="40px";
        }
        back2.onclick=function()
        {
            form2.style.left="40px";
            form3.style.left="450px";
            
        }
        back3.onclick=function()
        {
            form3.style.left="40px";
            form4.style.left="450px";
        }