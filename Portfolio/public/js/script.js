
// Typing Animation 
var typed=new Typed(".typing-3",{
    strings: [ "lio"],
    typeSpeed:200,
    backSpeed:60,
    loop:true

});

var typed=new Typed(".typing",{
    strings: [ "Software-Developer","Web-Developer", "Learner"],
    typeSpeed:100,
    backSpeed:60,
    loop:true

});

var typed=new Typed(".typing-2",{
    strings: [ "Software-Developer","Web-Developer", "Learner"],
    typeSpeed:100,
    backSpeed:60,
    loop:true

});

window.addEventListener("scroll",function(){
    var navHead=document.querySelector(".navbar");
    navHead.classList.toggle("sticky",window.scrollY > 0);

})

