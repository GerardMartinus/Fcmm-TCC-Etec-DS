$(document).ready(function(){
    let fonteP = 20;
    let fontesection = 20;
    let h1 = 60;
    let h3 = 30;
    let footer = 20;
    let a = 16;
    let socials = 1.1;
    $('#increase-font').click(function(){
        if (fontesection < 34){
            fontesection++
            $('section').css({'font-size': fontesection+'px'});
        }

        if (fonteP < 40){
            fonteP ++
            $('p').css({'font-size': fonteP+'px'});
        }

        if (h1 < 80){
            h1++
            $('#home-content h1').css({'font-size': h1 + 'px'})
        }

        if (h1 < 60){
            h1++
            $('#home-content h3').css({'font-size': h1 + 'px'})
        }

        if (a < 32){
            a ++;
            $('.nav-list a').css({'font-size': a + 'px'})
        }
        
        if(footer < 40){
            footer++
            $('footer h3').css({'font-size': footer + 'px'})
        }

        if (socials < 2.0){
            socials = socials + 0.1
            $('.socials').css({'font-size': socials + 'rem'})
        }

    })
    $('#decrease-font').click(function(){
        if (fontesection > 18){
            fontesection--
            $('section').css({'font-size': fontesection+'px'});
        }

        if (fonteP > 20){
            fonteP --
            $('p').css({'font-size': fonteP+'px'});
        }

        if (h1 > 60){
            h1--
            $('#home-content h1').css({'font-size': h1 + 'px'})
        }

        if(footer > 20){
            footer--
            $('footer h3').css({'font-size': footer + 'px'})
        }

        if (a > 16){
            a --;
            $('.nav-list a').css({'font-size': a + 'px'})
        }

        if (socials > 1.0){
            socials = socials - 0.1
            $('.socials').css({'font-size': socials + 'rem'})
        }



    })

});