changeIcon =(icon) => icon.classList.toggle('fa-times')



$('.owl-carousel').owlCarousel({
        loop:true,
        margin:0,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:3,
                nav:true,
                loop:false
            }
        }
    });


    // const jerry=document.getElementsByClassName('accordion_content');
    // for(i=0; i<jerry.length; i++){
    //     jerry[i].addEventListener('click', function(){
    //         this.classList.toggle('active')
    //     })
    // };

    // let accordion=document.querySelectorAll(".accordion .accordion_content");
    // accordion.forEach((acco) =>{
    //     acco.onclick = () =>{
    //         accordion.forEach((subcontent) =>{
    //             subcontent.classList.remove("active")
    //         });
    //         acco.classList.add("active");
    //     }
        
    // });


    // const accord=document.getElementsByClassName('navbar-toggler');{
    //     this.onclick =() =>{
    //         accord.foreach((subcontent) =>{
    //             subcontent.classList.remove("active");
    //         });
    //     }
    //     accord.addEventListener('click', function(){
    //         this.classList.toggle('active')
    // })
    // 


    // let jerry=changeIcons("Icon")
    // Icon.classList.toggle("fa-times")