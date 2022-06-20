var me = {};
me.avatar = "https://lh6.googleusercontent.com/-lr2nyjhhjXw/AAAAAAAAAAI/AAAAAAAARmE/MdtfUmC0M4s/photo.jpg?sz=48";

var you = {};
you.avatar = "https://a11.t26.net/taringa/avatares/9/1/2/F/7/8/Demon_King1/48x48_5C5.jpg";

function formatAMPM(date) {
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var ampm = hours >= 12 ? 'PM' : 'AM';
    hours = hours % 12;
    hours = hours ? hours : 12; // the hour '0' should be '12'
    minutes = minutes < 10 ? '0'+minutes : minutes;
    var strTime = hours + ':' + minutes + ' ' + ampm;
    return strTime;
}            

//-- No use time. It is a javaScript effect.
function insertChat(who, text, time){
    
    if (time === undefined){
        time = 0;
    }
    var control = "";
    var date = formatAMPM(new Date());
    
    if (who == "me"){
        control =
        '<li style="    margin-right: 1rem;">' +
        '<div class="msj-rta macro">' +
            '<div class="">' +
                '<p class="my-auto px-2 c-white">'+ text +'</p>' +
                '<div class="d-flex">' +
                    '<p class="ml-0 mr-auto px-2 c-white"><small>'+date+'</small></p>' +
                '</div>' +
            '</div>' +
        '<div><img class="rounded-circle" style="width: 35px; height: 35px;" src="'+you.avatar+'" /></div>   ' +                       
    '</li>';            
    }else{
        control =  
                    '<li >' +
                    '<div class="msj macro">' +
                    '<div><img class="rounded-circle" style="width: 35px; height: 35px;" src="'+ me.avatar +'" /></div>' +
                        '<div class="d-flex flex-column px-3">' +
                            '<p class="my-auto">'+ text +'</p>' +
                            '<div class="d-flex">' +
                                '<p class="ml-auto mr-0"><small>'+date+'</small></p>' +
                            '</div>' +
                        '</div>' +
                    '</div>' +
                    '</li>';   
    }
    setTimeout(
        function(){                        
            $("#mess").append(control).scrollTop($("#mess").prop('scrollHeight'));
        }, time);
        // window.setInterval(function() {
        //     var elem = document.getElementById('mess');
        //     elem.scrollTop = elem.scrollHeight;
        //   }, 5000);
    
}

function resetChat(){
    $("#mess").empty();
}

$("#send_messenge").on("keydown", function(e){
    if (e.which == 13){
        var text = $(this).val();
        if (text !== ""){
            insertChat("me", text);              
            $(this).val('');
        }
    }
});

$('body > div > div > div:nth-child(2) > span').click(function(){
    $(".mytext").trigger({type: 'keydown', which: 13, keyCode: 13});
})

//-- Clear Chat
resetChat();

//-- Print Messages
// insertChat("me", "Hello Tom...", 0);  
// insertChat("you", "Hi, Pablo", 1500);
// insertChat("me", "What would you like to talk about today?", 3500);
// insertChat("you", "Tell me a joke",7000);
// insertChat("me", "Spaceman: Computer! Computer! Do we bring battery?!", 9500);
// insertChat("you", "LOL", 12000);


//-- NOTE: No use time on insertChat.