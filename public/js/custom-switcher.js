"use strict";

let mainContent;
(function () {
    let html = document.querySelector('html');
    mainContent = document.querySelector('.main-content');
    if (document.querySelector("#switcher-canvas")) {
        localStorageBackup2();
        switcherClick();
        checkOptions();
        setTimeout(() => {
            checkOptions();
        }, 1000);
    }
})();

function switcherClick() {
    let ltrBtn, rtlBtn, verticalBtn, horiBtn, boxedBtn, fullwidthBtn, scrollHeaderBtn, scrollMenuBtn, fixedHeaderBtn, fixedMenuBtn, defaultBtn, closedBtn, iconTextBtn, detachedBtn, overlayBtn, doubleBtn, menuClickBtn, menuHoverBtn, iconClickBtn, iconHoverBtn, primaryDefaultColor1Btn, primaryDefaultColor2Btn, primaryDefaultColor3Btn, primaryDefaultColor4Btn, primaryDefaultColor5Btn,bgImage1Btn, bgImage2Btn, bgImage3Btn, bgImage4Btn, bgImage5Btn ,bgPattern1Btn, bgPattern2Btn, bgPattern3Btn, bgPattern4Btn, bgPattern5Btn, bgPattern6Btn, bgPattern7Btn, bgPattern8Btn, bgPattern9Btn, bgPattern10Btn, cardStyle1, cardStyle2, cardStyle3, cardStyle4, cardStyle5, cardStyle6, cardStyle7, cardStyle8, cardStyle9, cardStyle10,cardBackground1,cardBackground2,cardBackground3,cardBackground4,cardBackground5,cardBackground6,cardBackground7,cardBackground8,cardBackground9, ResetAll,loaderEnable,loaderDisable;
    let html = document.querySelector('html');
    ltrBtn = document.querySelector('#switcher-ltr');
    rtlBtn = document.querySelector('#switcher-rtl');
    verticalBtn = document.querySelector('#switcher-vertical');
    horiBtn = document.querySelector('#switcher-horizontal');
    boxedBtn = document.querySelector('#switcher-boxed');
    fullwidthBtn = document.querySelector('#switcher-full-width');
    fixedMenuBtn = document.querySelector('#switcher-menu-fixed');
    scrollMenuBtn = document.querySelector('#switcher-menu-scroll');
    fixedHeaderBtn = document.querySelector('#switcher-header-fixed');
    scrollHeaderBtn = document.querySelector('#switcher-header-scroll');
    defaultBtn = document.querySelector('#switcher-default-menu');
    menuClickBtn = document.querySelector('#switcher-menu-click');
    menuHoverBtn = document.querySelector('#switcher-menu-hover');
    iconClickBtn = document.querySelector('#switcher-icon-click');
    iconHoverBtn = document.querySelector('#switcher-icon-hover');
    closedBtn = document.querySelector('#switcher-closed-menu');
    iconTextBtn = document.querySelector('#switcher-icontext-menu');
    overlayBtn = document.querySelector('#switcher-icon-overlay');
    doubleBtn = document.querySelector('#switcher-double-menu');
    detachedBtn = document.querySelector('#switcher-detached');
    primaryDefaultColor1Btn = document.querySelector('#switcher-primary');
    primaryDefaultColor2Btn = document.querySelector('#switcher-primary1');
    primaryDefaultColor3Btn = document.querySelector('#switcher-primary2');
    primaryDefaultColor4Btn = document.querySelector('#switcher-primary3');
    primaryDefaultColor5Btn = document.querySelector('#switcher-primary4');
    bgPattern1Btn = document.querySelector('#switcher-pattern-img');
    bgPattern2Btn = document.querySelector('#switcher-pattern-img1');
    bgPattern3Btn = document.querySelector('#switcher-pattern-img2');
    bgPattern4Btn = document.querySelector('#switcher-pattern-img3');
    bgPattern5Btn = document.querySelector('#switcher-pattern-img4');
    bgPattern6Btn = document.querySelector('#switcher-pattern-img5');
    bgPattern7Btn = document.querySelector('#switcher-pattern-img6');
    bgPattern8Btn = document.querySelector('#switcher-pattern-img7');
    bgPattern9Btn = document.querySelector('#switcher-pattern-img8');
    bgPattern10Btn = document.querySelector('#switcher-pattern-img9');
    cardStyle1 = document.querySelector('#switcher-card-style');
    cardStyle2 = document.querySelector('#switcher-card-style1');
    cardStyle3 = document.querySelector('#switcher-card-style2');
    cardStyle4 = document.querySelector('#switcher-card-style3');
    cardStyle5 = document.querySelector('#switcher-card-style4');
    cardStyle6 = document.querySelector('#switcher-card-style5');
    cardStyle7 = document.querySelector('#switcher-card-style6');
    cardStyle8 = document.querySelector('#switcher-card-style7');
    cardStyle9 = document.querySelector('#switcher-card-style8');
    cardStyle10 = document.querySelector('#switcher-card-style9');
    cardBackground1 = document.querySelector('#switcher-card-background');
    cardBackground2 = document.querySelector('#switcher-card-background1');
    cardBackground3 = document.querySelector('#switcher-card-background2');
    cardBackground4 = document.querySelector('#switcher-card-background3');
    cardBackground5 = document.querySelector('#switcher-card-background4');
    cardBackground6 = document.querySelector('#switcher-card-background5');
    cardBackground7 = document.querySelector('#switcher-card-background6');
    cardBackground8 = document.querySelector('#switcher-card-background7');
    cardBackground9 = document.querySelector('#switcher-card-background8');
    bgImage1Btn = document.querySelector('#switcher-bg-img');
    bgImage2Btn = document.querySelector('#switcher-bg-img1');
    bgImage3Btn = document.querySelector('#switcher-bg-img2');
    bgImage4Btn = document.querySelector('#switcher-bg-img3');
    bgImage5Btn = document.querySelector('#switcher-bg-img4');
    ResetAll = document.querySelector('#reset-all');
    loaderEnable = document.querySelector('#switcher-loader-enable');
    loaderDisable = document.querySelector('#switcher-loader-disable');

    // primary theme
    let primaryColor1Var = primaryDefaultColor1Btn.addEventListener('click', () => {
        localStorage.setItem("primaryRGB", "0, 255, 0");
        html.style.setProperty('--primary-rgb', `0, 255, 0`);
        document.querySelector('html').style.setProperty('--theme-bg-gradient', "#011a01");
        document.querySelector('html').style.setProperty('--light-rgb', "1, 26, 1");
    })
    let primaryColor2Var = primaryDefaultColor2Btn.addEventListener('click', () => {
        localStorage.setItem("primaryRGB", "255, 235, 59");
        html.style.setProperty('--primary-rgb', `255, 235, 59`);
        document.querySelector('html').style.setProperty('--theme-bg-gradient', "#181601");
        document.querySelector('html').style.setProperty('--light-rgb', "24, 22, 1");
    })
    let primaryColor3Var = primaryDefaultColor3Btn.addEventListener('click', () => {
        localStorage.setItem("primaryRGB", "0, 254, 252");
        html.style.setProperty('--primary-rgb', `0, 254, 252`);
        document.querySelector('html').style.setProperty('--theme-bg-gradient', "#011813");
        document.querySelector('html').style.setProperty('--light-rgb', "1, 24, 19");
    })
    let primaryColor4Var = primaryDefaultColor4Btn.addEventListener('click', () => {
        localStorage.setItem("primaryRGB", "0, 175, 255");
        html.style.setProperty('--primary-rgb', `0, 175, 255`);
        document.querySelector('html').style.setProperty('--theme-bg-gradient', "#011118");
        document.querySelector('html').style.setProperty('--light-rgb', "1, 17, 24");
    })
    let primaryColor5Var = primaryDefaultColor5Btn.addEventListener('click', () => {
        localStorage.setItem("primaryRGB", "209, 115, 255");
        html.style.setProperty('--primary-rgb', `209, 115, 255`);
        document.querySelector('html').style.setProperty('--theme-bg-gradient', "#110118");
        document.querySelector('html').style.setProperty('--light-rgb', "17, 1, 24");
    })

    // Bg image
    let bgImg1Var = bgImage1Btn.addEventListener('click', () => {
        html.setAttribute('data-bg-img', 'bgimg1')
        localStorage.setItem("bgimg", "bgimg1")
    })
    let bgImg2Var = bgImage2Btn.addEventListener('click', () => {
        html.setAttribute('data-bg-img', 'bgimg2')
        localStorage.setItem("bgimg", "bgimg2")
    })
    let bgImg3Var = bgImage3Btn.addEventListener('click', () => {
        html.setAttribute('data-bg-img', 'bgimg3')
        localStorage.setItem("bgimg", "bgimg3")
    })
    let bgImg4Var = bgImage4Btn.addEventListener('click', () => {
        html.setAttribute('data-bg-img', 'bgimg4')
        localStorage.setItem("bgimg", "bgimg4")
    })
    let bgImg5Var = bgImage5Btn.addEventListener('click', () => {
        html.setAttribute('data-bg-img', 'bgimg5')
        localStorage.setItem("bgimg", "bgimg5")
    })
    
    // Pattern image
    let bgPattern1Var = bgPattern1Btn.addEventListener('click', () => {
        html.setAttribute('data-pattern-img', 'bgpattern1')
        localStorage.setItem("bgpattern", "bgpattern1")
    })
    let bgPattern2Var = bgPattern2Btn.addEventListener('click', () => {
        html.setAttribute('data-pattern-img', 'bgpattern2')
        localStorage.setItem("bgpattern", "bgpattern2")
    })
    let bgPattern3Var = bgPattern3Btn.addEventListener('click', () => {
        html.setAttribute('data-pattern-img', 'bgpattern3')
        localStorage.setItem("bgpattern", "bgpattern3")
    })
    let bgPattern4Var = bgPattern4Btn.addEventListener('click', () => {
        html.setAttribute('data-pattern-img', 'bgpattern4')
        localStorage.setItem("bgpattern", "bgpattern4")
    })
    let bgPattern5Var = bgPattern5Btn.addEventListener('click', () => {
        html.setAttribute('data-pattern-img', 'bgpattern5')
        localStorage.setItem("bgpattern", "bgpattern5")
    })
    let bgPattern6Var = bgPattern6Btn.addEventListener('click', () => {
        html.setAttribute('data-pattern-img', 'bgpattern6')
        localStorage.setItem("bgpattern", "bgpattern6")
    })
    let bgPattern7Var = bgPattern7Btn.addEventListener('click', () => {
        html.setAttribute('data-pattern-img', 'bgpattern7')
        localStorage.setItem("bgpattern", "bgpattern7")
    })
    let bgPattern8Var = bgPattern8Btn.addEventListener('click', () => {
        html.setAttribute('data-pattern-img', 'bgpattern8')
        localStorage.setItem("bgpattern", "bgpattern8")
    })
    let bgPattern9Var = bgPattern9Btn.addEventListener('click', () => {
        html.setAttribute('data-pattern-img', 'bgpattern9')
        localStorage.setItem("bgpattern", "bgpattern9")
    })
    let bgPattern10Var = bgPattern10Btn.addEventListener('click', () => {
        html.setAttribute('data-pattern-img', 'bgpattern10')
        localStorage.setItem("bgpattern", "bgpattern10")
    })

    // Card Style
    let cardStyle1Var = cardStyle1.addEventListener('click', () => {
        html.setAttribute('data-card-style', 'style1')
        localStorage.setItem("cardStyle", "style1")
    })
    let cardStyle2Var = cardStyle2.addEventListener('click', () => {
        html.setAttribute('data-card-style', 'style2')
        localStorage.setItem("cardStyle", "style2")
    })
    let cardStyle3Var = cardStyle3.addEventListener('click', () => {
        html.setAttribute('data-card-style', 'style3')
        localStorage.setItem("cardStyle", "style3")
    })
    let cardStyle4Var = cardStyle4.addEventListener('click', () => {
        html.setAttribute('data-card-style', 'style4')
        localStorage.setItem("cardStyle", "style4")
    })
    let cardStyle5Var = cardStyle5.addEventListener('click', () => {
        html.setAttribute('data-card-style', 'style5')
        localStorage.setItem("cardStyle", "style5")
    })
    let cardStyle6Var = cardStyle6.addEventListener('click', () => {
        html.setAttribute('data-card-style', 'style6')
        localStorage.setItem("cardStyle", "style6")
    })
    let cardStyle7Var = cardStyle7.addEventListener('click', () => {
        html.setAttribute('data-card-style', 'style7')
        localStorage.setItem("cardStyle", "style7")
    })
    let cardStyle8Var = cardStyle8.addEventListener('click', () => {
        html.setAttribute('data-card-style', 'style8')
        localStorage.setItem("cardStyle", "style8")
    })
    let cardStyle9Var = cardStyle9.addEventListener('click', () => {
        html.setAttribute('data-card-style', 'style9')
        localStorage.setItem("cardStyle", "style9")
    })
    let cardStyle10Var = cardStyle10.addEventListener('click', () => {
        html.setAttribute('data-card-style', 'style10')
        localStorage.setItem("cardStyle", "style10")
    })

    // Card Background
    let cardBackground1Var = cardBackground1.addEventListener('click', () => {
        html.setAttribute('data-card-background', 'background1')
        localStorage.setItem("cardBackground", "background1")
    })
    let cardBackground2Var = cardBackground2.addEventListener('click', () => {
        html.setAttribute('data-card-background', 'background2')
        localStorage.setItem("cardBackground", "background2")
    })
    let cardBackground3Var = cardBackground3.addEventListener('click', () => {
        html.setAttribute('data-card-background', 'background3')
        localStorage.setItem("cardBackground", "background3")
    })
    let cardBackground4Var = cardBackground4.addEventListener('click', () => {
        html.setAttribute('data-card-background', 'background4')
        localStorage.setItem("cardBackground", "background4")
    })
    let cardBackground5Var = cardBackground5.addEventListener('click', () => {
        html.setAttribute('data-card-background', 'background5')
        localStorage.setItem("cardBackground", "background5")
    })
    let cardBackground6Var = cardBackground6.addEventListener('click', () => {
        html.setAttribute('data-card-background', 'background6')
        localStorage.setItem("cardBackground", "background6")
    })
    let cardBackground7Var = cardBackground7.addEventListener('click', () => {
        html.setAttribute('data-card-background', 'background7')
        localStorage.setItem("cardBackground", "background7")
    })
    let cardBackground8Var = cardBackground8.addEventListener('click', () => {
        html.setAttribute('data-card-background', 'background8')
        localStorage.setItem("cardBackground", "background8")
    })
    let cardBackground9Var = cardBackground9.addEventListener('click', () => {
        html.setAttribute('data-card-background', 'background9')
        localStorage.setItem("cardBackground", "background9")
    })

    /* Full Width Layout Start */
    let fullwidthVar = fullwidthBtn.addEventListener('click', () => {
        html.setAttribute('data-width', 'fullwidth');
        localStorage.setItem("scififullwidth", true);
        localStorage.removeItem("scifiboxed");
    });
    /* Full Width Layout End */

    /* Boxed Layout Start */
    let boxedVar = boxedBtn.addEventListener('click', () => {
        html.setAttribute('data-width', 'boxed');
        localStorage.setItem("scifiboxed", true);
        localStorage.removeItem("scififullwidth");
        checkHoriMenu()
    });
    /* Boxed Layout End */

    /* Header-Position Styles Start */
    let fixedHeaderVar = fixedHeaderBtn.addEventListener('click', () => {
        html.setAttribute('data-header-position', 'fixed');
        localStorage.setItem("scifiheaderfixed", true);
        localStorage.removeItem("scifiheaderscrollable");
    });

    let scrollHeaderVar = scrollHeaderBtn.addEventListener('click', () => {
        html.setAttribute('data-header-position', 'scrollable');
        localStorage.setItem("scifiheaderscrollable", true);
        localStorage.removeItem("scifiheaderfixed");
    });
    /* Header-Position Styles End */

    /* Menu-Position Styles Start */
    let fixedMenuVar = fixedMenuBtn.addEventListener('click', () => {
        html.setAttribute('data-menu-position', 'fixed');
        localStorage.setItem("scifimenufixed", true);
        localStorage.removeItem("scifimenuscrollable");
    });

    let scrollMenuVar = scrollMenuBtn.addEventListener('click', () => {
        html.setAttribute('data-menu-position', 'scrollable');
        localStorage.setItem("scifimenuscrollable", true);
        localStorage.removeItem("scifimenufixed");
    });
    /* Menu-Position Styles End */

    /* Default Sidemenu Start */
    let defaultVar = defaultBtn.addEventListener('click', () => {
        html.setAttribute('data-vertical-style', 'default-overlay');
        html.setAttribute('data-nav-layout', 'vertical')
        toggleSidemenu();
        localStorage.setItem("scifiverticalstyles", 'default-overlay');
        document.querySelectorAll(".main-menu>li.open").forEach((ele)=>{
            if(!ele.classList.contains('active')){
                ele.classList.remove('open')
                ele.querySelector('ul').style.display = 'none'
            }
        })
    });
    /* Default Sidemenu End */

    /* Closed Sidemenu Start */
    let closedVar = closedBtn.addEventListener('click', () => {
        closedSidemenuFn();
        localStorage.setItem("scifiverticalstyles", 'closed');
        document.querySelectorAll(".main-menu>li.open").forEach((ele)=>{
            if(!ele.classList.contains('active')){
                ele.classList.remove('open')
                ele.querySelector('ul').style.display = 'none'
            }
        })
    });
    /* Closed Sidemenu End */

    /* Detached menu Start */
    let detachedVar = detachedBtn.addEventListener('click', () => {
        localStorage.setItem("scifiverticalstyles", 'detached');
        document.querySelector('#switcher-detached').checked = true;
        verticalFn();
    });
    /* Detached menu End */

    /* Icon Text Sidemenu Start */
    let iconTextVar = iconTextBtn.addEventListener('click', () => {
        iconTextFn();
        localStorage.setItem("scifiverticalstyles", 'icontext');
    });
    /* Icon Text Sidemenu End */

    /* Icon Overlay Sidemenu Start */
    let overlayVar = overlayBtn.addEventListener('click', () => {
        iconOverayFn();
        localStorage.setItem("scifiverticalstyles", 'overlay');
        document.querySelectorAll(".main-menu>li.open").forEach((ele)=>{
            if(!ele.classList.contains('active')){
                ele.classList.remove('open')
                ele.querySelector('ul').style.display = 'none'
            }
        })
    });
    /* Icon Overlay Sidemenu End */

    /* doublemenu Sidemenu Start */
    let doubleVar = doubleBtn.addEventListener('click', () => {
        doubletFn();
        localStorage.setItem("scifiverticalstyles", 'doublemenu');
    });
    /* doublemenu Sidemenu End */

    /* Menu Click Sidemenu Start */
    let menuClickVar = menuClickBtn.addEventListener('click', () => {
        html.removeAttribute('data-vertical-style');
        menuClickFn();
        localStorage.setItem("scifinavstyles", 'menu-click');
        localStorage.removeItem("scifiverticalstyles");
        document.querySelectorAll(".main-menu>li.open").forEach((ele)=>{
            if(!ele.classList.contains('active')){
                ele.classList.remove('open')
                ele.querySelector('ul').style.display = 'none'
            }
        })
        if(document.querySelector("html").getAttribute("data-nav-layout")=='horizontal'){
            document.querySelector(".main-menu").style.marginLeft = "0px"
            document.querySelector(".main-menu").style.marginRight = "0px"
            ResizeMenu()
        }
    });
    /* Menu Click Sidemenu End */

    /* Menu Hover Sidemenu Start */
    let menuhoverVar = menuHoverBtn.addEventListener('click', () => {
        html.removeAttribute('data-vertical-style');
        menuhoverFn();
        localStorage.setItem("scifinavstyles", 'menu-hover');
        localStorage.removeItem("scifiverticalstyles");

        if(document.querySelector("html").getAttribute("data-nav-layout")=='horizontal'){
            document.querySelector(".main-menu").style.marginLeft = "0px"
            document.querySelector(".main-menu").style.marginRight = "0px"
            ResizeMenu()
        }
    });
    /* Menu Hover Sidemenu End */

    /* icon Click Sidemenu Start */
    let iconClickVar = iconClickBtn.addEventListener('click', () => {
        html.removeAttribute('data-vertical-style');
        iconClickFn();
        localStorage.setItem("scifinavstyles", 'icon-click');
        localStorage.removeItem("scifiverticalstyles");

        if(document.querySelector("html").getAttribute("data-nav-layout")=='horizontal'){
            document.querySelector(".main-menu").style.marginLeft = "0px"
            document.querySelector(".main-menu").style.marginRight = "0px"
            ResizeMenu()
            document.querySelector("#slide-left").classList.add("d-none")
        }
        document.querySelectorAll(".main-menu>li.open").forEach((ele)=>{
            if(!ele.classList.contains('active')){
                ele.classList.remove('open')
                ele.querySelector('ul').style.display = 'none'
            }
        })
    });
    /* icon Click Sidemenu End */

    /* icon hover Sidemenu Start */
    let iconhoverVar = iconHoverBtn.addEventListener('click', () => {
        html.removeAttribute('data-vertical-style');
        iconHoverFn();
        localStorage.setItem("scifinavstyles", 'icon-hover');
        localStorage.removeItem("scifiverticalstyles");

        if(document.querySelector("html").getAttribute("data-nav-layout")=='horizontal'){
            document.querySelector(".main-menu").style.marginLeft = "0px"
            document.querySelector(".main-menu").style.marginRight = "0px"
            ResizeMenu()
            document.querySelector("#slide-left").classList.add("d-none")
        }
    });
    /* icon hover Sidemenu End */

    /* Sidemenu start*/
    let verticalVar = verticalBtn.addEventListener('click', () => {
        let mainContent = document.querySelector('.main-content');
        // local storage
        localStorage.removeItem("scifilayout");
        localStorage.setItem("scifiverticalstyles", 'detached');
        document.querySelector('#switcher-detached').checked = true;
        verticalFn();
        setNavActive();
        mainContent.removeEventListener('click', clearNavDropdown);

        //
        document.querySelector(".main-menu").style.marginLeft = "0px"
        document.querySelector(".main-menu").style.marginRight = "0px"

        document.querySelectorAll(".slide").forEach((element) => {
            if (
              element.classList.contains("open") &&
              !element.classList.contains("active")
            ) {
              element.querySelector("ul").style.display = "none";
            }
        });
    });
    /* Sidemenu end */

    /* horizontal start*/
    let horiVar = horiBtn.addEventListener('click', () => {
        let mainContent = document.querySelector('.main-content');
        html.removeAttribute('data-vertical-style');
        //    local storage
        localStorage.setItem("scifilayout", 'horizontal');
        localStorage.removeItem("scifiverticalstyles");

        horizontalClickFn();
        clearNavDropdown();
        mainContent.addEventListener('click', clearNavDropdown);
    });
    /* horizontal end*/

    /* rtl start */
    let rtlVar = rtlBtn.addEventListener('click', () => {
        localStorage.setItem("scifirtl", true);
        localStorage.removeItem("scifiltr");
        rtlFn(); 
        if (document.querySelector(".noUi-target")) {
            console.log("working");
            document.querySelectorAll(".noUi-origin").forEach((e) => {
              e.classList.add("transform-none");
            });
        }
    });
    /* rtl end */

    /* ltr start */
    let ltrVar = ltrBtn.addEventListener('click', () => {
        //    local storage
        localStorage.setItem("scifiltr", true);
        localStorage.removeItem("scifirtl");
        ltrFn();
        if (document.querySelector(".noUi-target")) {
            document.querySelectorAll(".noUi-origin").forEach((e) => {
              e.classList.remove("transform-none");
            });
          }
    });
    /* ltr end */

    // reset all start
    let resetVar = ResetAll.addEventListener('click', () => {
        ResetAllFn();
        setNavActive();
        document.querySelectorAll(".slide").forEach((element) => {
            if (
              element.classList.contains("open") &&
              !element.classList.contains("active")
            ) {
              element.querySelector("ul").style.display = "none";
            }
        });
    })
    // reset all end

    /* loader start */
    loaderEnable.onclick = ()=>{
        document.querySelector("html").setAttribute("loader","enable");
        localStorage.setItem("loaderEnable","true")
    }
    
    loaderDisable.onclick = ()=>{
        document.querySelector("html").setAttribute("loader","disable");
        localStorage.setItem("loaderEnable","false")
    }
    /* loader end */
}

