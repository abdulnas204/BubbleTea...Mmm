<!-- Global footer bar -->
<ons-bottom-toolbar>
	<div class="tabbar">
		<label class="tabbar__item" onclick="location.href='index.php'">
			<input type="radio" name="tabbar-a">
			<button class="tabbar__button">
				<i class="tabbar__icon ion-home"></i>
				<div class="tabbar__label">Home</div>
			</button>
		</label>
		
		<label class="tabbar__item" onclick="location.href='timeSelection.php'">
			<input type="radio" name="tabbar-a" checked="checked">
			<button class="tabbar__button">
				<i class="tabbar__icon ion-play"></i>
				<div class="tabbar__label">Start</div>
			</button>
		</label>
		
		<label class="tabbar__item" onclick="location.href='explore.php'">
			<input type="radio" name="tabbar-a">
			<button class="tabbar__button">
				<i class="tabbar__icon ion-compass"></i>
				<div class="tabbar__label">Explore</div>
			</button>
		</label>
	</div>
</ons-bottom-toolbar>