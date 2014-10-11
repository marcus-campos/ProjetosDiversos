<?php include "header.php" ?>

<div id="page-content">
	<div id='wrap'>
		<div id="page-heading">
			<ol class="breadcrumb">
				<li><a href="index.php">Dashboard</a></li>
				<li>UI Components</li>
				<li class="active">Tour</li>
			</ol>

			<h1 class="bootstro" data-bootstro-placement="bottom" data-bootstro-step="0" data-bootstro-width="400px" data-bootstro-content="Because bootstrap rocks. Life before bootstrap was sooo miserable" data-bootstro-title="Hello, I am a normal Bootstrap popover" data-original-title="" title="">Tour</h1>
			<div class="options">
                    <div class="btn-toolbar">
                        <div class="btn-group hidden-xs">
                            <a href='#' class="btn btn-default dropdown-toggle" data-toggle='dropdown'><i class="fa fa-cloud-download"></i><span class="hidden-sm"> Export as  </span><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Text File (*.txt)</a></li>
                                <li><a href="#">Excel File (*.xlsx)</a></li>
                                <li><a href="#">PDF File (*.pdf)</a></li>
                            </ul>
                        </div>
                        <a href="#" class="btn btn-default"><i class="fa fa-cog"></i></a>
                    </div>
                </div>
		</div>
		<div class="container">

			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h4>Tour</h4>
						</div>
						<div class="panel-body">
							<h3>Bootstro.js</h3>
							<p>Show your users a guided tour of what is what on a page.</p>
							<a class="btn btn-large btn-success btn-block" href="#" id="demo">Click me! I'm a Demo</a>
							<hr />
							<div class="row">
								<div class="col-md-4  bootstro" data-bootstro-step="1" data-bootstro-content="Call bootstro.start('.bootstro') or just &lt;b&gt;bootstro.start()&lt;/b&gt;" data-bootstro-title="I am simple" data-original-title="" title="">
									<h3>Utilizes Bootstrap Popovers</h3>
										<p><i class="fa fa-check"></i> Works <b>cross-browser, cross-devices</b> . C'mon, it is bootstrap</p>
      									<p><i class="fa fa-check"></i> Utilises Bootstrap <a href="http://getbootstrap.com/javascript/#popovers">Popovers</a></p>
      									<p><i class="fa fa-check"></i> Bootstro popovers can have <b>variable width</b></p>
      									<p><i class="fa fa-check"></i> Small (<b>3.0K</b> minified JS &amp; <b>0.5K</b>  minified CSS)</p>
      									<p><i class="fa fa-check"></i> <b>No collision</b>. Everything <a href="http://enterprisejquery.com/2010/10/how-good-c-habits-can-encourage-bad-javascript-habits-part-1/">safely</a> namespaced to bootstro.All <b>events unbinded</b> when the intro stops</p>
								</div>
								<div class="col-md-4 bootstro" div data-bootstro-step="2" data-bootstro-width="600px" data-bootstro-content="By adding &lt;b&gt;data-bootstro-width&lt;/b&gt; attribute" data-bootstro-title="I can resize my width too" data-original-title="" title="">
										<h3>More features </h3>
							          <p><i class="fa fa-check"></i> <b>Any element anywhere </b> on the page can be intro'ed: popovers are automatically scrolled to so they always get focused</p>
							          <p><i class="fa fa-check"></i> <b>Easily customizable</b>: Bootstro provides various public methods so you can control as you like bootstro.start(), bootstro.next(), bootstro.prev()...</p>
							          <p class="bootstro" data-bootstro-step="4" data-bootstro-content="I work with Esc, → ↓, ← ↑ keyboard shortcuts too">
							          <i class="fa fa-check"></i> <b>Keyboard shortcuts</b>: Works with Esc, → ↓, ← ↑ shortcuts too</p>
							          <p><i class="fa fa-check"></i> <b>Show can be alternativly loaded via ajax</b>: This way the page HTML can be kept clean, 
							          and server also can decide which elements to show more easily,or translate the show more easily.</p>
								</div>
								<div class="col-md-4 bootstro" data-bootstro-title="I can align to [left,right,bottom,top]" data-bootstro-content="Simply because I am a popover. Specify me with &lt;b&gt;data-bootstro-placement&lt;/b&gt;" data-bootstro-placement="left" data-bootstro-width="400px" data-bootstro-step="3">
									<h3>Quick Usage</h3>
									<p>Add class <code>.bootstro</code> to any element that you'd like to be highlighted</p>
									<p>Include bootstro.js & bootstro.css</p>
									<p><code>bootstro.start()</code></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


		</div> <!-- container -->
	</div> <!--wrap -->
</div> <!-- page-content -->

<?php include "footer.php" ?>