function ltrFn() {
    let html = document.querySelector('html')
    if(!document.querySelector("#style").href.includes('bootstrap.min.css')){
        document.querySelector("#style")?.setAttribute("href", "../assets/libs/bootstrap/css/bootstrap.min.css");
    }
    html.setAttribute("dir", "ltr");
    document.querySelector('#switcher-ltr').checked = true;
    checkOptions();
}

function rtlFn() {
    let html = document.querySelector('html');
    html.setAttribute("dir", "rtl");
    document.querySelector("#style")?.setAttribute("href", "../assets/libs/bootstrap/css/bootstrap.rtl.min.css");
    checkOptions();
}

function verticalFn() {
    let html = document.querySelector('html');
    html.setAttribute('data-nav-layout', 'vertical');
    html.setAttribute('data-vertical-style', 'detached');
    html.removeAttribute('data-nav-style');
    localStorage.removeItem('scifinavstyles');
    html.removeAttribute('data-toggled');
    document.querySelector('#switcher-vertical').checked = true;
    document.querySelector('#switcher-detached').checked = true;
    document.querySelector('#switcher-menu-click').checked = false;
    document.querySelector('#switcher-menu-hover').checked = false;
    document.querySelector('#switcher-icon-click').checked = false;
    document.querySelector('#switcher-icon-hover').checked = false;
    checkOptions();
}

