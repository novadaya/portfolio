
// Loader

window.addEventListener("load", () => {
	const loader = document.querySelector("#loading");
	loader.classList.add("loading-hidden");
});

// Szöveg írás funkció

function addText(textToHtml, anyText, i) {
	var text = "";
	addTextRecursive();
  
	function addTextRecursive() {
	  text += textToHtml[i];
	  $(anyText).text(text);
	  i++;
	  if (i < textToHtml.length) {
		setTimeout(addTextRecursive, 70);
	  }
	}
  }

// Üdvözlő szöveg kiírása

$(document).ready(function() {
	let anyText = "#welcome-message";
	let textToHtml = 'Hello! If you would like to explore our new world. Press "OK" and scroll down.';
	addText(textToHtml, anyText, 0);
});

// Üdvözlő szöveg eltüntetése

var openGate = false; //kapu megnitásához át kell állítani "true"-ra

$("#welcome-button").click(function() {
    $("#welcome").addClass("slide-out-blurred-bottom");
	openGate = true;
  });

  const zoomElements = [
    document.querySelector("#gate-back"),
    document.querySelector("#img-new-room"),
    document.querySelector("#gate-left"),
    document.querySelector("#gate-right")
];

let zoom = 1;
let translateX1 = 0;
let translateX2 = 0;
const ZOOM_SPEED = 0.15;
const TRANSLATE_SPEED = 25;
const MAX_ZOOM = 3.1;
const MIN_ZOOM = 1;
var startTouchY = 0;
var currentTouchY = 0;
var startScrollX = 0;
let isMenu = false; //még nem jelent meg a Circle menü

function handleTouchStart(e) {
    startTouchY = e.touches[0].clientY;
    startScrollX = window.scrollX;
}

function handleTouchMove(e) {
    currentTouchY = e.touches[0].clientY;

    if (currentTouchY > startTouchY && zoom <= MAX_ZOOM && openGate == true) {
        zoom += ZOOM_SPEED;
        translateX1 -= TRANSLATE_SPEED;
        translateX2 += TRANSLATE_SPEED;
    } else if (currentTouchY < startTouchY && zoom > MIN_ZOOM && openGate == true) {
        zoom -= ZOOM_SPEED;
        translateX1 += TRANSLATE_SPEED;
        translateX2 -= TRANSLATE_SPEED;
    }

    zoomElements.forEach(element => {
        element.style.transform = `scale(${zoom})`;
    });

    zoomElements[2].style.transform += ` translateX(${translateX1}px)`;
    zoomElements[3].style.transform += ` translateX(${translateX2}px)`;

    if (zoom >= MAX_ZOOM && isMenu == false) {
        openGate = false; // kaput bezártam
        isMenu = true; // megjelent a Circle menü

        /* Itt tölti be a Circle menüt. */
        $("#circle-menu-container").removeClass("hide-for-action");
        $("#circle-menu-text").removeClass("hide-for-action");
        var menuIndex = 1;
        var showMenuItems = setInterval(function() {
            let item = "#circle-menu-item-" + menuIndex;
            $(item).removeClass("hide-for-action");
            if (menuIndex == 6) {
                clearInterval(showMenuItems);
                setTimeout(function() {
                    $("#circle-menu-c1").removeClass("circle-menu-c1-loading rotate-circle").addClass("circle-menu-c1");
                }, 1500);
                
                setTimeout(function() {
                    $("#circle-menu-c2").removeClass("circle-menu-c2-loading rotate-circle-reverse").addClass("circle-menu-c2");
                }, 2000);
                
                setTimeout(function() {
                    $("#circle-menu-c3").removeClass("circle-menu-c3-loading rotate-circle").addClass("circle-menu-c3");
                }, 2500);
            }
            menuIndex++;
        }, 300);
    }
}

