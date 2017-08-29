jQuery(function($) {

    var $box = $('.brand-box');
    var $arrow = $('.brand-box img');

    $box.mouseenter(function(){
      var imageArrow = $(this).find("img");
      var arrowUrl = imageArrow.attr('src').replace(/\.svg/, '_hover.svg');
      imageArrow.attr('src', arrowUrl);
    });
    $box.mouseleave(function(){
      var imageArrow = $(this).find("img");
      var oldArrowUrl = imageArrow.attr('src').replace(/\_hover.svg/, '.svg');
      imageArrow.attr('src', oldArrowUrl);
    });

    // see the work
    function seeWork(){
      var $diamond = $('.see-work img');
      var $intDiamond = $('.see-work-page img');

      $diamond.mouseenter(function(){
        var seeWork = $diamond.attr('src').replace(/\.png/, '_hover.png');
        $diamond.attr('src', seeWork);
      });

      $diamond.mouseleave(function(){
        var oldSeeWork = $diamond.attr('src').replace(/\_hover.png/, '.png');
        $diamond.attr('src', oldSeeWork);
      });

      $intDiamond.mouseenter(function(){
        var seeWorkInt = $intDiamond.attr('src').replace(/\_hover.png/, '.png');
        $intDiamond.attr('src', seeWorkInt);
      });

      $intDiamond.mouseleave(function(){
        var oldSeeWorkInt = $intDiamond.attr('src').replace(/\.png/, '_hover.png');
        $intDiamond.attr('src', oldSeeWorkInt);
      });

    }
    seeWork();

});
