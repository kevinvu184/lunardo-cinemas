// Navigation Programming
//default value when first opening webpage without scrolling event generated
var defaultSections = document.getElementsByTagName("main")[0].getElementsByTagName("section");
var defaultNavLinks = document.getElementsByClassName("nav-content");

if (window.scrollY <= defaultSections[0].offsetTop || (window.scrollY + 80 < defaultSections[1].offsetTop && window.scrollY + 80 >= defaultSections[0].offsetTop)) {
    defaultNavLinks[0].classList.add('active');
} else if (window.scrollY + 80 < defaultSections[2].offsetTop && window.scrollY + 80 >= defaultSections[1].offsetTop) {
    defaultNavLinks[1].classList.add('active');

} else if (window.scrollY + 80 < defaultSections[3].offsetTop && window.scrollY + 80 >= defaultSections[2].offsetTop) {
    defaultNavLinks[2].classList.add('active');
} else {
    defaultNavLinks[3].classList.add('active');
}

//scrolling event generated from now on
window.onscroll = function() {

    var sections = document.getElementsByTagName("main")[0].getElementsByTagName("section");
    var navLinks = document.getElementsByClassName("nav-content");

    if (window.scrollY <= sections[0].offsetTop) {
        navLinks[0].classList.add('active');
    } else {
        var n = -1;
        while (n < sections.length - 1 && sections[n + 1].offsetTop <= window.scrollY + 80) {
            n++;
        }
        for (var a = 0; a < sections.length; ++a) {
            navLinks[a].classList.remove('active');
        }

        if (n >= 0) {
            navLinks[n].classList.add('active');
        }
    }

}
//End of Navigation Programming