function handleWheel(e) {
    if (e.deltaY > 0 && zoom <= MAX_ZOOM && openGate == true) {
        zoom += ZOOM_SPEED;
        translateX1 -= TRANSLATE_SPEED;
        translateX2 += TRANSLATE_SPEED;
    } else if (e.deltaY < 0 && zoom > MIN_ZOOM && openGate == true) {
        zoom -= ZOOM_SPEED;
        translateX1 += TRANSLATE_SPEED;
        translateX2 -= TRANSLATE_SPEED;
    }

    zoomElements.forEach(element => {
        element.style.transform = `scale(${zoom})`;
    });

    zoomElements[2].style.transform += ` translateX(${translateX1}px)`;
    zoomElements[3].style.transform += ` translateX(${translateX2}px)`;

    if (zoom >= MAX_ZOOM && isMenu == false) {
        openGate = false; // kaput bezártam
        isMenu = true; // megjelent a Circle menü

        /* Itt tölti be a Circle menüt. */
        $("#circle-menu-container").removeClass("hide-for-action");
        $("#circle-menu-text").removeClass("hide-for-action");
        var menuIndex = 1;
        var showMenuItems = setInterval(function() {
            let item = "#circle-menu-item-" + menuIndex;
            $(item).removeClass("hide-for-action");
            if (menuIndex == 6) {
                clearInterval(showMenuItems);
                setTimeout(function() {
                    $("#circle-menu-c1").removeClass("circle-menu-c1-loading rotate-circle").addClass("circle-menu-c1");
                }, 1500);
                
                setTimeout(function() {
                    $("#circle-menu-c2").removeClass("circle-menu-c2-loading rotate-circle-reverse").addClass("circle-menu-c2");
                }, 2000);
                
                setTimeout(function() {
                    $("#circle-menu-c3").removeClass("circle-menu-c3-loading rotate-circle").addClass("circle-menu-c3");
                }, 2500);
            }
            menuIndex++;
        }, 300);
    }
}

if ('ontouchstart' in window) {
    document.addEventListener("touchstart", handleTouchStart);
    document.addEventListener("touchmove", handleTouchMove);
} else {
    document.addEventListener("wheel", handleWheel);
}



/* Circle Menu Hover Change Text */

$("#circle-menu-div div").mouseenter(function(){
    let selected_menu_item = $(this).attr("name");

    $(this).removeClass("active");
    $("#circle-menu-p").text(selected_menu_item).removeClass("scale-in-hor-center");
    setTimeout(function() {
        $("#circle-menu-p").addClass("scale-in-hor-center");
        $(this).addClass("active");
      }, 10);
});

/* Circle Menu Click, navigate */

$("#circle-menu-div div").click(function() {
    let clicked_menu_item = $(this).attr("name").toLowerCase();
    window.location.href = clicked_menu_item + ".html";
});

/* Robot Slider + Robot Skills */

const slider_items = $('.slider-items li');
const nav_next = $('.slider-nav.next');
const nav_prev = $('.slider-nav.prev');
const icon = '<i class="fa-skill fa-solid fa-meteor"></i>';

var selected_item = 0;
const name = "";
function setItemSlider(index) {
selected_item = index;

    slider_items.each(function (idx) {
        let offset = idx - selected_item;
        if (offset < 0) offset += slider_items.length;

        for (let i = 0; i < slider_items.length + 1; i++) {
            $(this)
                .removeClass(`item-${i}`)
                .addClass(`item-${offset + 1}`);
        }   
    });

    switch (selected_item) {
        case 0: 
            var name = "AstroByte";
            var skill1 = "Rapid Calculation Abilities";
			var skill2 = "Communication Interface";
			var skill3 = "Encoding and Decoding";
			var skill4 = "Remote Access";
			var skill5 = "Data Intrusion";

            break;
        case 1:
            var name = "Sentinel-Guard";
			var skill1 = "Radio Wave Jamming";
			var skill2 = "Remote Sensing";
			var skill3 = "Defense Shield";
			var skill4 = "Air Defense System";
			var skill5 = "Audio Alarm";
            break;
        case 2:
            var name = "Shadow-Strike";
			var skill1 = "Shadow Form";
			var skill2 = "Swift Strike";
			var skill3 = "Uninterrupted Movement";
			var skill4 = "Silent Steps";
			var skill5 = "Blade Hands";
            break;
        case 3:
            var name = "Spark-Guard";
			var skill1 = "Electromagnetic Defense";
			var skill2 = "Energy Generation";
			var skill3 = "Double Jump";
			var skill4 = "Stealth";
			var skill5 = "Electric Discharge";
            break;
        case 4:
            var name = "TurboArm";
			var skill1 = "Power Arm";
			var skill2 = "Tool Exchange System";
			var skill3 = "Manual Coordination";
			var skill4 = "Technical Genius";
			var skill5 = "Robotic Assembly";
            break;
        default:
            break;
    }
    
    $("#robot-name").text(name).removeClass("scale-in-hor-center");
    setTimeout(function() {
        $("#robot-name").addClass("scale-in-hor-center");
      }, 10);

	$("#robot-info-name").text(name);
	$("#robot-skill1").html(icon + skill1);
	$("#robot-skill2").html(icon + skill2);
	$("#robot-skill3").html(icon + skill3);
	$("#robot-skill4").html(icon + skill4);
	$("#robot-skill5").html(icon + skill5);

}


	$("#select-item").click(function() {
        $("#robot-info-container").addClass("scale-in-hor-center").removeClass("slide-out-blurred-bottom non-visible");	
    });

    $("#robot-info-close").click(function(){
            $("#robot-info-container").addClass("slide-out-blurred-bottom").removeClass("scale-in-hor-center");
		});


