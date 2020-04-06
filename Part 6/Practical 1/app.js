const down=document.querySelector('#down_btn');
down.addEventListener('click',()=>{
    $(function(){
        $('#slide-down').slideDown(2500);
    })
});

const up=document.querySelector('#up_btn');
up.addEventListener('click',()=>{
    $(function(){
        $('#slide-up').slideUp(2500);
    })
});

const show=document.querySelector('#show_btn');
show.addEventListener('click',()=>{
    $(function(){
        $('#show').show(2500);
    });
});

const hide=document.querySelector('#hide_btn');
hide.addEventListener('click',()=>{
    $(function(){
        $('#hide').hide(2500);
    });
});

const toggle=document.querySelector('#toggle_btn');
toggle.addEventListener('click',()=>{
    $(function(){
        $('#toggle').toggle(2500);
    });
});

const stop = document.querySelector('#stop_btn');
stop.addEventListener('click',()=>{
    $(function() {
        $('#slide-down').stop(true);
        $('#slide-up').stop(true);
    
        $('#show').stop(true);
        $('#hide').stop(true);
    
        $('#toggle').stop(true);
    });
});

/*const ani1 = () => {
    $(function() {
        $('#slide-down').slideDown(2500);
        $('#slide-up').slideUp(5000);
    
        $('#show').show(5000);
        $('#hide').hide(5000);
    
        $('#toggle').toggle(5000);
    });
    
    ani2();
}

const ani2 = () => {
    $(function() {
        $('#slide-down').slideUp(2500);
        $('#slide-up').slideDown(5000);
    
        $('#show').hide(5000);
        $('#hide').show(5000);
    });
    ani1();
}*/



