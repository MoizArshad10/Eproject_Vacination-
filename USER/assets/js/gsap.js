var tl = gsap.timeline();

var elems = document.querySelectorAll(".elem");
elems.forEach(function(elem){
    var h1s =elem.querySelectorAll("h1");
    var index = 0;
    var animating = false;
    document.querySelector(".hero-first").addEventListener("click",function(){
if(!animating){
    animating = true;
    gsap.to(h1s[index],{
        top:"-=100%",
        ease: Expo.easeInOut,
        duration:1,
        onComplete : function(){
            gsap.set(this._targets[0],{top :"100%"})
            animating =false;
        },
    }); 
    index === h1s.length - 1 ? (index= 0) : index++;
    gsap.to(h1s[index],{
        top:"-=100%",
        ease: Expo.easeInOut,
        duration:1,
    });
}
    })
});
var imgs = document.querySelectorAll(".img-container");
imgs.forEach(function(ims){
    var images =ims.querySelectorAll("img");
    var index = 0;
    var animating = false;
    document.querySelector(".hero-first").addEventListener("click",function(){
if(!animating){
    animating = true;
    gsap.to(images[index],{
        top:"-=100%",
        ease: Expo.easeInOut,
        duration:1,
        onComplete : function(){
            gsap.set(this._targets[0],{top :"100%"})
            animating =false;
        },
    }); 
    index === images.length - 1 ? (index= 0) : index++;
    gsap.to(images[index],{
        top:"-=100%",
        ease: Expo.easeInOut,
        duration:1,
    });
}
    })
});
gsap.from(".st-main-header-in ", {
  opacity: 0,
  y: -30,
  duration: 1.5,
});
gsap.from(".slick-container ", {
  opacity: 0,
  x: 30,
  duration: 1.5,
});
gsap.from(".st-hero-text ", {
  opacity: 0,
  x: -30,
  duration: 1.5,
});
gsap.from(".st-social-btn i", {
  rotateY: 180,
  opacity: 0,
  stagger: 0.5,
  scrollTrigger: {
    trigger: ".st-social-btn i",
    scroller: "body",
    start: "top 60%",
    end: "top 40%",
    duration: 1,
  },
});
gsap.from(".container #card", {
  x: -30,
  scale: 0.5,
  opacity: 0,
  scrollTrigger: {
    trigger: ".container #card",
    scroller: "body",
    start: "top 100%",
    end: "top 40%",
    stagger: 1,
    scrub: true,
  },
});
gsap.from("#vaccine", {
  x: -200,
  scrollTrigger: {
    trigger: "#vaccine",
    scroller: "body",
    start: "top 100%",
    end: "top 0%",
    scrub: true,
  },
});
gsap.from("#hospitals", {
  x: 200,
  scrollTrigger: {
    trigger: "#hospitals",
    scroller: "body",
    start: "top 100%",
    end: "top 0%",
    scrub: true,
  },
});
gsap.to("#animated-text h1", {
  transform: "translateX(-80%)",
  fontWeight: "bolder",
  color: "#0CB8B6",
  scrollTrigger: {
    trigger: "#animated-text",
    scroller: "body",
    // markers:true,
    start: "top 0",
    end: "top -100%",
    scrub: 3,
    pin: true,
  },
});

gsap.from(".animit .col-lg-6", {
  x: -30,
  opacity: 0,
  stagger:.4,
  scrollTrigger: {
    trigger: ".animit",
    scroller: "body",
    start: "top 100%",
    end: "top 30%",
   
    },
});
gsap.from(".animit2", {
  x: 30,
  opacity: 0,
  scrollTrigger: {
    trigger: ".animit2",
    scroller: "body",
    start: "top 100%",
    end: "top 30%",
    },
});
gsap.from(".st-portfolio-wrapper img", {
  y:40,
  opacity: 0,
  stagger: .2,
  scrollTrigger: {
    trigger: ".st-portfolio-wrapper",
    scroller: "body",
    start: "top 100%",
    end: "top 0%",
    scrub:true,
  },
});
gsap.from(".st-faq-img", {
  rotate: 180,
  opacity: 0,
  stagger: 0.5,
  scrollTrigger: {
    trigger: ".st-faq-img",
    scroller: "body",
    start: "top 60%",
    end: "top 40%",
    duration: 1,
    scrub:2,
  },
});
gsap.from(".faqss .st-accordian-title , st-accordian-body", {
  x: 30,
  opacity: 0,
  scrollTrigger: {
    trigger: ".faqss",
    scroller: "body",
    start: "top 100%",
    end: "top 40%",
    stagger: 1,
    scrub: true,
  },
});