slider_items.click(function () {
    setItemSlider($(this).index()); 
});

nav_next.click(function () {
    selected_item = selected_item < slider_items.length - 1 ? ++selected_item : 0;
    setItemSlider(selected_item);
});

nav_prev.click(function () {
    selected_item = selected_item > 0? --selected_item : slider_items.length - 1;
    setItemSlider(selected_item);
});



/* VEHICLES */

var currentIndex = "0";
var nextIndex = "0";

$("#vehicles-tabs input").click(function() {
    currentIndex = nextIndex;
   	nextIndex = $(this).index();
    let leftValue = nextIndex * -100; // Váltás balra
	
	// ELTŰNNEK A MEGLÉVŐ ELEMEK, MAJD ELTOLJA BALRA VAGY JOBRA ÉS MEGJELENÍTI AZ ÚJ ELEMEKET

	
	for (let i = 1; i < 8; i++) {
		let currentElement = "#"+ currentIndex + "-vehicles-skill" + i;
		let inCurAnim = "in" +i;
		let outCurAnim = "out" + i;
		$(currentElement).removeClass(inCurAnim).addClass(outCurAnim);
		
	}
	
	setTimeout (function () {
		$(".vehicles-content").css("left", leftValue + "vw");

		for (let j = 1; j < 8; j++) {
			let nextElement = "#"+ nextIndex + "-vehicles-skill" + j;
			let inNextAnim = "in" + j;
			let outNextAnim = "out" + j;
			$(nextElement).removeClass(outNextAnim).addClass(inNextAnim);
		}

	}, 1300);		
  });


/* NAVIGATION */

const hamburgerMenu = document.querySelector("#hamburger-menu");
const overlay = document.querySelector("#overlay");
const nav1 = document.querySelector("#nav-1");
const nav2 = document.querySelector("#nav-2");
const nav3 = document.querySelector("#nav-3");
const nav4 = document.querySelector("#nav-4");
const nav5 = document.querySelector("#nav-5");
const navItems = [nav1, nav2, nav3, nav4, nav5];

//Navigation Animation
function navAnimation(val1, val2) {
  navItems.forEach((nav, i) => {
    nav.classList.replace(`slide-${val1}-${i + 1}`, `slide-${val2}-${i + 1}`);
  });
}

function toggleNav() {
  hamburgerMenu.classList.toggle("active");
  overlay.classList.toggle("overlay-active");

  if (overlay.classList.contains("overlay-active")) {
    overlay.classList.replace("overlay-slide-left", "overlay-slide-right");
    navAnimation("out", "in");
  } else {
    overlay.classList.replace("overlay-slide-right", "overlay-slide-left");
    navAnimation("in", "out");
  }
}

hamburgerMenu.addEventListener("click", toggleNav);
navItems.forEach((nav) => {
  nav.addEventListener("click", toggleNav);
});