function horizontalClickFn() {
    document.querySelector('#switcher-horizontal').checked = true;
    document.querySelector('#switcher-menu-click').checked = true;
    let html = document.querySelector('html');
    html.setAttribute('data-nav-layout', 'horizontal');
    html.removeAttribute('data-vertical-style');
    if (!html.getAttribute('data-nav-style')) {
        html.setAttribute('data-nav-style', 'menu-click');
    }
    checkOptions();
    checkHoriMenu();
}

function ResetAllFn() {
    let html = document.querySelector('html');
    if(localStorage.getItem("scifilayout")=="horizontal"){
        document.querySelector(".main-menu").style.display = "block"
    }
    checkOptions();

    // clearing localstorage
    localStorage.clear();

    //To reset the light-rgb
    document.querySelector('html').removeAttribute("style")

    // clearing attibutes
    // removing header, menu, pageStyle & boxed
    html.removeAttribute('data-nav-style');
    html.removeAttribute('data-menu-position');
    html.removeAttribute('data-header-position');
    html.removeAttribute('data-width');
    html.removeAttribute('data-page-style');

   // removing menu image styles
    html.removeAttribute('data-bg-img');
    document.querySelector('#switcher-bg-img').checked = false;
    document.querySelector('#switcher-bg-img1').checked = false;
    document.querySelector('#switcher-bg-img2').checked = false;
    document.querySelector('#switcher-bg-img3').checked = false;
    document.querySelector('#switcher-bg-img4').checked = false;
    
    // removing pattern styles
    html.removeAttribute('data-pattern-img');

    // removing Card style styles
    html.setAttribute("data-pattern-img", "bgpattern4");
    document.querySelector('#switcher-pattern-img').checked = false;
    document.querySelector('#switcher-pattern-img1').checked = false;
    document.querySelector('#switcher-pattern-img2').checked = false;
    document.querySelector('#switcher-pattern-img3').checked = true;
    document.querySelector('#switcher-pattern-img4').checked = false;
    document.querySelector('#switcher-pattern-img5').checked = false;
    document.querySelector('#switcher-pattern-img6').checked = false;
    document.querySelector('#switcher-pattern-img7').checked = false;
    document.querySelector('#switcher-pattern-img8').checked = false;
    document.querySelector('#switcher-pattern-img9').checked = false;

    // removing Card style styles
    html.setAttribute("data-card-style", "style1");
    document.querySelector('#switcher-card-style').checked = true;
    document.querySelector('#switcher-card-style1').checked = false;
    document.querySelector('#switcher-card-style2').checked = false;
    document.querySelector('#switcher-card-style3').checked = false;
    document.querySelector('#switcher-card-style4').checked = false;
    document.querySelector('#switcher-card-style5').checked = false;
    document.querySelector('#switcher-card-style6').checked = false;
    document.querySelector('#switcher-card-style7').checked = false;
    document.querySelector('#switcher-card-style8').checked = false;
    document.querySelector('#switcher-card-style9').checked = false;

    // removing Card background styles
    html.setAttribute("data-card-background", "background1");
    document.querySelector('#switcher-card-background').checked = true;
    document.querySelector('#switcher-card-background1').checked = false;
    document.querySelector('#switcher-card-background2').checked = false;
    document.querySelector('#switcher-card-background3').checked = false;
    document.querySelector('#switcher-card-background4').checked = false;
    document.querySelector('#switcher-card-background5').checked = false;
    document.querySelector('#switcher-card-background6').checked = false;
    document.querySelector('#switcher-card-background7').checked = false;
    document.querySelector('#switcher-card-background8').checked = false;

    // clear primary & bg color
    html.style.removeProperty(`--primary-rgb`);
    html.style.removeProperty(`--body-bg-rgb`);

    // reseting to ltr
    ltrFn();

    // reseting to vertical
    verticalFn();
    mainContent.removeEventListener('click', clearNavDropdown);

    // reseting layout width styles
    document.querySelector('#switcher-full-width').checked = true;
    document.querySelector('#switcher-boxed').checked = false;

    // reseting menu position styles
    document.querySelector('#switcher-menu-fixed').checked = true;
    document.querySelector('#switcher-menu-scroll').checked = false;

    // reseting header position styles
    document.querySelector('#switcher-header-fixed').checked = true;
    document.querySelector('#switcher-header-scroll').checked = false;

    // reseting sidemenu layout styles
    document.querySelector('#switcher-default-menu').checked = false;
    document.querySelector('#switcher-closed-menu').checked = false;
    document.querySelector('#switcher-icontext-menu').checked = false;
    document.querySelector('#switcher-icon-overlay').checked = false;
    document.querySelector('#switcher-detached').checked = true;
    document.querySelector('#switcher-double-menu').checked = false;

    // resetting theme primary
    document.querySelector("#switcher-primary").checked = false
    document.querySelector("#switcher-primary1").checked = false
    document.querySelector("#switcher-primary2").checked = false
    document.querySelector("#switcher-primary3").checked = false
    document.querySelector("#switcher-primary4").checked = false
    
    // to reset horizontal menu scroll
    document.querySelector(".main-menu").style.marginLeft = "0px"
    document.querySelector(".main-menu").style.marginRight = "0px"


}

