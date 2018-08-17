<div>
    <h3 id="moreInforTitle"></h3>
    <p id="moreInfoContent">
        
    </p>
</div>



<script>
var info = {
    "/bin/sh": "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, officia, harum magni tempore deserunt sed omnis non officiis porro ex vitae sit vero expedita quo cumque architecto nisi! Ipsam, excepturi.",
    
    //
    "/bin/bash": "Comment ipsum dolor sit amet, consectetur adipisicing elit. Quam, officia, harum magni tempore deserunt sed omnis non officiis porro ex vitae sit vero expedita quo cumque architecto nisi! Ipsam, excepturi.",
    
    //
    "/sbin/nologin": "Salut ipsum dolor sit amet, consectetur adipisicing elit. Quam, officia, harum magni tempore deserunt sed omnis non officiis porro ex vitae sit vero expedita quo cumque architecto nisi! Ipsam, excepturi.",
    
    //
    "/usr/bin/sh": "Autorisation ipsum dolor sit amet, consectetur adipisicing elit. Quam, officia, harum magni tempore deserunt sed omnis non officiis porro ex vitae sit vero expedita quo cumque architecto nisi! Ipsam, excepturi.",
    
    //
    "/usr/bin/bash": "Permission ipsum dolor sit amet, consectetur adipisicing elit. Quam, officia, harum magni tempore deserunt sed omnis non officiis porro ex vitae sit vero expedita quo cumque architecto nisi! Ipsam, excepturi.",
    
    //
    "/usr/sbin/nologin": "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, officia, harum magni tempore deserunt sed omnis non officiis porro ex vitae sit vero expedita quo cumque architecto nisi! Ipsam, excepturi."
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