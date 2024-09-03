// SWIPER-START
var swiper = new Swiper('.swiper-container', {
  slidesPerView: 8,
  breakpoints: {
    1: {
      slidesPerView: 2,
    },
    300: {
      slidesPerView: 2,
    },
    450: {
      slidesPerView: 3,
    },
    650: {
      slidesPerView: 4,
    },
    900: {
      slidesPerView: 5
    },
    1200: {
      slidesPerView: 6,
    },
    1500: {
      slidesPerView: 8
    }
  },
  spaceBetween: 10,
  navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
  },
  grabCursor: true,
});


// searchbox 
const mobileSearchButton = document.querySelector('.mobile-search-button');
const dropdownSearch = document.querySelector('.dropdown-search');

mobileSearchButton.addEventListener('click', () => {
    dropdownSearch.style.display = 'block';
});

dropdownSearch.addEventListener('click', (event) => {
    if (event.target === dropdownSearch) {
        dropdownSearch.style.display = 'none';
    }
});

// product dropdown

const productDropdown = document.querySelector(".product-dropdown")

document.querySelectorAll(".product-card").forEach(product=> {
  product.addEventListener("click", () => {
    productDropdown.style.display = "block";
  })
})

productDropdown.addEventListener("click", (evevnt)=> {
  if (event.target === productDropdown) {
    productDropdown.style.display = "none";
  }
})