function checkOptions() {

    // horizontal
    if (localStorage.getItem('scifilayout') === "horizontal") {
        document.querySelector('#switcher-horizontal').checked = true;
        document.querySelector('#switcher-menu-click').checked = true;
    }
    else {
        document.querySelector('#switcher-vertical').checked = true;
    }

    //RTL
    if (localStorage.getItem('scifirtl')) {
        document.querySelector('#switcher-rtl').checked = true;
    }
    else {
        document.querySelector('#switcher-ltr').checked = true;
    }

    //boxed
    if (localStorage.getItem('scifiboxed')) {
        document.querySelector('#switcher-boxed').checked = true;
    }

    //scrollable
    if (localStorage.getItem('scifiheaderscrollable')) {
        document.querySelector('#switcher-header-scroll').checked = true;
    }
    if (localStorage.getItem('scifimenuscrollable')) {
        document.querySelector('#switcher-menu-scroll').checked = true;
    }

    //scrollable
    if (localStorage.getItem('scifiheaderscrollable')) {
        document.querySelector('#switcher-header-scroll').checked = true;
    }
    if (localStorage.getItem('scifimenuscrollable')) {
        document.querySelector('#switcher-menu-scroll').checked = true;
    }

   // bgpattern style
   if (localStorage.bgpattern) {
        let bgpatternStyles = localStorage.getItem('bgpattern');
        switch (bgpatternStyles) {
            case 'bgpattern1':
                document.querySelector('#switcher-pattern-img').checked = true;
                break;
            case 'bgpattern2':
                document.querySelector('#switcher-pattern-img1').checked = true;
                break;
            case 'bgpattern3':
                document.querySelector('#switcher-pattern-img2').checked = true;
                break;
            case 'bgpattern4':
                document.querySelector('#switcher-pattern-img3').checked = true;
                break;
            case 'bgpattern5':
                document.querySelector('#switcher-pattern-img4').checked = true;
                break;
            case 'bgpattern6':
                document.querySelector('#switcher-pattern-img5').checked = true;
                break;
            case 'bgpattern7':
                document.querySelector('#switcher-pattern-img6').checked = true;
                break;
            case 'bgpattern8':
                document.querySelector('#switcher-pattern-img7').checked = true;
                break;
            case 'bgpattern9':
                document.querySelector('#switcher-pattern-img8').checked = true;
                break;
            case 'bgpattern10':
                document.querySelector('#switcher-pattern-img9').checked = true;
                break;
        }
    }

   // cardStyle
   if (localStorage.cardStyle) {
        let cardStyles = localStorage.getItem('cardStyle');
        switch (cardStyles) {
            case 'style1':
                document.querySelector('#switcher-card-style').checked = true;
                break;
            case 'style2':
                document.querySelector('#switcher-card-style1').checked = true;
                break;
            case 'style3':
                document.querySelector('#switcher-card-style2').checked = true;
                break;
            case 'style4':
                document.querySelector('#switcher-card-style3').checked = true;
                break;
            case 'style5':
                document.querySelector('#switcher-card-style4').checked = true;
                break;
            case 'style6':
                document.querySelector('#switcher-card-style5').checked = true;
                break;
            case 'style7':
                document.querySelector('#switcher-card-style6').checked = true;
                break;
            case 'style8':
                document.querySelector('#switcher-card-style7').checked = true;
                break;
            case 'style9':
                document.querySelector('#switcher-card-style8').checked = true;
                break;
            case 'style10':
                document.querySelector('#switcher-card-style9').checked = true;
                break;
        }
    }

   // cardBackground style
   if (localStorage.cardBackground) {
        let cardBackgroundstyles = localStorage.getItem('cardBackground');
        switch (cardBackgroundstyles) {
            case 'background1':
                document.querySelector('#switcher-card-background').checked = true;
                break;
            case 'background2':
                document.querySelector('#switcher-card-background1').checked = true;
                break;
            case 'background3':
                document.querySelector('#switcher-card-background2').checked = true;
                break;
            case 'background4':
                document.querySelector('#switcher-card-background3').checked = true;
                break;
            case 'background5':
                document.querySelector('#switcher-card-background4').checked = true;
                break;
            case 'background6':
                document.querySelector('#switcher-card-background5').checked = true;
                break;
            case 'background7':
                document.querySelector('#switcher-card-background6').checked = true;
                break;
            case 'background8':
                document.querySelector('#switcher-card-background7').checked = true;
                break;
            case 'background9':
                document.querySelector('#switcher-card-background8').checked = true;
                break;
        }
    }

    // cardBackground style
    if (localStorage.bgimg) {
        let bgimages = localStorage.getItem('bgimg');
        switch (bgimages) {
            case 'bgimg1':
                document.querySelector('#switcher-bg-img').checked = true;
                break;
            case 'bgimg2':
                document.querySelector('#switcher-bg-img1').checked = true;
                break;
            case 'bgimg3':
                document.querySelector('#switcher-bg-img2').checked = true;
                break;
            case 'bgimg4':
                document.querySelector('#switcher-bg-img3').checked = true;
                break;
            case 'bgimg5':
                document.querySelector('#switcher-bg-img4').checked = true;
                break;
        }
    }
    
    // sidemenu layout style
    if (localStorage.scifiverticalstyles) {
        let verticalStyles = localStorage.getItem('scifiverticalstyles');
        switch (verticalStyles) {
            case 'default':
                document.querySelector('#switcher-default-menu').checked = true;
                break;
            case 'closed':
                document.querySelector('#switcher-closed-menu').checked = true;
                break;
            case 'icontext':
                document.querySelector('#switcher-icontext-menu').checked = true;
                break;
            case 'overlay':
                document.querySelector('#switcher-icon-overlay').checked = true;
                break;
            case 'detached':
                document.querySelector('#switcher-detached').checked = true;
                break;
            case 'doublemenu':
                document.querySelector('#switcher-double-menu').checked = true;
                break;
            default:
                document.querySelector('#switcher-default-menu').checked = true;
                break;
        }
    }
    // navigation menu style
    if (localStorage.scifinavstyles) {
        let navStyles = localStorage.getItem('scifinavstyles');
        switch (navStyles) {
            case 'menu-click':
                document.querySelector('#switcher-menu-click').checked = true;
                break;
            case 'menu-hover':
                document.querySelector('#switcher-menu-hover').checked = true;
                break;
            case 'icon-click':
                document.querySelector('#switcher-icon-click').checked = true;
                break;
            case 'icon-hover':
                document.querySelector('#switcher-icon-hover').checked = true;
                break;
        }
    }

    // loader
    if(localStorage.loaderEnable != "true"){
        document.querySelector("#switcher-loader-disable").checked = true
    }
}

