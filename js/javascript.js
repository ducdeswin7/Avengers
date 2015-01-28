//PARAMETRAGE DU VIDEO BACKGROUND pour le button pause

document.createElement('video');

var vid = document.getElementById("bgvid");

var pauseButton = document.getElementById("vidpause");

function vidFade() {

vid.classList.add("stopfade");

}

vid.addEventListener('ended', function() {

// only functional if "loop" is removed

vid.pause();

// to capture IE10

vidFade();

});

pauseButton.addEventListener("click", function() {

vid.classList.toggle("stopfade");

if (vid.paused) {

vid.play();

pauseButton.innerHTML = "Pause";

} else {

vid.pause();

 pauseButton.innerHTML = "Paused";

}

})


$("bgvid").prop('muted', true);


//SCROLL STYLE


	var ypos,video;
	function parallex() {
		video = document.getElementById('bgvid');
		ypos = window.pageYOffset;
		video.style.top = ypos * .7+ 'px';
	}
	window.addEventListener('scroll', parallex),false;

//SCROLL TO

$('#scrollButton').ScrollTo('#ynopsish3');

$('a[href^="#"]').click(function(){  
    var the_id = $(this).attr("href");  
  
    $('html, body').animate({  
        scrollTop:$(the_id).offset().top  
    }, 'slow');  
    return false;  
});

});

function juizScrollTo(element){           
    $(element).click(function(){  
        var goscroll = false;  
        var the_hash = $(this).attr("href");  
        var regex = new RegExp("\#(.*)","gi");  
        var the_element = '';  
   
        if(the_hash.match("\#(.+)")) {  
            the_hash = the_hash.replace(regex,"$1");  
   
            if($("#"+the_hash).length>0) {  
                the_element = "#" + the_hash;  
                goscroll = true;  
            }  
            else if($("a[name=" + the_hash + "]").length>0) {  
                the_element = "a[name=" + the_hash + "]";  
                goscroll = true;  
            }  
   
            if(goscroll) {  
                $('html, body').animate({  
                    scrollTop:$(the_element).offset().top  
                }, 'slow');  
                return false;  
            }  
        }  
    });                   
};  
juizScrollTo('a[href^="#"]');  

// transition page
$(function() {

  var $pageContent = $('#page-content');
  
  var loadContent = function(url) {
    
    $pageContent.fadeOut(function() {
      $pageContent.load(url, function() {
        $pageContent.fadeIn();
      });
    });
    
  };
  
  loadContent('index.php?');
  
  $('.page-link').on('click', function(event) {
    
    event.preventDefault();
    loadContent($(this).attr('href'));
    
  });

