<?php include "header.php" ?>

<div id="page-content">
    <div id="wrap">
        <div id="page-heading">

            <ol class="breadcrumb">
              <li><a href="index.php">Dashboard</a></li>
              <li>UI Elements</li>
              <li class="active">Buttons</li>
            </ol>

            <h1>Buttons</h1>
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
    <div class="col-xs-12">
        <div class="panel panel-primary">
          <div class="panel-heading">
                <h4>Button Variants</h4>
          </div>
          <div class="panel-body">
            

            <h3>Button Sizes</h3>
            <p>Fancy larger or smaller buttons? Add <code>.btn-lg</code>, <code>.btn-sm</code>, or <code>.btn-xs</code> for additional sizes.</p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="25%">Extra Small</th>
                        <th width="25%">Small</th>
                        <th width="25%">Regular</th>
                        <th width="25%">Large</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="#" class="btn btn-default btn-xs">Extra Small</a></td>
                        <td><a href="#" class="btn btn-default btn-sm">Small</a></td>
                        <td><a href="#" class="btn btn-default">Regular</a></td>
                        <td><a href="#" class="btn btn-default btn-lg">Large</a></td>
                    </tr>
                    <tr>
                        <td><a href="#" class="btn btn-default-alt btn-xs">Extra Small</a></td>
                        <td><a href="#" class="btn btn-default-alt btn-sm">Small</a></td>
                        <td><a href="#" class="btn btn-default-alt">Regular</a></td>
                        <td><a href="#" class="btn btn-default-alt btn-lg">Large</a></td>
                    </tr>
                    <tr>
                        <td><a href="#" disabled class="btn btn-default btn-xs">Disabled</a></td>
                        <td><a href="#" disabled class="btn btn-default btn-sm">Disabled</a></td>
                        <td><a href="#" disabled class="btn btn-default">Disabled</a></td>
                        <td><a href="#" disabled class="btn btn-default btn-lg">Disabled</a></td>
                    </tr>
                    <tr>
                        <td><a href="#" disabled class="btn btn-default-alt btn-xs">Disabled</a></td>
                        <td><a href="#" disabled class="btn btn-default-alt btn-sm">Disabled</a></td>
                        <td><a href="#" disabled class="btn btn-default-alt">Disabled</a></td>
                        <td><a href="#" disabled class="btn btn-default-alt btn-lg">Disabled</a></td>
                    </tr>
                </tbody>
            </table>
            
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-primary">
          <div class="panel-heading">
                <h4>Button Dropdowns</h4>
          </div>
          <div class="panel-body">
            

            
            <h3>Single and Split Button Dropdowns</h3>
            <p>Turn a button into a dropdown toggle with some basic markup changes.</p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="25%">Single</th>
                        <th width="25%">Single Alt</th>
                        <th width="25%">Split</th>
                        <th width="25%">Split Alt</th>
                    </tr>
                </thead>
                <tbdoy>
                    <tr>
                        <td>
                            <div class="btn-group">
                              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                Dropdown <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group">
                              <button type="button" class="btn btn-default-alt dropdown-toggle alt-border" data-toggle="dropdown">
                                Dropdown <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group">
                                <a href="#" class="btn btn-default">Dropdown</a>
                                <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another Action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated Link</a></li>
                                </ul>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group">
                                <a href="#" class="btn btn-default-alt">Dropdown</a>
                                <a href="#" class="btn btn-default-alt dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another Action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated Link</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbdoy>
            </table>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4>Button Groups</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
					   <h3>Horizontal Button Group</h3>
					   <p>Group a series of buttons together on a single line with the button group. Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>.</p>
					</div>
                </div>            
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="25%">Horizontal Group</th>
                                    <th width="25%">With Icons</th>
                                    <th width="50%">Multiple Button Groups</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default">Left</button>
                                            <button type="button" class="btn btn-default">Middle</button>
                                            <button type="button" class="btn btn-default">Right</button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default"><i class="fa fa-align-left"></i></button>
                                            <button type="button" class="btn btn-default"><i class="fa fa-align-center"></i></button>
                                            <button type="button" class="btn btn-default"><i class="fa fa-align-right"></i></button>
                                            <button type="button" class="btn btn-default"><i class="fa fa-align-justify"></i></button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-toolbar">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default">1</button>
                                                <button type="button" class="btn btn-default">2</button>
                                                <button type="button" class="btn btn-default">3</button>
                                                <button type="button" class="btn btn-default">4</button>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default">5</button>
                                                <button type="button" class="btn btn-default">6</button>
                                                <button type="button" class="btn btn-default">7</button>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default">8</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
