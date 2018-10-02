<!DOCTYPE html>
<html>

<head>
	<title>In the Moment</title>
	
	<link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsenui.css">
	<link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsen-css-components.min.css">
	<script src="https://unpkg.com/onsenui/js/onsenui.min.js"></script>
</head>

<body>

<ons-page>

  	<ons-toolbar>
		  <div class="left">
		    Left part
		  </div>
		  <div class="center">
		    Title here
		  </div>
		  <div class="right">
		    Right part
		  </div>
		</ons-toolbar>
		
    <p class="intro">
      This is a kitchen sink example that shows off the components of Onsen UI.<br><br>
    </p>

    <ons-card onclick="fn.pushPage({'id': 'pullHook.html', 'title': 'PullHook'})">
      <div class="title">Pull Hook</div>
      <div class="content">Simple "pull to refresh" functionality to update data.</div>
    </ons-card>
    <ons-card onclick="fn.pushPage({'id': 'dialogs.html', 'title': 'Dialogs'})">
      <div class="title">Dialogs</div>
      <div class="content">Components and utility methods to display many types of dialogs.</div>
    </ons-card>
    <ons-card onclick="fn.pushPage({'id': 'buttons.html', 'title': 'Buttons'})">
      <div class="title">Buttons</div>
      <div class="content">Different styles for buttons, floating action buttons and speed dials.</div>
    </ons-card>
    <ons-card onclick="fn.pushPage({'id': 'carousel.html', 'title': 'Carousel'})">
      <div class="title">Carousel</div>
      <div class="content">Customizable carousel that can be optionally fullscreen.</div>
    </ons-card>
    <ons-card onclick="fn.pushPage({'id': 'infiniteScroll.html', 'title': 'Infinite Scroll'})">
      <div class="title">Infinite Scroll</div>
      <div class="content">Two types of infinite lists: "Load More" and "Lazy Repeat".</div>
    </ons-card>
    <ons-card onclick="fn.pushPage({'id': 'progress.html', 'title': 'Progress'})">
      <div class="title">Progress</div>
      <div class="content">Linear progress, circular progress and spinners.</div>
    </ons-card>

    <style>
      .intro {
        text-align: center;
        padding: 0 20px;
        margin-top: 40px;
      }

      ons-card {
        cursor: pointer;
        color: #333;
      }

      .card__title,
      .card--material__title {
        font-size: 20px;
      }
    </style>
  </ons-page>
	
</body>

</html>
