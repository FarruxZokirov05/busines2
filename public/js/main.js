const swiper1 = new Swiper('.ideaslide', {
    // Default parameters
    direction: 'vertical',
     // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next2',
    prevEl: '.swiper-button-prev2',
  },
  slidesPerView: 4,
  spaceBetween: 10,
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 4,
      spaceBetween: 10
    },
    // when window width is >= 480px
    649: {
      slidesPerView: 4,
      spaceBetween: 10
    },
    // when window width is >= 640px
    769: {
      slidesPerView: 5,
      spaceBetween: 15
    },
    1025: {
        slidesPerView: 6,
        spaceBetween: 20
      },
      1281: {
        slidesPerView: 6,
        spaceBetween: 20
      },
      1537: {
        slidesPerView: 6,
        spaceBetween: 30
      }
  }


  });

  const swiper2 = new Swiper('.vacancyslide', {
    // Default parameters
    direction: 'vertical',
     // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next2',
    prevEl: '.swiper-button-prev2',
  },
  slidesPerView: 4,
  spaceBetween: 10,
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 4,
      spaceBetween: 10
    },
    // when window width is >= 480px
    649: {
      slidesPerView: 4,
      spaceBetween: 10
    },
    // when window width is >= 640px
    769: {
      slidesPerView: 5,
      spaceBetween: 15
    },
    1025: {
        slidesPerView: 6,
        spaceBetween: 20
      },
      1281: {
        slidesPerView: 6,
        spaceBetween: 20
      },
      1537: {
        slidesPerView: 6,
        spaceBetween: 30
      }
  }


  });

  filterSelection("1")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filter-content");
  if (c == "1") c = "1";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

vacancyfilter("1")
function vacancyfilter(c) {
  var x, i;
  x = document.getElementsByClassName("filter-content-vacancy");
  if (c == "1") c = "1";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}



const swiper3 = new Swiper('.groupswiper', {
    // Default parameters
    direction: 'horizontal',
     // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next3',
    prevEl: '.swiper-button-prev3',
  },
  slidesPerView: 3,
  spaceBetween: 10,
  breakpoints: {
    // when window width is >= 320px
    320: {
        direction: 'horizontal',
      slidesPerView: 3,
      spaceBetween: 10
    },
    // when window width is >= 480px
    649: {
        direction: 'horizontal',
      slidesPerView: 5,
      spaceBetween: 30
    },
    // when window width is >= 640px
    769: {
      slidesPerView: 5,
      spaceBetween: 15,
      direction: 'vertical',
      
    },
    1025: {
        slidesPerView: 6,
        spaceBetween: 20,
        direction: 'vertical',
      },
      1281: {
        slidesPerView: 6,
        spaceBetween: 20,
        direction: 'vertical',
      },
      1537: {
        slidesPerView: 6,
        spaceBetween: 30,
        direction: 'vertical',
      }
  }


  });


