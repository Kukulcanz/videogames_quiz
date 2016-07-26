$('.risposteContainer>div.row').hover(onMouseFocus,onMouseLeave);

function onMouseFocus(){
    $(this).find('div.bottoneRisposta>button.btnTestoBianco').css({borderColor:'black',color:'black' });
};

function onMouseLeave(){
    $(this).find('div.bottoneRisposta>button.btnTestoBianco').css({borderColor:'rgba(240, 240, 245,0.3)',color:'white' });
};

$('.btnTestoBianco').on('mouseleave',function(){
   $(this).css('backgroundColor','inherit'); 
});



