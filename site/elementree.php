<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>elementree V1.0</title>
	<?php css('base') ?>
	<?php css('site') ?>
	</head>
	<body>
	<div class="container">
		<div class="grid half">
			<h1>heading <small>Small</small></h1>
			<h1 class="subheader">subheader</h1>
			<h2>heading <small>Small</small></h2>
			<h2 class="subheader">subheader</h2>
			<h3>heading <small>Small</small></h3>
			<h3 class="subheader">subheader</h3>
		</div>
		<div class="grid half">
			<p class="lead"> This is leading text Used to give a bit more punch. </p>
			<p><span class="dropcap">W</span>e've implemented some standards like <strong>bold</strong> and <em>italics</em>, as well as, our own nifty styles, such as <small>small</small>, <mark>mark</mark> <s>not strikeout</s> but <u>Underline</u>.</p>
			<hr>
			<p>We can <q>Wrap in quotes</q> Donec ullamcorper metus <a href="#">This is a standard link.</a> auctor fringilla. Maecenas faucibus <sup>sup</sup> interdum. Donec ullamcorper <sub>sub</sub> non metus auctor fringilla.</p>

			<blockquote>
			  <p>I do not fear computers. I fear the lack of them.
			  <cite>Isaac Asimov</cite></p>
			</blockquote>
		</div>
		<div class="cf"></div>
		<div class="grid third">
			<ul>
			  <li>List item</li>
			  <li>List item
			    <ul>
			      <li>Nested List Item</li>
			      <li>Nested List Item</li>
			    </ul>
			  </li>
			  <li>List item</li>
			</ul>
		</div>
		<div class="grid third">
			<ol>
			  <li>Ordered List Item</li>
			  <li>Ordered List Item</li>
			  <li>Ordered List Item</li>
			  <li>Ordered List Item</li>
			 </ol>
		</div>
		<div class="grid third">
			<dl>
			  <dt>Definition Title</dt>
			  <dd>Definition text.</dd>
			  <dt>Definition Title</dt>
			  <dd>Definition text.</dd>
			</dl>
		</div>
		<div class="cf"></div>	
		<!--
<div class="grid">
			<a class="small button" href="#">Small</a>
			<a class="button" href="#">Medium</a>
			<a class="large button" href="#">Large</a>
			<ul class="button-group right">
				<li><a href="#" class="button">Its A</a></li>
			  <li><a href="#" class="button">Button</a></li>
			  <li><a href="#" class="button">Group</a></li>
			</ul>
		</div>
		<div class="grid">
			<div class="panel base">
				<h5>This is a regular panel.</h5>
				<p>It has an easy to override visual style, and is appropriately subdued.</p>
			</div>
		</div>
		<div class="grid half">
			<div class="panel callout radius blue">
				<h5>This is a callout panel.</h5>
				<p>Content...</p>
			</div>
		</div>
		<div class="grid half">
			<div class="panel callout rounded">
				<h5>This is a callout panel.</h5>
				<p>Content...</p>
			</div>
		</div>
-->
		<div class="grid">
			<table >
			  <thead>
			    <tr>
			      <th>Table Header</th>
			      <th >Table Header</th>
			      <th class="primary">Table Header</th>
			      <th>Table Header</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td>Content</td>
			      <td>This is longer content</td>
			      <td class="primary">Content</td>
			      <td >Content</td>
			    </tr>
			    <tr>
			      <td>Content</td>
			      <td>This is longer content</td>
			      <td class="primary">Content</td>
			      <td>Content</td>
			    </tr>
			    <tr>
			      <td>Content</td>
			      <td>This is longer content</td>
			      <td>Content</td>
			      <td>Content</td>
			    </tr>
			    <tr>
			      <td>Content</td>
			      <td>This is longer content</td>
			      <td>Content</td>
			      <td>Content</td>
			    </tr>
			  </tbody>
			</table>
		</div>
                 <img class="grid half" src="http://placehold.it/470x294">
                 <div class="grid half">
	                 <div class="Flexible-container">
		                 <iframe src="http://player.vimeo.com/video/53914149?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=808080" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
		             </div>
		          </div>



                 <div class="grid half">
					<form>
					  <input type="text"  placeholder="Name" />
					  <input type="text" placeholder="Email" />
					  <textarea placeholder="Message"></textarea>
					</form>
				</div>
                <div class="grid half">
					<form>
					<div class="grid half">
				      <label for="radio4"><input name="radio2" type="radio" id="radio4"> Radio Button</label><br/>
				      <label for="radio5"><input name="radio2" CHECKED type="radio" id="radio5"> Radio Button 2</label>
					</div>
					<div class="grid half">
				      <label for="checkbox1"><input type="checkbox" CHECKED id="checkbox1"> Label for Checkbox</label>
				      <label for="checkbox2"><input type="checkbox" id="checkbox2"> Label for Checkbox</label>
					</div>
					<div class="cf"></div>
					  <select class="grid half">
					    <option SELECTED>This is a dropdown</option>
					    <option>This is another option</option>
					    <option>Look, a third option</option>
					  </select>
					  <input type="submit" value="Submit" class="grid half"/>
					</form>

				</div>
				<div class="cf"></div>
	</div>
	</body>
	</html>