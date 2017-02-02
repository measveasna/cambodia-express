$(" #content #base-slides > div:gt(0)").hide();
setInterval(function() { 
  $('#base-slides > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#base-slides');
},  3000);
