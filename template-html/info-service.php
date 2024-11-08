<?php 
/*
  Template Name: Info Service
*/
get_header('classic'); ?>

<div id="wrapper">

	<section class="section section-hero-page" style="--section-pt: 50px;--section-pb: 40px;">
		<div class="tj-container">
			<div class="inner">
				<h1 class="title-page">Info and Service</h1>
			</div>
		</div>
	</section>
	
	<section id="content" class="section section-posts-content" style="--section-pt: 0;">
		<div class="tj-container">

			<div class="row row-info">
				<div class="col-12 col-lg-auto">

					<ul class="info-content">
						<li class="item active">
							<a href="#first-time-user">
								<i class="icon"><img src="<?= TSBT_URI . '/assets/images/info-user-guide.png'; ?>"></i>
								<span>First Time User</span>
							</a>
						</li>
						<li class="item">
							<a href="#faqs">
								<i class="icon"><img src="<?= TSBT_URI . '/assets/images/info-faq.png'; ?>"></i>
								<span>FAQs</span>
							</a>
						</li>
						<li class="item">
							<a href="#maintenance-tips">
								<i class="icon"><img src="<?= TSBT_URI . '/assets/images/info-maintenance.png'; ?>"></i>
								<span>Maintenance Tips</span>
							</a>
						</li>
						<li class="item">
							<a href="#warranty-service">
								<i class="icon"><img src="<?= TSBT_URI . '/assets/images/info-warranty.png'; ?>"></i>
								<span>Warranty & Service</span>
							</a>
						</li>
						<li class="item">
							<a href="#contact">
								<i class="icon"><img src="<?= TSBT_URI . '/assets/images/info-communicate.png'; ?>"></i>
								<span>Contact Us</span>
							</a>
						</li>
					</ul>

				</div>
				<div class="col-12 col-lg">

						<?php $contents = array(
						[
							'title' => 'Begin Your Brew: A Starter\'s Guide to Coffee Bliss',
							'content' => '
								<h2>1. Vorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</h2>
								<p>Vorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</p>
								<h2>2. Vorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</h2>
								<p>Vorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Vorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Vorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Vorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</p>
								<p><img src="https://s3-alpha-sig.figma.com/img/9570/dd6c/d6808b1ae9a1d2a51e84f74f6e26cddc?Expires=1724630400&amp;Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&amp;Signature=pi3fgxUom9wWqCikoKDUBj8cCPvK2zyZvUeMgHAForOqJHmOQi2~LelajE5PqrFHV-XVqa9jhFbUMotqhPemsL2YJY3YzOEcTlsAxthc8n4dLpoj1REBeAo9V-1rmO-vv0zW3u-evEVRyCCuLS4zJ0eqH6oQvqaTSRiYNkmMelQasTRISb6CCxZygIiCfSWRne5cLGtxiOein7dF-xBNj5Y8Cdscb0IEFsFynMlYFWdZGLl-YR3P6wetIbJDkP7N6dI3lvZGoYfyg8fe5AR9qbca4hASvj2x7rgXpokR-zwCZGB8CevVT4oaFNEAMF~nShL9AFExOMcCZPBEze~O2A__" alt="" /></p>
								<p>Vorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Vorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Vorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Vorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</p>
								<p>Vorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Vorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</p>
								<table style="border-collapse: collapse; width: 100%;" border="1">
								<tbody>
								<tr>
								<td style="width: 50%;"><img src="https://s3-alpha-sig.figma.com/img/da01/6ea6/8829e74000e9e8455a449ea5346792b8?Expires=1724630400&amp;Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&amp;Signature=SC1YkC~-c5ImSlZF-o-nWefQZP3JX-wW4moAQr0CQff1PvskKpf9q-ppByo4SQFmhwYRMzYf-42taY8699UtqWOqqcxfO9oOAqDrgwidYZ-EY9elx1ApqyxLam8oAy76WstXHO36DlfCh3cypnUcAZJlDwS0bKJ7sF1toqbMcXXpf1Ft1HQws3myrG2mSblQQdocTLk8n-8XOeas2LG-V0SCMlWVxl1FNBMA4rUJkXu~h0pKjZxVl3XL6dgVeRkJ0nLh~kLrslC9tTK9su4JGybosiqZxwsMsxs02DM1IAVEBYCrRyDPGK2Y9rpssa9zOSJcIW-TQAVVRtFbQCG0Lg__" alt="" /></td>
								<td style="width: 50%;"><img src="https://s3-alpha-sig.figma.com/img/2828/9355/2cd85328cd6526aaa174ffe7af2c6516?Expires=1724630400&amp;Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&amp;Signature=CHqmrkaBQaV0BGe1gW4znuX2E~hWwrrXc8N~kYxchP4fcIkvb8pgj~PvQucDkqbtGpCe7~k018Wm2C33KLwb5jweqLk7dkInVR1i27IdzKDn7efv2aTIGqHBx0X6zC~jgrwsScKFNk0~uijDtEevNN~tHqvsRxsBYfz-9KmIJrHVoBDQyGvfPldKWYjqCWcw6XzCBHwY104-lUTAulrVyqnWIoSw4AbdZXjXAfIofRcrZMklEFVvKrRxsTorT9CTT9AzIwuKeDbGYS3-g9AE2Wayk6Qw8W06BhHawu5TRmuOVl3FzE6fcBj1tybbfEW9G7pvaxZ1qQdH7QMOBQbVAw__" alt="" /></td>
								</tr>
								</tbody>
								</table>
								<p>Vorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Vorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Vorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Vorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</p>
								<blockquote>
								<p>&ldquo;Makanan enak dan dapur yang hangat adalah apa yang membuat house menjadi home.&rdquo; -- Lany</p>
								</blockquote>
							'
						],
						[
							'title' => 'New to Coffee? Start Your Journey with Confidence.',
							'content' => '
								<h1>You can edit this demo text!</h1>
								<h2>How to use the editor:</h2>
								<p>Paste your documents in the visual editor on the left or your HTML code in the source editor in the right. <br />Edit any of the two areas and see the other changing in real time.&nbsp;</p>
								<p>Click the Clean button to clean your source code.</p>
								<h2>Some useful features:</h2>
								<ol>
								<li><img src="https://html-online.com/img/01-interactive-connection.png" alt="interactive connection" width="45" /> Interactive source editor</li>
								<li><img src="https://html-online.com/img/02-html-clean.png" alt="html cleaner" width="45" /> HTML Cleaning</li>
								<li><img src="https://html-online.com/img/03-docs-to-html.png" alt="Word to html" width="45" /> Word to HTML conversion</li>
								<li><img src="https://html-online.com/img/04-replace.png" alt="replace text" width="45" /> Find and Replace</li>
								<li><img src="https://html-online.com/img/05-gibberish.png" alt="gibberish" width="45" /> Lorem-Ipsum generator</li>
								<li><img src="https://html-online.com/img/6-table-div-html.png" alt="html table div" width="45" /> Table to DIV conversion</li>
								</ol>
								<p> </p>
								<h2>Cleaning options:</h2>
								<table>
								<thead>
								<tr>
								<td>Name of the feature</td>
								<td>Example</td>
								<td>Default</td>
								</tr>
								</thead>
								<tbody>
								<tr>
								<td>Remove tag attributes</td>
								<td><img src="https://html-online.com/images/smiley.png" alt="laughing" width="40" height="16" /> (except <strong>img</strong>-<em>src</em> and <strong>a</strong>-<em>href</em>)</td>
								</tr>
								<tr>
								<td>Remove inline styles</td>
								<td>You <strong>should never</strong>&nbsp;use inline styles!</td>
								<td><strong>x</strong></td>
								</tr>
								<tr>
								<td>Remove classes and IDs</td>
								<td>Use classes to <strong>style everything</strong>.</td>
								<td><strong>x</strong></td>
								</tr>
								<tr>
								<td>Remove all tags</td>
								<td>This leaves <strong>only the plain</strong> <em>text</em>. <img src="https://html-online.com/images/smiley.png" alt="laughing" width="16" height="16" /></td>
								</tr>
								<tr>
								<td>Remove successive &amp;nbsp;s</td>
								<td>Never use non-breaking spaces to set margins.</td>
								<td><strong>x</strong></td>
								</tr>
								<tr>
								<td>Remove empty tags</td>
								<td>Empty tags should go!</td>
								</tr>
								<tr>
								<td>Remove tags with one &amp;nbsp;</td>
								<td>This makes&nbsp;no sense!</td>
								<td><strong>x</strong></td>
								</tr>
								<tr>
								<td>Remove span tags</td>
								<td>Span tags with all styles</td>
								<td><strong>x</strong></td>
								</tr>
								<tr>
								<td>Remove images</td>
								<td>I am an image: <img src="https://html-online.com/images/smiley.png" alt="laughing" /></td>
								</tr>
								<tr>
								<td>Remove links</td>
								<td><a href="https://html-online.com" rel="nofollow">This is</a> a link.</td>
								</tr>
								<tr>
								<td>Remove tables</td>
								<td>Takes everything out of the table.</td>
								</tr>
								<tr>
								<td>Replace table tags with structured divs</td>
								<td>This text is inside a table.</td>
								</tr>
								<tr>
								<td>Remove comments</td>
								<td>This is only visible in the source editor </td>
								<td><strong>x</strong></td>
								</tr>
								<tr>
								<td>Encode special characters</td>
								<td>&hearts; <strong>☺ ★</strong> &gt;&lt;</td>
								<td><strong>x</strong></td>
								</tr>
								<tr>
								<td>Set new lines and text indents</td>
								<td>Organize the tags in a nice tree view.</td>
								</tr>
								</tbody>
								</table>
								<p></p>
								<p><strong>Save this link into your bookmarks and share it with your friends. It is all FREE! </strong><br /><strong>Enjoy!</strong></p>
								<p></p>
							'
						],
						[
							'title' => 'First Cup Wonders: Uncover the Secrets of Coffee Brewing.',
							'content' => '<p><strong>Headings</strong></p>
								<h1>Header one</h1>
								<h2>Header two</h2>
								<h3>Header three</h3>
								<h4>Header four</h4>
								<h5>Header five</h5>
								<h6>Header six</h6>
								<h2>Blockquotes</h2>
								<p>Single line blockquote:</p>
								<blockquote>
								<p>Stay hungry. Stay foolish.</p>
								</blockquote>
								<p>Multi line blockquote with a cite reference:</p>
								<blockquote cite="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/blockquote">
								<p>The <strong>HTML <code>&lt;blockquote&gt;</code> Element</strong> (or <em>HTML Block Quotation Element</em>) indicates that the enclosed text is an extended quotation. Usually, this is rendered visually by indentation (see <a href="https://developer.mozilla.org/en-US/docs/HTML/Element/blockquote#Notes">Notes</a> for how to change it). A URL for the source of the quotation may be given using the <strong>cite</strong> attribute, while a text representation of the source can be given using the <a title="The HTML Citation Element &lt;cite&gt; represents a reference to a creative work. It must include the title of a work or a URL reference, which may be in an abbreviated form according to the conventions used for the addition of citation metadata." href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/cite"><code>&lt;cite&gt;</code></a> element.</p>
								</blockquote>
								<p><cite>multiple contributors</cite> - MDN HTML element reference - blockquote</p>
								<h2>Tables</h2>
								<table>
								<thead>
								<tr>
								<th>Employee</th>
								<th>Salary</th>
								<th>&nbsp;</th>
								</tr>
								</thead>
								<tbody>
								<tr>
								<th><a href="http://example.org/">John Doe</a></th>
								<td>$1</td>
								<td>Because that&#39;s all Steve Jobs needed for a salary.</td>
								</tr>
								<tr>
								<th><a href="http://example.org/">Jane Doe</a></th>
								<td>$100K</td>
								<td>For all the blogging she does.</td>
								</tr>
								<tr>
								<th><a href="http://example.org/">Fred Bloggs</a></th>
								<td>$100M</td>
								<td>Pictures are worth a thousand words, right? So Jane x 1,000.</td>
								</tr>
								<tr>
								<th><a href="http://example.org/">Jane Bloggs</a></th>
								<td>$100B</td>
								<td>With hair like that?! Enough said...</td>
								</tr>
								</tbody>
								</table>
								<h2>Definition Lists</h2>
								<dl>
								<dt>Definition List Title</dt>
								<dd>Definition list division.</dd>
								<dt>Startup</dt>
								<dd>A startup company or startup is a company or temporary organization designed to search for a repeatable and scalable business model.</dd>
								<dt>#dowork</dt>
								<dd>Coined by Rob Dyrdek and his personal body guard Christopher &#34;Big Black&#34; Boykins, &#34;Do Work&#34; works as a self motivator, to motivating your friends.</dd>
								<dt>Do It Live</dt>
								<dd>I&#39;ll let Bill O&#39;Reilly will <a title="We&#39;ll Do It Live" href="https://www.youtube.com/watch?v=O_HyZ5aW76c">explain</a> this one.</dd>
								</dl>
								<h2>Unordered Lists (Nested)</h2>
								<ul>
								<li>List item one
								<ul>
								<li>List item one
								<ul>
								<li>List item one</li>
								<li>List item two</li>
								<li>List item three</li>
								<li>List item four</li>
								</ul>
								</li>
								<li>List item two</li>
								<li>List item three</li>
								<li>List item four</li>
								</ul>
								</li>
								<li>List item two</li>
								<li>List item three</li>
								<li>List item four</li>
								</ul>
								<h2>Ordered List (Nested)</h2>
								<ol start="8">
								<li>List item one -start at 8
								<ol>
								<li>List item one
								<ol reversed="reversed">
								<li>List item one -reversed attribute</li>
								<li>List item two</li>
								<li>List item three</li>
								<li>List item four</li>
								</ol>
								</li>
								<li>List item two</li>
								<li>List item three</li>
								<li>List item four</li>
								</ol>
								</li>
								<li>List item two</li>
								<li>List item three</li>
								<li>List item four</li>
								</ol>
								<h2>HTML Tags</h2>
								<p>These supported tags come from the WordPress.com code <a title="Code" href="https://en.support.wordpress.com/code/">FAQ</a>.</p>
								<p><strong>Address Tag</strong></p>
								<address>1 Infinite Loop<br />Cupertino, CA 95014<br />United States</address>
								<p><strong>Anchor Tag (aka. Link)</strong></p>
								<p>This is an example of a <a title="WordPress Foundation" href="https://wordpressfoundation.org/">link</a>.</p>
								<p><strong>Abbreviation Tag</strong></p>
								<p>The abbreviation <abbr title="Seriously">srsly</abbr> stands for &#34;seriously&#34;.</p>
								<p><strong>Acronym Tag (<em>deprecated in HTML5</em>)</strong></p>
								<p>The acronym <acronym title="For The Win">ftw</acronym> stands for &#34;for the win&#34;.</p>
								<p><strong>Big Tag</strong> (<em>deprecated in HTML5</em>)</p>
								<p>These tests are a <big>big</big> deal, but this tag is no longer supported in HTML5.</p>
								<p><strong>Cite Tag</strong></p>
								<p>&#34;Code is poetry.&#34; --<cite>Automattic</cite></p>
								<p><strong>Code Tag</strong></p>
								<p>This tag styles blocks of code.<br /><code>.post-title {<br />
								margin: 0 0 5px;<br />
								font-weight: bold;<br />
								font-size: 38px;<br />
								line-height: 1.2;<br />
								and here&#39;s a line of some really, really, really, really long text, just to see how it is handled and to find out how it overflows;<br />
								}</code><br />You will learn later on in these tests that <code>word-wrap: break-word;</code> will be your best friend.</p>
								<p><strong>Delete Tag</strong></p>
								<p>This tag will let you <del cite="deleted it">strike out text</del>, but this tag is <em>recommended</em> supported in HTML5 (use the <code>&lt;s&gt;</code> instead).</p>
								<p><strong>Emphasize Tag</strong></p>
								<p>The emphasize tag should <em>italicize</em> <em>text</em>.</p>
								<p><strong>Horizontal Rule Tag</strong></p>
								<hr />
								<p>This sentence is following a <code>&lt;hr /&gt;</code> tag.</p>
								<p><strong>Insert Tag</strong></p>
								<p>This tag should denote <ins cite="inserted it">inserted</ins> text.</p>
								<p><strong>Keyboard Tag</strong></p>
								<p>This scarcely known tag emulates <kbd>keyboard text</kbd>, which is usually styled like the <code>&lt;code&gt;</code> tag.</p>
								<p><strong>Preformatted Tag</strong></p>
								<p>This tag is for preserving whitespace as typed, such as in poetry or ASCII art.</p>
								<h2>The Road Not Taken</h2>
								<pre><cite>Robert Frost</cite>


								Two roads diverged in a yellow wood,
								And sorry I could not travel both          (\_/)
								And be one traveler, long I stood         (='.'=)
								And looked down one as far as I could     (")_(")
								To where it bent in the undergrowth;

								Then took the other, as just as fair,
								And having perhaps the better claim,          |\_/|
								Because it was grassy and wanted wear;       / @ @ \
								Though as for that the passing there        ( &gt; &ordm; &lt; )
								Had worn them really about the same,         &gt;&gt;x&lt;&lt;&acute;
																			/  O  \
								And both that morning equally lay
								In leaves no step had trodden black.
								Oh, I kept the first for another day!
								Yet knowing how way leads on to way,
								I doubted if I should ever come back.

								I shall be telling this with a sigh
								Somewhere ages and ages hence:
								Two roads diverged in a wood, and I&mdash;
								I took the one less traveled by,
								And that has made all the difference.


								and here&#39;s a line of some really, really, really, really long text, just to see how it is handled and to find out how it overflows;
								</pre>
								<p><strong>Quote Tag</strong> for short, inline quotes</p>
								<p><q>Developers, developers, developers...</q> --Steve Ballmer</p>
								<p><strong>Strike Tag</strong> (<em>deprecated in HTML5</em>) and <strong>S Tag</strong></p>
								<p>This tag shows <span style="text-decoration: line-through;">strike-through</span> <s>text</s>.</p>
								<p><strong>Small Tag</strong></p>
								<p>This tag shows <small>smaller<small> text.</small></small></p>
								<p><strong>Strong Tag</strong></p>
								<p>This tag shows <strong>bold text.</strong></p>
								<p><strong>Subscript Tag</strong></p>
								<p>Getting our science styling on with H<sub>2</sub>O, which should push the &#34;2&#34; down.</p>
								<p><strong>Superscript Tag</strong></p>
								<p>Still sticking with science and Albert Einstein&#39;s E = MC<sup>2</sup>, which should lift the 2 up.</p>
								<p><strong>Teletype Tag </strong>(<em>obsolete in HTML5</em>)</p>
								<p>This rarely used tag emulates <tt>teletype text</tt>, which is usually styled like the <code>&lt;code&gt;</code> tag.</p>
								<p><strong>Underline Tag</strong> <em>deprecated in HTML 4, re-introduced in HTML5 with other semantics</em></p>
								<p>This tag shows <u>underlined text</u>.</p>
								<p><strong>Variable Tag</strong></p>
								<p>This allows you to denote <var>variables</var>.</p>'
						],
						[
							'title' => 'Coffee Questions? Find Answers in Our Easy FAQ Guide!',
							'content' => '
								<p>Extreme climate conditions and the decrease in air quality due to excessive carbon footprint negatively impact our lives. Carbon offset is an effort to balance greenhouse gasses emissions by absorbing the carbon footprint.</p>

								<p>The way to absorb the carbon footprint is by planting new trees. With technology from Treasury and Jejakin, tree planting activities for carbon offsets can be done easily, transparently, and sustainably.</p>

								<p>You can contribute to Green Gold through your gold investment transactions. A dynamic amount will be added to each transaction, directly supporting our efforts to offset carbon emissions and promote sustainability in the gold industry.</p>

								<p>After completing your booking, this amount will be passed through from you to Jejakin to plant trees based on the amount gathered at the end of a specified period.</p>
							'
						]
					);?>

					<div class="content-faq">

						<div class="content-item" id="first-time-user">
							<div class="content-head">
								<h2 class="content-title">First Time User</h2>
								<p>Begin your coffee journey here! A practical guide for beginners with basic tips and recommendations to enjoy your coffee.</p>
							</div>
							<div class="content-body">

								<?php if ( !empty( $contents ) ) { ?>
									
									<div class="accordions close-all">
										<?php foreach ($contents as $content) { ?>
											<div class="accordion">
												<div class="accordion__head">
													<?= $content['title'] ?>
													<i class="icon">
														<?php tsbt_get_svg('icon-chevron-down') ?>
													</i>
												</div>
												<div class="accordion__content">
													<?= $content['content'] ?>
												</div>
											</div>
										<?php } ?>
									</div>
								<?php } ?>

							</div>
						</div>

						<div class="content-item" id="faqs">
							<div class="content-head">
								<h2 class="content-title">FAQs</h2>
								<p>Find quick and easy answers to your most common coffee questions, from product selection to troubleshooting tips.</p>
							</div>
							<div class="content-body">

							<?php if ( !empty( $contents ) ) { ?>
									
									<div class="accordions close-all">
										<?php foreach ($contents as $content) { ?>
											<div class="accordion">
												<div class="accordion__head">
													<?= $content['title'] ?>
													<i class="icon">
														<?php tsbt_get_svg('icon-chevron-down') ?>
													</i>
												</div>
												<div class="accordion__content">
													<?= $content['content'] ?>
												</div>
											</div>
										<?php } ?>
									</div>
								<?php } ?>

							</div>
						</div>
						
						<div class="content-item" id="maintenance-tips">
							<div class="content-head">
								<h2 class="content-title">Maintenance Tips</h2>
								<p>Learn how to keep your coffee equipment in top shape with effective maintenance and cleaning tips, ensuring every cup of coffee remains perfect.</p>
							</div>
							<div class="content-body">

							<?php if ( !empty( $contents ) ) { ?>
									
									<div class="accordions close-all">
										<?php foreach ($contents as $content) { ?>
											<div class="accordion">
												<div class="accordion__head">
													<?= $content['title'] ?>
													<i class="icon">
														<?php tsbt_get_svg('icon-chevron-down') ?>
													</i>
												</div>
												<div class="accordion__content">
													<?= $content['content'] ?>
												</div>
											</div>
										<?php } ?>
									</div>
								<?php } ?>

							</div>
						</div>
						
						<div class="content-item" id="warranty-service">
							<div class="content-head">
								<h2 class="content-title">Warranty & Service</h2>
								<p>Information about our warranty and services: what's covered, how to claim, and support to keep your coffee products in the best condition.</p>
							</div>
							<div class="content-body">

							<?php if ( !empty( $contents ) ) { ?>
									
									<div class="accordions close-all">
										<?php foreach ($contents as $content) { ?>
											<div class="accordion">
												<div class="accordion__head">
													<?= $content['title'] ?>
													<i class="icon">
														<?php tsbt_get_svg('icon-chevron-down') ?>
													</i>
												</div>
												<div class="accordion__content">
													<?= $content['content'] ?>
												</div>
											</div>
										<?php } ?>
									</div>
								<?php } ?>

							</div>
						</div>

					</div>

					<div id="contact" class="content-contact">
						<h3 class="title-contact">Still need help?</h3>

						<div class="row">
							<div class="col-12 col-lg-6">
								<div class="contact-item">
									<div class="column-icon">
										<i class="icon">
											<?php tsbt_get_svg('icon-mail-fill'); ?>
										</i>
									</div>
									<div class="column-content">
										<div class="title">Email</div>
										<a href="mailto:admin@unakaffe.co.id">admin@unakaffe.co.id</a>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-6">
								<div class="contact-item">
									<div class="column-icon">
										<i class="icon">
											<?php tsbt_get_svg('icon-phone-fill'); ?>
										</i>
									</div>
									<div class="column-content">
										<div class="title">Telpon</div>
										<a href="tel:+628111096867">+62 811-1096-867</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


		</div>
	</section>
</div>

<?php get_footer('classic'); ?>