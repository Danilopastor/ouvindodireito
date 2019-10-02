$(window).on('load', function () {
    $('#preloader .inner').fadeOut()
    $('#preloader').delay(350).fadeOut('slow');
    $('body').delay(350).css({'overflow': 'visible'})
})
$(function(){
    var btnMenu = $('.menu_top')
    var menu    = $('.navigator')
    var dsn     = $('#dsn-logo')
    var contentMenu = $('.content-menu')
    var buttonSearch = $('#buttonSeach')
    var SeacrhState = false;
    
    btnMenu.click(function(){
        menu.toggleClass('open')
        btnMenu.toggleClass('active')
        setTimeout(function(){
            contentMenu.toggleClass('show')
        },600)
    });
    imgD = $(this).attr('src');
    dsn.on("mouseenter",function(){
        $(this).attr('src', imgD)
    })
    dsn.on("mouseleave",function(){
        $(this).attr('src', imgD)
    })

    buttonSearch.click(function(){
        var searchForm = $('.search-form')
        var sInner = $('.s-inner')
        var InputValue = $('#input-search').val()

        var animacao = function(time = false){
            const delay = (time) ? 500 : 0 
            const sState = (SeacrhState) ? '60px' : '450px'
            setTimeout(function(){
            searchForm.animate({
                width: sState,
            },{
            easing: "linear",
            complete : function(){
                        if(SeacrhState){         
                        sInner.fadeIn(500)
                        }
                   }
            })
        },delay
            )
        }
        
        if(InputValue == '' || !SeacrhState){
            if(SeacrhState) {
                sInner.fadeOut(500, animacao(true))
            }else{
                    animacao()
            }
            SeacrhState = (SeacrhState) ? false : true

        }else{
            SubmitSeach(InputValue)
        }
        document.addEventListener('keydown', function(){

            var InputValue = $('#input-search').val()

            if(event.keyCode == 13 && InputValue.length > 0 && SeacrhState) SubmitSeach(InputValue)
        });

        SubmitSeach = function(InputValue){
            var busca = '%20'; 
            var pathUrl = $('#input-search').attr('action_url');
            // Aqui informamos para alterar todas as ocorrências de "e" 
            var strbusca = eval('/'+busca+'/g'); 
            var uri = pathUrl + encodeURIComponent(InputValue).replace(strbusca,'+'); 
             window.location.href = uri
        }
    })


});