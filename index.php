<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />



<style type="text/css">
    body {
      margin-top: 1.0em;
      background-color: #000000;
      font-family: Helvetica, Arial, FreeSans, san-serif;
      color: #ffffff;
    }
    #container {
      margin: 0 auto;
      width: 700px;
    }
    h1 { font-size: 3.8em; color: #ffffff; margin-bottom: 3px; }
    h1 .small { font-size: 0.4em; }
    h1 a { text-decoration: none }
    h2 { font-size: 1.5em; color: #ffffff; }
    h3 { text-align: center; color: #ffffff; }
    a { color: #ffffff; }
    .description { font-size: 1.2em; margin-bottom: 30px; margin-top: 30px; font-style: italic;}
    .download { float: right; }
    pre { background: #000; color: #fff; padding: 15px;}
    hr { border: 0; width: 80%; border-bottom: 1px solid #aaa}
    .footer { text-align:center; padding-top:30px; font-style: italic; }
	
	.instagram-placeholder {
		float: left;	
	}
	
  </style>

<script type="text/javascript" async="" src="http://api.flattr.com/js/0.6/load.js?mode=auto"></script>
<script src="js/jquery.js"></script>
<script src="js/jquery.instagram.js"></script>

<script>
$(document).ready(function() {
  
  

  var insta_container = $(".instagram")
  , insta_next_url

  insta_container.instagram({
      hash: 'yopintolima'
    , clientId : 'baee48560b984845974f6b85a07bf7d9'
    , show : 20
    , onComplete : function (photos, data) {
      insta_next_url = data.pagination.next_url
    }
  })

  $('button').on('click', function(){
    var 
      button = $(this)
    , text = button.text()

    if (button.text() != 'Loading…'){
      button.text('Loading…')
      insta_container.instagram({
          next_url : insta_next_url
        , show : 20
        , onComplete : function(photos, data) {
          insta_next_url = data.pagination.next_url
          button.text(text)
        }
      })
    }       
  }) 
});


</script>

<title>Jquery Instagram</title>

</head>

<body>

<div class="instagram tag"></div>

<div style="clear:both;"></div>
<button>Load</button>


</body>
</html>
