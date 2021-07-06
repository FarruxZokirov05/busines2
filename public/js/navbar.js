let section = document.getElementById('home');
let menuArea1 = document.getElementById('mySidenav');
const sections = document.querySelectorAll('section');
const navLi = document.querySelectorAll('.navbar-menu a');
        
if(section){
            window.addEventListener("scroll", function () {
                
                
                    if (window.pageYOffset > 400) {
                        menuArea1.classList.add("hide-menu");
                        
                    } else {
                        menuArea1.classList.remove("hide-menu");
                    }
                
            });
            } else{
                menuArea1.classList.add("hide-menu");
            }
    



window.addEventListener('scroll',()=>{
    let current = '';
    sections.forEach(section => {
        const sectionTop =section.offsetTop;
        const sectionHeight = section.clientHeight;
        if(pageYOffset >= (sectionTop - sectionHeight / 3)){
            current =section.getAttribute('id');
        }
        
    });
    navLi.forEach( a =>{
        a.classList.remove('active');
        if(a.classList.contains(current)){
            a.classList.add('active')
        }
    })
})


$(document).ready(function(){
    $("a").on('click', function(event) {
  
      if (this.hash !== "") {
        event.preventDefault();
  
        var hash = this.hash;
  
         $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){
  
          window.location.hash = hash;
        });
      } 
    });
  });


