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
    })
    $('#decrease-font').click(function(){
        if(fonte>14){
            fonte--
            $('body').css({'font-size': fonte+'px'});
        }
        if (fontesection > 24){
            fontesection--
            $('section').css({'font-size': fontesection+'px'});
        }
    })

});