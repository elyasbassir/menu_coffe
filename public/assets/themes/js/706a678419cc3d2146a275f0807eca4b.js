let swiper = new Swiper(".CategorySwiper", {
    slidesPerView: 5,
    spaceBetween: 20,
});

let category_product = new Swiper(".category_product", {
    spaceBetween: 0,
    freeMode: true,
    speed: 5000,
    autoplay: {
        delay: 1,
        pauseOnMouseEnter: true,
        disableOnInteraction: false,
        waitForTransition: true,
        stopOnLastSlide: false,

    },
    breakpoints: {

        320: {
            slidesPerView: 3,
            spaceBetween: 0
        },

        480: {
            slidesPerView: 4,
            spaceBetween: 0
        },

        640: {
            slidesPerView: 5,
            spaceBetween: 0
        },

        900: {
            slidesPerView: 6,
            spaceBetween: 0
        }
    }
});

let slider_image_product = new Swiper('.slider_image_product', {
    loop: true,
    spaceBetween: 50,
    speed: 1000,
    // autoplay: {
    //   delay: 3000,
    // },
    effect: 'coverflow',
    slidesPerView: 3,
    breakpoints: {
        '300': {
            slidesPerView: 1
        },
        '500': {
            slidesPerView: 2,
        },
        '900': {
            slidesPerView: 3,
        },
    },
    coverflowEffect: {
        rotate: 0,
        stretch: 80,
        depth: 200,
        modifier: 1,
        slideShadows: false,
    }
})




const category = document.querySelector(".category");

// const flex_grid = document.querySelector(".flex-row");
function group() {
    category.classList.remove("grid-row");
    category.classList.add("flex-row");
}
<<<<<<< Updated upstream
// function list() {
//     category.classList.toggle("flex-row");
//     category.classList.toggle("grid-row");
// }

// function list() {
//   // Toggling the layout between flex-row and grid-row
//   category.classList.toggle("flex-row");
//   category.classList.toggle("grid-row");

//   // Get the icon element
//   const icon = document.getElementById("icon");

//   // Check if the current layout is list (flex-row) or grid (grid-row)
//   if (category.classList.contains("flex-row")) {
//       icon.textContent = '📋'; // List icon
//   } else {
//       icon.textContent = '🔳'; // Grid icon
//   }
// }

function list() {
    // Toggle the layout between flex-row and grid-row
    const category = document.querySelector(".category");
    category.classList.toggle("flex-row");
    category.classList.toggle("grid-row");

    // Get the icon element inside the button
    const icon = document.querySelector(".category_search .btn i");

    // Toggle the icon between list and grid
    if (category.classList.contains("flex-row")) {
        icon.classList.remove("bi-collection"); // Remove the grid icon
        icon.classList.add("bi-list"); // Add the list icon
    } else {
        icon.classList.remove("bi-list"); // Remove the list icon
        icon.classList.add("bi-collection"); // Add the grid icon
    }
}

function search() {
    let filter = document.getElementById("searchBox").value.toUpperCase();
    let item = document.querySelectorAll(".food");
    let l = document.getElementsByTagName("h5");

    for (var i = 0; i <= l.length; i++) {
        let a = item[i].getElementsByTagName("h5")[0];

        let value = a.innerHTML || a.innerText || a.textContent;

        if (value.toUpperCase().indexOf(filter) > -1) {
            item[i].style.opacity = 1;
            item[i].style.position = "relative";
        } else {
            item[i].style.opacity = 0;
            item[i].style.position = "fixed";
        }
    }
}

let pause = false;
$(document).ready(function () {
    $(".card ").click(function () {
        let name_product = $(this).find(".name_product").html();
        let description = $(this).find("p").html();
        let image_one = $(this).find("img").attr("src");
        let image_two = $(this).find("img").attr("next_image");

        $(".image_one").attr("src", image_one);
        $(".image_two").attr("src", image_two);
        $(".title_detail_product").html(name_product);
        $(".title_description").html(description);

=======

function list() {
    category.classList.remove("flex-row");
    category.classList.add("grid-row");
}

function search() {
    let filter = document.getElementById("searchBox").value.toUpperCase();
    let item = document.querySelectorAll(".food");
    let l = document.getElementsByTagName("h5");

    for (var i = 0; i <= l.length; i++) {
        let a = item[i].getElementsByTagName("h5")[0];

        let value = a.innerHTML || a.innerText || a.textContent;

        if (value.toUpperCase().indexOf(filter) > -1) {
            item[i].style.opacity = 1;
            item[i].style.position = "relative";
        } else {
            item[i].style.opacity = 0;
            item[i].style.position = "fixed";
        }
    }
}

var pause = false;
$(document).ready(function () {
    $(".card ").click(function () {
        let name_product = $(this).find('.name_product').html();
        let description = $(this).find('p').html();
        let image = $(this).find('img');
        let image_one = image.attr('src');
        let image_two = image.attr('next_image');
        let video = image.attr('video_address');
        if(image_two == ""){
            image_two ="/assets/themes/images/not_found.jpg";
        }
        $('.image_one').attr('src', image_one);
        $('.image_two').attr('src', image_two);
        $('.title_detail_product').html(name_product);
        $('.title_description').html(description);
        $('#video_product').attr('src', video);

>>>>>>> Stashed changes
        $(".page_detail_product").fadeIn(500);
        $(".full_size").fadeIn(500);
    });
    $(".full_size ").click(function () {
        $(".page_detail_product").fadeOut(500);
        $(".full_size").fadeOut(500);
    });
});

