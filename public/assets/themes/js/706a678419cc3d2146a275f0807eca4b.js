let swiper = new Swiper(".CategorySwiper", {
    slidesPerView: 5,
    spaceBetween: 20,
});

let category_product = new Swiper(".category_product", {
    spaceBetween: 0,
    speed: 5000,
    breakpoints: {

        320: {
            slidesPerView: 4,
            spaceBetween: 0
        },

        480: {
            slidesPerView: 5,
            spaceBetween: 0
        },

        640: {
            slidesPerView: 6,
            spaceBetween: 0
        },

        900: {
            slidesPerView: 10,
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
function toggle() {
    category.classList.toggle("grid-row");
    category.classList.toggle("flex-row");
    document.querySelector(".icon_toggle").classList.toggle("bi-collection");
    document.querySelector(".icon_toggle").classList.toggle("bi-list");
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
        let description = $(this).find('p').attr('value');
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

        $(".page_detail_product").fadeIn(500);
        $(".full_size").fadeIn(500);
    });
    $(".full_size ").click(function () {
        $(".page_detail_product").fadeOut(500);
        $(".full_size").fadeOut(500);
    });

    function show_all_item(){
        $(".card").each(function() {
                $(this).show();
        });
    }






    /////////filter category

    $(".item_category").click(function (){
        $("#show_note").html("");
        show_all_item();
        let category_id = $(this).attr('category');
        let found = false;
        $(".card").each(function() {
            if($(this).attr('category') != category_id){
                $(this).fadeOut(0);
            }else{
                found= true;
            }
        });
        if(found == false){
            $("#show_note").html("محصولی برای این دسته بندی پیدا نشد");
        }
    });
});

