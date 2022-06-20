$(document).ready(function(){
    let fonte = 14;
    let fontesection = 24;
    $('#increase-font').click(function(){
        if(fonte<26){
            fonte++
            $('body').css({'font-size': fonte+'px'});
        }
        if (fontesection < 34){
            fontesection++
            $('section').css({'font-size': fontesection+'px'});
        }

        if (fontenav < 34){
            fontenav++
            $('nav-list').css({'font-size': fontenav+'px'});
        }
    })
    $('#decrease-font').click(function(){
        if(fonte>14){
            fonte--
            $('body').css({'font-size': fonte+'px'});
        }
        if (fontesection > 18){
            fontesection--
            $('section').css({'font-size': fontesection+'px'});
        }
        if (fontenav > 18){
            fontenav--
            $('nav-list').css({'font-size': fontenav+'px'});
        }
    })

});