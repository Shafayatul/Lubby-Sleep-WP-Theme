 jQuery.fn.extend({
  toggleOwl: function(selector, options, destroy){
    return this.each(function(){
      $(this).find(selector).filter(function(){
        return $(this).parent().is(':visible');
      }).owlCarousel(options);
      
      $(this).on('shown.bs.tab', function(event){
        var target = $(event.target.getAttribute('href')).find(selector);
        if(!target.data('owlCarousel')){
          var owl = target.owlCarousel(options).data("owlCarousel");
        }
      });
      if(destroy === true){
        $(this).on('hide.bs.tab', function(event){
          var target = $(event.target.getAttribute('href')).find(selector);
          if(target.data('owl.carousel')){
            target.data('owl.carousel').destroy();
          }
        });        
      }
    });
  }
});

jQuery(function($) { 
  $('.toggleOwl').toggleOwl(' #home .owl-carousel', {
   loop: true,
    margin: 10,
    rewindNav : false,
    pagination : false, 
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: true
      },
      600: {
        items: 3,
        nav: false
      },
      1000: {
        items: 4,
        nav: true,
        loop: false,
        margin: 20
      }
    } 

  });

  $('.toggleOwl').toggleOwl('.owl-carousel.style2', {
    loop: true,
    margin: 10,
    rewindNav : false,
    pagination : false, 
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: true
      },
      600: {
        items: 3,
        nav: false
      },
      1000: {
        items: 4,
        nav: true,
        loop: false,
        margin: 20
      }
    } 

  });
  $('.toggleOwl').toggleOwl('.owl-carousel.style3', {
    loop: true,
    margin: 10,
     pagination : false,    
    nav: false,
    rewindNav : false,
    pagination : false, 
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: true
      },
      600: {
        items: 3,
        nav: false
      },
      1000: {
        items: 4,
        nav: true,
        loop: false,
        margin: 20
      }
    }
  });
   $('.toggleOwl').toggleOwl('.owl-carousel.style5', {
      loop: true,
    margin: 10,
     pagination : false,    
    nav: false,
    rewindNav : false,
    pagination : false, 
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: true
      },
      600: {
        items: 3,
        nav: false
      },
      1000: {
        items: 4,
        nav: true,
        loop: false,
        margin: 20
      }
    }
         
  });
   // Custom Navigation Events 
  
 $(this).find('.block-header__group').on('click', function(event) {
                const block = $(this).closest('.block-products-carousel');

                event.preventDefault();

                if ($(this).is('.block-header__group--active')) {
                    return;
                }

                cancelPreviousTabChange();

                block.addClass('block-products-carousel--loading');
                $(this).closest('.block-header__groups-list').find('.block-header__group--active').removeClass('block-header__group--active');
                $(this).addClass('block-header__group--active');

                // timeout ONLY_FOR_DEMO! you can replace it with an ajax request
                let timer;
                timer = setTimeout(function() {
                    let items = block.find('.owl-carousel .owl-item:not(".cloned") .block-products-carousel__column');

                    /*** this is ONLY_FOR_DEMO! / start */
                    /**/ const itemsArray = items.get();
                    /**/ const newItemsArray = [];
                    /**/
                    /**/ while (itemsArray.length > 0) {
                    /**/     const randomIndex = Math.floor(Math.random() * itemsArray.length);
                    /**/     const randomItem = itemsArray.splice(randomIndex, 1)[0];
                    /**/
                    /**/     newItemsArray.push(randomItem);
                    /**/ }
                    /**/ items = $(newItemsArray);
                    /*** this is ONLY_FOR_DEMO! / end */

                    block.find('.owl-carousel')
                        .trigger('replace.owl.carousel', [items])
                        .trigger('refresh.owl.carousel')
                        .trigger('to.owl.carousel', [0, 0]);

                    $('.view', block).on('click', function() {
                        quickview.clickHandler.apply(this, arguments);
                    });

                    block.removeClass('block-products-carousel--loading');
                }, 1000);
                cancelPreviousTabChange = function() {
                    // timeout ONLY_FOR_DEMO!
                    clearTimeout(timer);
                    cancelPreviousTabChange = function() {};
                };
            });


    $(this).find('.block-header__arrow--left').on('click', function() {
      owl.trigger('prev.owl.carousel', [500]);
  });
  $(this).find('.block-header__arrow--right').on('click', function() {
      owl.trigger('next.owl.carousel', [500]);
  });

 
});
