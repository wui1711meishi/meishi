window.onload=function () {

    // 面点师轮播
    let flag=true;
    function move() {
        $('.baker_banner_tiao').children().children().children('.baker_every_introduceN').removeClass('introduceNactive')
        $('.baker_banner_tiao').children().children().children('.baker_every_introduceC').removeClass('introduceCactive')
        $('.baker_banner_tiao').children().children().children('img').removeClass('imgactive');
        $('.baker_banner_tiao').children().eq(3).children().children('img').addClass('imgactive');
        $('.baker_banner_tiao').children().eq(3).children().children('.baker_every_introduceN').addClass('introduceNactive');
        $('.baker_banner_tiao').children().eq(3).children().children('.baker_every_introduceC').addClass('introduceCactive');
        $('.baker_banner_tiao').animate({left:-573},1000,function () {
            $('.baker_banner_tiao').css({"left":"-303px"});
            $('.baker_banner_tiao').append($('.baker_banner_tiao').children().get(0));
            flag=true;
        })
    }
    $('.rightkey').click(function () {
        if(!flag){
            return;
        }
        flag=false;
        move();
    })
    $('.leftkey').click(function () {
        if(!flag){
            return;
        }
        flag=false;
        $('.baker_banner_tiao').children().children().children('.baker_every_introduceN').removeClass('introduceNactive')
        $('.baker_banner_tiao').children().children().children('.baker_every_introduceC').removeClass('introduceCactive')
        $('.baker_banner_tiao').children().children().children('img').removeClass('imgactive');
        $('.baker_banner_tiao').children().eq(1).children().children('img').addClass('imgactive');
        $('.baker_banner_tiao').children().eq(1).children().children('.baker_every_introduceN').addClass('introduceNactive');
        $('.baker_banner_tiao').children().eq(1).children().children('.baker_every_introduceC').addClass('introduceCactive');
        $('.baker_banner_tiao').animate({left:-33},1000,function () {
            $('.baker_banner_tiao').css({"left":"-303px"});
            $('.baker_banner_tiao').prepend($('.baker_banner_tiao').children().get(4));
            flag=true;
        })
    })

    // 产品展示轮播
    let proli=document.querySelectorAll('.show_s_banner_li1');
    let prolbd=document.querySelectorAll('.show_s_bannerlbd > li');
    let probanner=document.querySelector('.show_swiper');
    let n=2;
    function promove() {
        n--;
        if(n<0){
            n=proli.length-1;
        }
        proli.forEach(function (v,i) {
           v.classList.remove('active')
            prolbd[i].classList.remove('show_lbdactive')
        })
        proli[n].classList.add('active');
        prolbd[n].classList.add('show_lbdactive')
    }
    let prot=setInterval(promove,3000);
    probanner.onmouseenter=function () {
        clearInterval(prot);
    }
    probanner.onmouseleave=function () {
        prot=setInterval(promove,3000);
    }
    prolbd.forEach(function (v,i) {
       v.onclick=function () {

           proli.forEach(function (v,i) {
               v.classList.remove('active');
               prolbd[i].classList.remove('show_lbdactive')
           })
           proli[i].classList.add('active');
           this.classList.add('show_lbdactive');

           n=i;
       }
    })
}
