document.addEventListener("DOMContentLoaded", ()=>{
        addAnimationToNavBar();   
        
});

const addAnimationToNavBar = ()=>{

    
    const navMenuHamburger = document.querySelector("#nav-menu-hamburger");
    const navMenuCross = document.querySelector("#nav-menu-cross");
    const hamburgerContainer = document.querySelector("#hamburger-container");
    const mainNavOverlay = document.querySelector("#main-nav-overlay");

    const nav_menu_tl = gsap.timeline();


    // UnComment this to animate the hamburger icon
    // nav_menu_tl.to(navMenuCross, {
    //     // opacity: 0,
    //     duration: 0.1,
    //     rotation: -180
    // });
    // nav_menu_tl.to(navMenuHamburger, {
    //     // opacity: 0,
    //     duration: 0.1,
    //     rotation: 180
    // });


    // Animate the main nav coming into view from the right
    nav_menu_tl.from(".gsap-main-nav", {
        x: '100%',        // Move to its original position (from right to left)
        opacity: 1,     // Fade it in
        ease: "power2.out",
        stagger: 0.5,   // Delay between elements (if multiple)
        // immediateRender: false // Ensure GSAP doesn't render prematurely
    });
    
    // Animate individual nav items with stagger
    nav_menu_tl.from("#nav-main-menu-tab li", {
        x: '100%',        // Move each item from 100% off-screen right to its place
        opacity: 1,     // Fade each item in
        stagger: 0.1,  // Stagger for smooth sequence
        ease: "power2.out",
        // immediateRender: false // Prevent premature rendering
    }, "-=0.5"); 


    nav_menu_tl.pause();

    [hamburgerContainer, mainNavOverlay].forEach(element=>{

        element.addEventListener("click", ()=>{
            const animatedElement = document.querySelector("#main-nav-container");
            const mainNavOverlay = document.querySelector("#main-nav-overlay");
            if (animatedElement.classList.contains('hidden')) {
                
                nav_menu_tl.play();
                
                  
                animatedElement.classList.remove('hidden');
                mainNavOverlay.classList.remove('hidden');
                navMenuHamburger.classList.toggle("hidden");
                // navMenuCross.classList.toggle("hidden");
            } else {

                nav_menu_tl.reverse()
                  
                nav_menu_tl.eventCallback("onReverseComplete", function() {
                    animatedElement.classList.add('hidden');
                    mainNavOverlay.classList.add('hidden');
                    navMenuHamburger.classList.toggle("hidden");
                    // navMenuCross.classList.toggle("hidden");
                });
                
                
            }
            
        });

    });
}


