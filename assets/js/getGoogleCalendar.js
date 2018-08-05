$(document).ready(function(){
  var url = $(".iframe-google-calendar").attr("src");
  console.log(url);

  console.log($(".iframe-google-calendar").contents());
  $(".iframe-google-calendar").contents().find('.st-c').css( "background-color", "#BADA55" );

  $.get(url,function(data){
    var html = jQuery.parseHTML(data.responseText);
    var parsedImg = jQuery(html).find(".thumb>a>img")[0];
    // alert("First character is "+$(parsedImg).attr("alt"));
    // alert("First image url is"+$(parsedImg).attr("src"));

    console.log(data);
    console.log(html);
    console.log(parsedImg);
  });
});