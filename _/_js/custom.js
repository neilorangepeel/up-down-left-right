(function($){

    $(document).ready(function (){
    
      var $comments_btn = $('#comments_btn'),
          $comments_wrap = $('#comments_wrap');

      $comments_btn.click(function(e) {
        e.preventDefault();
        $comments_wrap.toggleClass('open-comments pulse');
      });

      var $menu = $('#menu'),
          $menulink = $('.navicon');

      $menulink.click(function(e) {
        e.preventDefault();
        $menulink.toggleClass('active');
        $menu.toggleClass('active');
      });

      $(".main").fitVids(); 

    });

})(window.jQuery);
