(function ($) {
    "use strict";

    // Sidebar Menu JS
    $("#sidebar-menu").metisMenu();

    // Header Sticky, Go To Top JS
    $(window).on("scroll", function () {
        // Header Sticky JS
        if ($(this).scrollTop() > 150) {
            $(".header-area").addClass("is-sticky");
        } else {
            $(".header-area").removeClass("is-sticky");
        }

        // Go To Top JS
        var scrolled = $(window).scrollTop();
        if (scrolled > 300) $(".go-top").addClass("active");
        if (scrolled < 300) $(".go-top").removeClass("active");
    });

    // Click Event JS
    $(".go-top").on("click", function () {
        $("html, body").animate({ scrollTop: "0" }, 50);
    });

    // Webpage FullScreen JS
    $("#fullscreen-button").on("click", function toggleFullScreen() {
        if (
            (document.fullScreenElement !== undefined &&
                document.fullScreenElement === null) ||
            (document.msFullscreenElement !== undefined &&
                document.msFullscreenElement === null) ||
            (document.mozFullScreen !== undefined && !document.mozFullScreen) ||
            (document.webkitIsFullScreen !== undefined &&
                !document.webkitIsFullScreen)
        ) {
            if (document.documentElement.requestFullScreen) {
                document.documentElement.requestFullScreen();
            } else if (document.documentElement.mozRequestFullScreen) {
                document.documentElement.mozRequestFullScreen();
            } else if (document.documentElement.webkitRequestFullScreen) {
                document.documentElement.webkitRequestFullScreen(
                    Element.ALLOW_KEYBOARD_INPUT
                );
            } else if (document.documentElement.msRequestFullscreen) {
                document.documentElement.msRequestFullscreen();
            }
        } else {
            if (document.cancelFullScreen) {
                document.cancelFullScreen();
            } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            } else if (document.webkitCancelFullScreen) {
                document.webkitCancelFullScreen();
            } else if (document.msExitFullscreen) {
                document.msExitFullscreen();
            }
        }
    });
    $(".fullscreen-btn").on("click", function () {
        $(this).toggleClass("active");
    });

    // Preloader
    $(window).on("load", function () {
        $(".preloader").addClass("preloader-deactivate");
    });

    // Burger Menu JS
    $(".burger-menu").on("click", function () {
        $(this).toggleClass("active");
        $(".main-content").toggleClass("hide-sidemenu-area");
        $(".sidebar-menu, .side-menu-area").toggleClass("toggle-sidemenu-area");
        $(".navbar").toggleClass("toggle-navbar-area");
    });
    $(".responsive-burger-menu").on("click", function () {
        $(".responsive-burger-menu").toggleClass("active");
        $(".sidebar-menu, .side-menu-area").toggleClass("active-sidemenu-area");
    });

    // Search Popup JS
    $(".close-btn").on("click", function () {
        $(".search-overlay").fadeOut();
        $(".search-btn").show();
        $(".close-btn").removeClass("active");
    });
    $(".search-btn").on("click", function () {
        $(this).hide();
        $(".search-overlay").fadeIn();
        $(".close-btn").addClass("active");
    });

    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });

    // Performers Slider JS
    $(".performers-slider").owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        dots: false,
        autoplay: true,
        stagePadding: 50,
        responsive: {
            0: {
                items: 1,
                stagePadding: 0,
            },
            375: {
                items: 2,
                stagePadding: 0,
            },
            576: {
                items: 3,
                stagePadding: 0,
            },
            768: {
                items: 4,
                stagePadding: 0,
            },
            1200: {
                items: 3,
                stagePadding: 0,
            },
            1320: {
                items: 4,
                stagePadding: 0,
            },
            1400: {
                items: 4,
            },
            1700: {
                items: 5,
            },
        },
    });

    // Sidebar Active JS
    $(".sidebar-menu ul li").click(function () {
        $("li a").removeClass("active");
        $(this).addClass("active");
    });

    // Count Time JS
    function makeTimer() {
        var endTime = new Date("november  30, 2023 17:00:00 PDT");
        var endTime = Date.parse(endTime) / 1000;
        var now = new Date();
        var now = Date.parse(now) / 1000;
        var timeLeft = endTime - now;
        var days = Math.floor(timeLeft / 86400);
        var hours = Math.floor((timeLeft - days * 86400) / 3600);
        var minutes = Math.floor((timeLeft - days * 86400 - hours * 3600) / 60);
        var seconds = Math.floor(
            timeLeft - days * 86400 - hours * 3600 - minutes * 60
        );
        if (hours < "10") {
            hours = "0" + hours;
        }
        if (minutes < "10") {
            minutes = "0" + minutes;
        }
        if (seconds < "10") {
            seconds = "0" + seconds;
        }
        $("#days").html(days + "<span>Day</span>");
        $("#hours").html(hours + "<span>Hours</span>");
        $("#minutes").html(minutes + "<span>Minutes</span>");
        $("#seconds").html(seconds + "<span>Seconds</span>");

        $("#dayss").html(days + "<span>Day</span>");
        $("#hourss").html(hours + "<span>Hours</span>");
        $("#minutess").html(minutes + "<span>Minutes</span>");
        $("#secondss").html(seconds + "<span>Seconds</span>");

        $("#daysss").html(days + "<span>Day</span>");
        $("#hoursss").html(hours + "<span>Hours</span>");
        $("#minutesss").html(minutes + "<span>Minutes</span>");
        $("#secondsss").html(seconds + "<span>Seconds</span>");
    }
    setInterval(function () {
        makeTimer();
    }, 300);

    // Treeview JS
    let treeview = {
        resetBtnToggle: function () {
            $(".js-treeview")
                .find(".level-add")
                .find("span")
                .removeClass()
                .addClass("bx bx-plus");
            $(".js-treeview").find(".level-add").siblings().removeClass("in");
        },
        addSameLevel: function (target) {
            let ulElm = target.closest("ul");
            let sameLevelCodeASCII = target
                .closest("[data-level]")
                .attr("data-level")
                .charCodeAt(0);
            ulElm.append($("#levelMarkup").html());
            ulElm
                .children("li:last-child")
                .find("[data-level]")
                .attr("data-level", String.fromCharCode(sameLevelCodeASCII));
        },
        addSubLevel: function (target) {
            let liElm = target.closest("li");
            let nextLevelCodeASCII =
                liElm.find("[data-level]").attr("data-level").charCodeAt(0) + 1;
            liElm.children("ul").append($("#levelMarkup").html());
            liElm
                .children("ul")
                .find("[data-level]")
                .attr("data-level", String.fromCharCode(nextLevelCodeASCII));
        },
        removeLevel: function (target) {
            target.closest("li").remove();
        },
    };

    // Treeview Functions
    $(".js-treeview").on("click", ".level-add", function () {
        $(this)
            .find("span")
            .toggleClass("fa-plus")
            .toggleClass("fa-times text-danger");
        $(this).siblings().toggleClass("in");
    });

    // Add same level
    $(".js-treeview").on("click", ".level-same", function () {
        treeview.addSameLevel($(this));
        treeview.resetBtnToggle();
    });

    // Add sub level
    $(".js-treeview").on("click", ".level-sub", function () {
        treeview.addSubLevel($(this));
        treeview.resetBtnToggle();
    });
    // Remove Level
    $(".js-treeview").on("click", ".level-remove", function () {
        treeview.removeLevel($(this));
    });

    // Selected Level
    $(".js-treeview").on("click", ".level-title", function () {
        let isSelected = $(this).closest("[data-level]").hasClass("selected");
        !isSelected &&
            $(this)
                .closest(".js-treeview")
                .find("[data-level]")
                .removeClass("selected");
        $(this).closest("[data-level]").toggleClass("selected");
    });

    try {
        // Sweet Alert
        document.querySelector(".first").addEventListener("click", function () {
            Swal.fire("New Folder");
        });
        document
            .querySelector(".second")
            .addEventListener("click", function () {
                Swal.fire("Upload Your Image", "File Size 100 MB");
            });
        document.querySelector(".third").addEventListener("click", function () {
            Swal.fire("Your File Upload", "le Size 500 MB", "success");
        });
    } catch (err) {}

    // ToolTip Hover JS

    try {
        new jBox("Tooltip", {
            attach: ".tooltip",
        });

        // ToolTip Modal JS
        new jBox("Modal", {
            width: 300,
            height: 100,
            attach: "#myModal",
            title: "My Modal Window",
            content: "<i>Hello there!</i>",
        });

        // ToolTip Confirm JS
        new jBox("Confirm", {
            confirmButton: "Do it!",
            cancelButton: "Nope",
        });

        // ToolTip Notice JS
        /* new jBox('Notice', {
			content: 'Welcome To Joxi!',
			color: 'blue'
		}); */

        // ToolTip Image JS
        new jBox("Image");
    } catch (err) {}

    // TxtEditor JS
    $(document).ready(function () {
        $("#txtEditor").Editor();
    });

    // Dark Mode All
    const darkModeSwitch = document.querySelector("#DarkModeSW");
    darkModeSwitch.addEventListener("change", () => {
        document.querySelector("body").classList.toggle("darkmode-body");
        localStorage.setItem("joxi-darkmode-body", JSON.stringify(!darkmode));
    });
    let darkmode = JSON.parse(localStorage.getItem("joxi-darkmode-body"));
    if (darkmode === null) {
        darkmode = window.matchMedia("(prefers-color-scheme: dark)").matches;
    }
    if (darkmode) {
        document.querySelector("body").classList.add("darkmode-body");
        document.querySelector("#DarkModeSW").checked = "checked";
    }

    // Dark Mode Only Header
    const darkModeSw2itch = document.querySelector("#DarkModeSW2");
    darkModeSw2itch.addEventListener("change", () => {
        document
            .querySelector(".header-area")
            .classList.toggle("darkmode-header");
        localStorage.setItem(
            "joxi-darkmode-header",
            JSON.stringify(!darkmode2)
        );
    });
    let darkmode2 = JSON.parse(localStorage.getItem("joxi-darkmode-header"));
    if (darkmode2 === null) {
        darkmode2 = window.matchMedia("(prefers-color-scheme: dark)").matches;
    }
    if (darkmode2) {
        document.querySelector(".header-area").classList.add("darkmode-header");
        document.querySelector("#DarkModeSW2").checked = "checked";
    }

    // Dark Mode Only Sidebar menu
    const darkModeSw3itch = document.querySelector("#DarkModeSW3");
    darkModeSw3itch.addEventListener("change", () => {
        document
            .querySelector(".sidebar-menu, .side-menu-area")
            .classList.toggle("darkmode-sidebar-menu");
        localStorage.setItem(
            "joxi-darkmode-sidebar-menu",
            JSON.stringify(!darkmode3)
        );
    });
    let darkmode3 = JSON.parse(
        localStorage.getItem("joxi-darkmode-sidebar-menu")
    );
    if (darkmode3 === null) {
        darkmode3 = window.matchMedia("(prefers-color-scheme: dark)").matches;
    }
    if (darkmode3) {
        document
            .querySelector(".sidebar-menu, .side-menu-area")
            .classList.add("darkmode-sidebar-menu");
        document.querySelector("#DarkModeSW3").checked = "checked";
    }
})(jQuery);
