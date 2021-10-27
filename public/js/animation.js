window.addEventListener("load", () => {

    function isScrolledIntoView(elem) {
        var docViewTop = window.pageYOffset;
        var docViewBottom = docViewTop + window.innerHeight;

        var elemTop = elem.offsetTop;
        var elemBottom = elemTop + elem.offsetHeight;

        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }

    function isScrollToScreenBase(elem) {
        var screenHeight = window.screen.availHeight;
        var elemTop = elem.getBoundingClientRect().top
        if ((elemTop <= screenHeight) && (elemTop >= 0)) {
            return true;
        }
        return false;

    }

    function isScrollToView(elem, offset = 0) {
        var docViewTop = window.pageYOffset;
        var sectionTop = elem.offsetTop + offset;
        if (docViewTop >= sectionTop) {
            return true;
        }
        return false;
    }

    //  function scroll out of view
    function isScrollOutOfView(elem, offset = 0) {
        var docViewTop = window.pageYOffset;
        var sectionBottom = elem.offsetTop + elem.offsetHeight - offset;
        if (docViewTop < sectionBottom) {
            return true;
        }
        return false;
    }


    function changeActiveLink(elem) {
        var id = elem.getAttribute("id");
        var link = document.querySelector(`nav div a[href="#${id}"]`);
        link?.children[0]?.classList.remove('invisible');

        if (isScrollToView(elem, -300) && isScrollOutOfView(elem, -300)) {
            link?.children[0]?.classList.remove('invisible');
        } else {
            link?.children[0]?.classList.add('invisible');
        }
    }

    function changeNavBarBackground(elem) {
        const header = document.querySelector('.fixed');
        const headerHeight = header.getBoundingClientRect().height;
        const scrollPosition = window.scrollY;
        if (scrollPosition > headerHeight) {
            header.classList.add('bg-white');
        } else {
            header.classList.remove('bg-white');
        }
    }

    function animate(elem, animation) {
        elem.classList.add(animation);
    }

    // Event Listeners
    window.addEventListener("scroll", () => {
        changeNavBarBackground();

        const sections = document.querySelectorAll('section');
        sections.forEach(section => {
            changeActiveLink(section);
            if (isScrollToScreenBase(section)) {
                animate(section, 'animate__fadeInUpBig');
            }
        });

    });





});
