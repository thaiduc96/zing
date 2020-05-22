$(document).ready(function(){

    $(".viewMoreMenu").click(function () {
        $(".jsCategoryPopup").toggleClass("active");
    })

    var Carousel = {
        body : $(".book-content-slide"),
        context : $(".js-carouselCtx"),
        list: $(".book-content-slide"),
        currentX : 0,
        startX: 0,
        currentItem : 1,
        isScrolling : false,
        isNeedToBack : false
      }
    
    $(".jsClickBtnArrows").click(function () {
        if ($(this).hasClass("book-arrows-right")) {
            Carousel.currentItem+=5;
          } else {
            Carousel.currentItem-=5;
          }
          scrollCarousel(Carousel.currentItem);
    })
      
    function scrollCarousel(index) {
        Carousel.isScrolling = true;
        var carouselItem = $("#carousel" + index);
        if (carouselItem.length == 0) {
          Carousel.isScrolling = false;
          return;
        }
        if (carouselItem.hasClass('Cloned')) {
          index = carouselItem.attr('data-index');
          var realItem = $('#carousel'+index);
          Carousel.currentItem = index;
        }
        console.log(carouselItem.position().left);
        Carousel.list.animate(
          {
            left: 0 - carouselItem.position().left
          },
          400
        );
      }
});