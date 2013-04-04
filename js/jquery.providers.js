jQuery(function() {

   // Video providers
   var videoProviders = [
      'funnyordie.com/videos/',
      'collegehumor.com/video/',
      'metacafe.com/watch/',
      'blip.tv/',
      'hulu.com/watch/'
   ];

   // Audio providers
   var audioProviders = [
      'soundcloud.com/',
      'mixcloud.com/'
   ];

   // Image providers
   var imageProviders = [
      'flickr.com/photos/',
      'flic.kr/p/',
      'instagram.com/p/',
      'instagr.am/p/',
      '500px.com/photo/'
   ];

   // Rich providers
   var richProviders = [
      'deviantart.com/'
   ];

   // Embed magic
   $.each(videoProviders.concat(audioProviders, imageProviders, richProviders), function(index, value) {
      var embedable = $('.Message').find('a[href*="' + value + '"]');
      embedable.livequery(function() {
         if ($(this).parents('.oembedall-container').length == false) {
            $(this).oembed();
         } else {
            return false;
         };
      });
   });

});