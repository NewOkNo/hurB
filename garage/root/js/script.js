$(".menu-burger").on('click', function(){
    //show burger
    var tl = gsap.timeline();

    tl
    .set($(".blurred"), { opacity: 0 })
    .set($(".blurred"), { display: "block" })
    .set($(".burger"), { opacity: 0 })
    .set($(".burger"), { display: "flex" })
    .to($(".blurred"), { duration: .3, opacity: 1 })
    .to($(".burger"), { duration: .1, opacity: 1 })
    .from($(".burger"), { duration: .5, translateX: 1000, transformOrigin: "right" })
    ;
});

$(".blurred").on("click", function(){
    var tl = gsap.timeline();

    tl
    .to($(".burger"), { duration: 1, translateX: 500, transformOrigin: "right", opacity: 0 })
    //.to($(".burger"), { duration: .1, opacity: 0 })
    .to($(".blurred"), {duration: .3, opacity: 0, delay: -1})
    .set($(".blurred"), { display: "none" })
    .set($(".burger"), { display: "none" })
    .set($(".burger"), { translateX: 0 });
    
});

$(".ok-btn").on("click", function(){
    var tl = gsap.timeline();

    tl
    .to($(".alert-message"), { duration: .3, scale: 1, opacity: 1 })
    .to($(".alert-message"), { duration: .5, scale: 0, opacity: 0, delay: 1 });
});

$(".btn").on("click", function(){
    var tl = gsap.timeline();

    tl
    .to($(this), { duration: .1, scale: .85 })
    .to($(this), { duration: .3, scale: 1 })
});

function moveToSignIn() {
    console.log("here");
    location.replace("../pages/signIn.html")
}
function moveToSignUp() {
    location.replace("../pages/signUp.html")
}
function goToStart() {
    location.replace("/hurB/root/pages/strt.html")
}
function goToWiper(){
    location.replace("../pages/wiper.html")
}
function goToInfo(){
    location.replace("../pages/info.html")
}
function goBack() {
    window.history.back();
}
function goToCamera(){
    location.replace("../pages/camera.html")
}

/*$(".arrow").on("click", function(){
   //back to the previous page 
});*/