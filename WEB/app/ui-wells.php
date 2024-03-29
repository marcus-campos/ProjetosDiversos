<?php include "header.php" ?>

<div id="page-content">
	<div id='wrap'>
		<div id="page-heading">
			<ol class="breadcrumb">
				<li><a href="index.php">Dashboard</a></li>
				<li>UI Components</li>
				<li class="active">Wells</li>
			</ol>

			<h1>Wells</h1>
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
					<div class="panel panel-purple">
						<div class="panel-heading">
							<h4>Wells</h4>
							<div class="options">
								<ul class="nav nav-tabs">
					              <li class="active"><a href="#domwell" data-toggle="tab"><i class="fa fa-desktop"></i></a></li>
					              <li><a href="#codewell" data-toggle="tab"><i class="fa fa-code"></i></a></li>
					            </ul>
							</div>
						</div>
						<div class="panel-body">
							<p>Use the well as a simple effect on an element to give it an inset effect. You can even control the sizes of your wells with <code>well-sm</code>, and <code>well-lg</code> classes</p>
								<div class="tab-content">
									<div class="tab-pane active" id="domwell">
										<div class="well well-sm tooltips" data-trigger="hover" data-original-title=".well.well-sm">
											All God does is watch us and kill us when we get boring. We must never, ever be boring.
										</div>
										
										<div class="well tooltips" data-trigger="hover" data-original-title=".well">
											Trout, incidentally, had written a book about a money tree. It had twenty-dollar bills for leaves. Its flowers were government bonds. Its fruit was diamonds. It attracted human beings who killed each other around the roots and made very good fertilizer.
										</div>
										
										<div class="well well-lg tooltips" data-trigger="hover" data-original-title=".well.well-lg">
											Words! Mere words! How terrible they were! How clear, and vivid, and cruel! One could not escape from them. And yet what a subtle magic there was in them! They seemed to be able to give a plastic form to formless things, and to have a music of their own as sweet as that of viol or of lute. Mere words! Was there anything so real as words?
										</div>
									</div>
									<div class="tab-pane" id="codewell">
<pre class="prettyprint linenums">
&lt;div class=&quot;well well-sm&quot;&gt;...&lt;/div&gt;
</pre>

<pre class="prettyprint linenums">
&lt;div class=&quot;well&quot;&gt;...&lt;/div&gt;
</pre>

<pre class="prettyprint linenums">
&lt;div class=&quot;well well-lg&quot;&gt;...&lt;/div&gt;
</pre>
									</div>
								</div>
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