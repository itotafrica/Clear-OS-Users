<div>
    <h3 id="moreInforTitle"></h3>
    <p id="moreInfoContent">
        
    </p>
</div>



<script>
var info = {
    //
    "/bin/sh": "It will allow the user to write real complete scripts, with efficient control structures",
    
    //
    "/bin/bash": "",
    
    //
    "/sbin/nologin": "When /sbin/nologin is set as the shell, if user with that shell logs in, they'll get a polite message saying 'This account is currently not available.' This message can be changed",
    
    //
    "/usr/bin/sh": "",
    
    //
    "/usr/bin/bash": "",
    
    //
    "/usr/sbin/nologin": ""
}
    
document.addEventListener('DOMContentLoaded', ()=> {        // Le document est deja pres
    var select = document.getElementById("user_info.extensions.shell.login_shell");
    
    select.addEventListener("change", ()=> {                // Ecouter
       var moreInfoTitle = document.querySelector("#moreInforTitle");
       var moreInfoContent = document.querySelector("#moreInfoContent");
       
       moreInfoTitle.innerHTML = select.value;
       moreInfoContent.innerHTML = info[select.value];
    });
});

</script>