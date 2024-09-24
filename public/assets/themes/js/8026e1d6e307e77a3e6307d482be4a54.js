const searchBar = document.getElementById("searchBar");
const container = document.getElementById("container");
window.onload = function () {

    const foodNames = ["چیزبرگر", "همبرگر", "پیتزا پپرونی", "کباب سنتی", "جوجه کباب", "آبگوشت", "جگر"];
    const randomFood = foodNames[Math.floor(Math.random() * foodNames.length)];
    searchBar.placeholder = `${randomFood} ...`;

    searchBar.addEventListener('blur', function () {
        searchBar.value = null;
    });
};


