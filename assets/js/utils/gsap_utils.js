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

    nav_menu_tl.from(".gsap-main-nav", 
        { x: '100%', opacity: 0, stagger: 0.2 }, 
    )

    nav_menu_tl.from(".__mh-wc-theme-main-nav-item", {
        x: "100%",
        stagger: 0.05
    });


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