//switcher color pickers
const pickrContainerPrimary = document.querySelector(
    ".pickr-container-primary"
  );
  const themeContainerPrimary = document.querySelector(
    ".theme-container-primary"
  );

  if (document.querySelector("#switcher-canvas")) {
    /* for theme primary */
    const nanoThemes = [
        [
        "nano",
        {
            defaultRepresentation: "RGB",
            components: {
            preview: true,
            opacity: false,
            hue: true,

            interaction: {
                hex: false,
                rgba: true,
                hsva: false,
                input: true,
                clear: false,
                save: false,
            },
            },
        },
        ],
    ];
    const nanoButtons = [];
    let nanoPickr = null;
    for (const [theme, config] of nanoThemes) {
        const button = document.createElement("button");
        button.innerHTML = theme;
        nanoButtons.push(button);

        button.addEventListener("click", () => {
        const el = document.createElement("p");
        pickrContainerPrimary.appendChild(el);

        /* Delete previous instance */
        if (nanoPickr) {
            nanoPickr.destroyAndRemove();
        }

        /* Apply active class */
        for (const btn of nanoButtons) {
            btn.classList[btn === button ? "add" : "remove"]("active");
        }

        /* Create fresh instance */
        nanoPickr = new Pickr(
            Object.assign(
            {
                el,
                theme,
                default: "#00fefc",
            },
            config
            )
        );

        /* Set events */
        nanoPickr.on("changestop", (source, instance) => {
            let color = instance.getColor().toRGBA();
            let html = document.querySelector("html");
            html.style.setProperty(
            "--primary-rgb",
            `${Math.floor(color[0])}, ${Math.floor(color[1])}, ${Math.floor(
                color[2]
            )}`
            );
            /* theme color picker */
            localStorage.setItem(
            "primaryRGB",
            `${Math.floor(color[0])}, ${Math.floor(color[1])}, ${Math.floor(
                color[2]
            )}`
            );
            html.style.setProperty(
            "--theme-bg-gradient",
            "#01041a"
            );
            localStorage.setItem(
            "--theme-bg-gradient",
            "#01041a"
            );
        });
        });

        themeContainerPrimary.appendChild(button);
    }
    nanoButtons[0].click();
    /* for theme primary */
}