<br>
                <div class="row">
                    <div class="col-md-12">
                        <h3>Vertical Button Group</h3>
                        <p>Make a set of buttons appear vertically stacked rather than horizontally by putting it in <code>.btn-group-vertical</code>.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="25%">Vertical Group</th>
                                    <th width="25%">With Dropdown</th>
                                    <th width="25">With Icons</th>
                                    <th width="25">Multiple Button Groups</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="btn-group-vertical">
                                            <button type="button" class="btn btn-default">Top</button>
                                            <button type="button" class="btn btn-default">Middle</button>
                                            <button type="button" class="btn btn-default">Bottom</button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group-vertical">    
                                            <button type="button" class="btn btn-default-alt">Button 1</button>
                                            <button type="button" class="btn btn-default-alt">Button 2</button>
                                            <button type="button" class="btn btn-default-alt">Button 3</button>
                                            <button type="button" class="btn btn-default-alt dropdown-toggle" data-toggle="dropdown">
                                                Dropdown
                                                <i class="fa fa-caret-down"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Dropdown link</a></li>
                                                <li><a href="#">Dropdown link</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn btn-group-vertical">
                                            <a class="btn btn-default" href="#"><i class="fa fa-align-left"></i></a>
                                            <a class="btn btn-default" href="#"><i class="fa fa-align-center"></i></a>
                                            <a class="btn btn-default" href="#"><i class="fa fa-align-right"></i></a>
                                            <a class="btn btn-default" href="#"><i class="fa fa-align-justify"></i></a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-toolbar">
                                            <div class="btn-group-vertical">   
                                                <button type="button" class="btn btn-default-alt">Page 1</button>
                                                <button type="button" class="btn btn-default-alt">Page 2</button>
                                                <button type="button" class="btn btn-default-alt">Page 3</button>
                                                <button type="button" class="btn btn-default-alt">Page 4</button>
                                            </div>

                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>        
       





