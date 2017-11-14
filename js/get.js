

$(document).ready(function() {
    $('.jqzoom').jqzoom({
        zoomType: 'standard',
        lens:true,
        preloadimages: true,
        alwaysOn:false
    });
});

$(document).ready(function() {
    $("select").selectBox();
});

$(document).ready(function() {
    $('#wrapper_tab a').click(function() {
        if ($(this).attr('class') != $('#wrapper_tab').attr('class') ) {
            $('#wrapper_tab').attr('class',$(this).attr('class'));
        }
        return false;
    });
});

$(function() {
  $('#list_product').carouFredSel({
    prev: '#prev_c1',
    next: '#next_c1',
    auto: false
  });
      $('#list_banners').carouFredSel({
    prev: '#ban_prev',
    next: '#ban_next',
    scroll: 1,
    auto: false
  });
  $('#thumblist').carouFredSel({
    prev: '#img_prev',
    next: '#img_next',
    scroll: 1,
    auto: false,
    circular: false,
  });
  $(window).resize();
});

   $(document).ready(function(){
      $("button").click(function(){
         $(this).addClass('click')
      });
   })

  $(function () { $('.popover-show').popover('show');});
  $(function () { $('.popover-hide').popover('hide');});
  $(function () { $('.popover-destroy').popover('destroy');});
  $(function () { $('.popover-toggle').popover('toggle');});
 $(function () { $(".popover-options a").popover({html : true });});