function localStorageBackup2(){

    if (localStorage.primaryRGB) {
        if(localStorage.primaryRGB == "0, 255, 0"){
            document.querySelector("#switcher-primary").checked = true
            document.querySelector('html').style.setProperty('--theme-bg-gradient', "#011a01");
            document.querySelector('html').style.setProperty('--light-rgb', "1, 26, 1");
        }
        if(localStorage.primaryRGB == "255, 235, 59"){
            document.querySelector("#switcher-primary1").checked = true
            document.querySelector('html').style.setProperty('--theme-bg-gradient', "#181601");
            document.querySelector('html').style.setProperty('--light-rgb', "24, 22, 1");
        }
        if(localStorage.primaryRGB == "0, 254, 252"){
            document.querySelector("#switcher-primary2").checked = true
            document.querySelector('html').style.setProperty('--theme-bg-gradient', "#011813");
            document.querySelector('html').style.setProperty('--light-rgb', "1, 24, 19");
        }
        if(localStorage.primaryRGB == "0, 175, 255"){
            document.querySelector("#switcher-primary3").checked = true
            document.querySelector('html').style.setProperty('--theme-bg-gradient', "#011118");
            document.querySelector('html').style.setProperty('--light-rgb', "1, 17, 24");
        }
        if(localStorage.primaryRGB == "209, 115, 255"){
            document.querySelector("#switcher-primary4").checked = true
            document.querySelector('html').style.setProperty('--theme-bg-gradient', "#110118");
            document.querySelector('html').style.setProperty('--light-rgb', "17, 1, 24");
        }
    }

    if(localStorage.loaderEnable == "true"){
        document.querySelector("#switcher-loader-enable").checked = true
    }
}