<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4>Button Color Classes</h4>
            </div>
            <div class="panel-body">
				<h3>Example Color Classes</h3>
				<p>Here are some basic button colors and custom colors that comes in two different styles. Simply use any color class you like from the table above.</p>
                <table class="table table-bordered">
                    <thead>
                        <th width="25%">Color Classes</th>
                        <th width="25%">Button Colors</th>
                        <th width="25%">Color Classes Alt</th>
                        <th width="25%">Button Colors Alt</th>
                    </thead>
                    <tr>
                        <td><code>.btn-default</code></td>
                        <td><a href="#" class="btn btn-default">Default</a></td>
                        <td><code>.btn-default-alt</code></td>
                        <td><a href="#" class="btn btn-default-alt">Default</a></td>
                    </tr>
                    <tr>
                        <td><code>.btn-primary</code></td>
                        <td><a href="#" class="btn btn-primary">Primary</a></td>
                        <td><code>.btn-primary-alt</code></td>
                        <td><a href="#" class="btn btn-primary-alt">Primary</a></td>
                    </tr>
                    <tr>
                        <td><code>.btn-success</code></td>
                        <td><a href="#" class="btn btn-success">Success</a></td>
                        <td><code>.btn-success-alt</code></td>
                        <td><a href="#" class="btn btn-success-alt">Success</a></td>
                    </tr>
                    <tr>
                        <td><code>.btn-info</code></td>
                        <td><a href="#" class="btn btn-info">Info</a></td>
                        <td><code>.btn-info-alt</code></td>
                        <td><a href="#" class="btn btn-info-alt">Info</a></td>
                    </tr>
                    <tr>
                        <td><code>.btn-warning</code></td>
                        <td><a href="#" class="btn btn-warning">Warning</a></td>
                        <td><code>.btn-warning-alt</code></td>
                        <td><a href="#" class="btn btn-warning-alt">Warning</a></td>
                    </tr>
					<tr>
                        <td><code>.btn-danger</code></td>
                        <td><a href="#" class="btn btn-danger">Danger</a></td>
                        <td><code>.btn-danger-alt</code></td>
                        <td><a href="#" class="btn btn-danger-alt">Danger</a></td>
                    </tr>
					<tr>
                        <td><code>.btn-inverse</code></td>
                        <td><a href="#" class="btn btn-inverse">Inverse</a></td>
                        <td><code>.btn-inverse-alt</code></td>
                        <td><a href="#" class="btn btn-inverse-alt">Inverse</a></td>
                    </tr>
					<tr>
                        <td><code>.btn-brown</code></td>
                        <td><a href="#" class="btn btn-brown">Brown</a></td>
                        <td><code>.btn-brown-alt</code></td>
                        <td><a href="#" class="btn btn-brown-alt">Brown</a></td>
                    </tr>
					<tr>
                        <td><code>.btn-sky</code></td>
                        <td><a href="#" class="btn btn-sky">Sky Blue</a></td>
                        <td><code>.btn-sky-alt</code></td>
                        <td><a href="#" class="btn btn-sky-alt">Sky Blue</a></td>
                    </tr>
					<tr>
                        <td><code>.btn-midnightblue</code></td>
                        <td><a href="#" class="btn btn-midnightblue">Midnight Blue</a></td>
                        <td><code>.btn-midnightblue-alt</code></td>
                        <td><a href="#" class="btn btn-midnightblue-alt">Midnight Blue</a></td>
                    </tr>
					<tr>
                        <td><code>.btn-orange</code></td>
                        <td><a href="#" class="btn btn-orange">Orange</a></td>
                        <td><code>.btn-orange-alt</code></td>
                        <td><a href="#" class="btn btn-orange-alt">Orange</a></td>
                    </tr>
					<tr>
                        <td><code>.btn-green</code></td>
                        <td><a href="#" class="btn btn-green">Green</a></td>
                        <td><code>.btn-green-alt</code></td>
                        <td><a href="#" class="btn btn-green-alt">Green</a></td>
                    </tr>
					<tr>
                        <td><code>.btn-magenta</code></td>
                        <td><a href="#" class="btn btn-magenta">Magenta</a></td>
                        <td><code>.btn-magenta-alt</code></td>
                        <td><a href="#" class="btn btn-magenta-alt">Magenta</a></td>
                    </tr>

                    
                </table>
			
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-danger">
          <div class="panel-heading"><h4>Custom Colors</h4></div>
          <div class="panel-body">
		    <h3>Make your own!</h3>
            <p>Create as many button colors as you want easily with the included LESS Mixins in just three lines! For example if you want to create other colored buttons, simply add this line in the <b>buttons.less</b> file</p>
<pre class="prettyprint linenums">.btn-COLORNAME {
  .button-variant(#TEXTCOLOR, #BACKGROUNDCOLOR, #BORDERCOLOR);
}</pre>
            <p>or, for alternate buttons</p>
<pre class="prettyprint linenums">.btn-COLORNAME-alt {
  .button-variant-alt(#TEXTCOLOR, #BACKGROUNDCOLOR, #BORDERCOLOR);
}</pre>
          </div>
        </div>
    </div>
</div>




        </div> <!-- container -->
    </div> <!--wrap -->
</div> <!-- page-content -->

<?php include "footer.php" ?>