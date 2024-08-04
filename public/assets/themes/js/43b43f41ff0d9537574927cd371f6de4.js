// alert( 'Your screen resolution is ' + screen.width + 'x' + screen.height );
const category = document.querySelector(".category");
// const flex_grid = document.querySelector(".flex-row");
function group() {
  category.classList.remove("grid-row");
  category.classList.add("flex-row");
}
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
$(document).ready(function (){
  $(".card ").click(function (){
      var name_product = $(this).find('.name_product').html();
      var description = $(this).find('p').html();
      var image_one = $(this).find('img').attr('src');
      var image_two =$(this).find('img').attr('next_image');


    $('.image_one').attr('src',image_one);
    $('.image_two').attr('src',image_two);
    $('.title_detail_product').html(name_product);
    $('.title_description').html(description);

    $(".page_detail_product").fadeIn(500);
    $(".full_size").fadeIn(500);
  });
    $(".full_size ").click(function (){
        $(".page_detail_product").fadeOut(500);
        $(".full_size").fadeOut(500);
    });
});
