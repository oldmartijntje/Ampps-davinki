<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div id="fb-root"></div>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v16.0" nonce="i9yt1YVm"></script>
<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>


    <?php
    $time ='It\'s '. (date("h:i", time()));
    date_default_timezone_set("Europe/Amsterdam");
    echo '<h1>meow</h1>';
    echo '<h1>'. $time .'</h1>';   
    echo '<a href="http://twitter.com/share" class="twitter-share-button" data-text="'. $time .'" data-count="vertical" data-url=" " data-counturl="http://google.com">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>';
    ?>
    <?php echo '<ul class="share-buttons" data-source="simplesharingbuttons.com">
  <li><a href="https://twitter.com/intent/tweet?source='. $time .'&text='. $time .'" target="_blank" title="Tweet"><img alt="Tweet" src="images/flat_web_icon_set/inverted/Twitter.png" /></a></li>
  <li><a href="http://www.reddit.com/submit?url='. $time .'&title='. $time .'" target="_blank" title="Submit to Reddit"><img alt="Submit to Reddit" src="images/flat_web_icon_set/inverted/Reddit.png" /></a></li>
  <li><a href="http://wordpress.com/press-this.php?u=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DdQw4w9WgXcQ&quote='. $time .'&s='. $time .'" target="_blank" title="Publish on WordPress"><img alt="Publish on WordPress" src="images/flat_web_icon_set/inverted/Wordpress.png" /></a></li>
  <li><a href="mailto:?subject='. $time .'&body='. $time .'" target="_blank" title="Send email"><img alt="Send email" src="images/flat_web_icon_set/inverted/Email.png" /></a></li>
</ul>'; ?>
    <?php if ((int)date("H", time()) >= 6 && (int)date("H", time()) < 12) : ?>
        <html style="background-image: url('morning.png');">
    <?php endif; ?>
    <?php if ((int)date("H", time()) >= 12 && (int)date("H", time()) < 18) : ?>
        <html style="background-image: url('afternoon.png');">
    <?php endif; ?>
    <?php if ((int)date("H", time()) >= 18) : ?>
        <html style="background-image: url('evening.png');">
    <?php endif; ?>
    <?php if ((int)date("H", time()) < 6) : ?>
        <html style="background-image: url('night.png');">
    <?php endif; ?>
</body>
