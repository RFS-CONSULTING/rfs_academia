/**
 * Variables
 **/
let mobileMenu = document.getElementById('mobile-menu');
let closeMenu = document.getElementById('close-menu');
let sideBar = document.getElementById('side-bar');
let infoMenu = document.getElementById('info-menu');
let closeInfo = document.getElementById('close-info');
let infoSideBar = document.getElementById('info-sidebar');

/**
 * Event Listener
 **/
// Toggle Side-menu
if(mobileMenu){
    mobileMenu.addEventListener('click' , toggleSidebar);
}
if(closeMenu){
    closeMenu.addEventListener('click' , toggleSidebar);
}
if(sideBar){
    sideBar.children[0].addEventListener('click' , toggleSidebar);
}
if(infoMenu){
    infoMenu.addEventListener('click' , toggleInfoSidebar);
}
if(closeInfo){
    closeInfo.addEventListener('click' , toggleInfoSidebar);
}

/**
 * Functions
 **/
// Sidebar Toggle
function toggleSidebar(){
    if(sideBar.classList.contains('!left-0')){
        sideBar.classList.remove('!left-0' , 'w-full');
        mobileMenu.style.display = 'block';
    }else {
        sideBar.classList.add('!left-0','w-full');
        mobileMenu.style.display = 'none';
    }
}

function toggleInfoSidebar(){
    infoSideBar.classList.toggle('translate-x-full')
}

// Single Preview Carousel
function singlePrevCarousel(className , type = 'slider' , autoplay = 4000){
    let glide = new Glide(`.${className}`, {
        perView: 1,
        type: type,
        autoplay: autoplay,
        hoverpause: true,
        focusAt: 'center',
        rewind: false,
        preventDefaultSwipeY: false
    })

    glide.mount()
}

// Three Preview Carousel
function threePrevCarousel(className , gap = 10){
    let glide = new Glide(`.${className}`, {
        type: 'carousel',
        autoplay: 4000,
        perView: 3,
        gap : gap,
        hoverpause: true,
        keyboard: true,
        breakpoints: {
            768: {
                perView: 2,
                gap: 8
            },
            480: {
                perView: 1,
            }
        }
    })

    glide.mount()
}


// Three Preview Carousel
function partnerLogoPrevCarousel(className){
    let glide = new Glide(`.${className}`, {
        type: 'carousel',
        autoplay: 4000,
        perView: 6,
        focusAt: 1,
        gap: 100,
        keyboard: true,
        breakpoints: {
            768: {
                perView: 4,
            },
            480: {
                perView: 2,
                gap: 80,
            }
        }
    })

    glide.mount()
}

// Gallery Sorting
function gallerySorting(filterBtnSelector , filterItemSelector) {
    const filterBtn = document.querySelector(`.${filterBtnSelector}`).children
    const filterItem = document.querySelector(`.${filterItemSelector}`).children

    for (let i = 0; i < filterBtn.length; i++){
        filterBtn[i].addEventListener('click' , function (){
            for (let j = 0; j < filterBtn.length; j++){
                filterBtn[j].classList.remove('w-full')
                filterBtn[j].children[0].classList.remove('w-full')
            }
            this.children[0].classList.add('w-full')

            let targetData = this.getAttribute('data-target')

            for (let z = 0; z<filterItem.length; z++){
                filterItem[z].classList.remove('block')
                filterItem[z].classList.add('hidden')

                if (filterItem[z].getAttribute('data-item') == targetData || targetData == 'all'){
                    filterItem[z].classList.remove('hidden')
                    filterItem[z].classList.add('block')
                }
            }
        })
    }
}