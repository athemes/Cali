<?php
/**
 * Template part for displaying sidebar HTML during dev stage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mode
 */

// Static file - used for reference only!
// TODO: remove after theme development

?>



<div id="comments" class="comments-area">
	<h3 class="comments-title section-title">03 comments</h3>
	<!-- .comments-title -->
	<ul class="comment-list">
		<li id="comment-1" class="comment even thread-even depth-1">
			<article id="div-comment-1" class="comment-body comment-entry clearfix">
				<figure class="comment-avatar">
					<img alt="" src="http://1.gravatar.com/avatar/d7a973c7dab26985da5f961be7b74480?s=70&amp;d=mm&amp;r=g" srcset="http://1.gravatar.com/avatar/d7a973c7dab26985da5f961be7b74480?s=140&amp;d=mm&amp;r=g 2x" class="avatar avatar-70 photo" width="70" height="70">			
				</figure>
				<div class="comment-text">
					<header class="comment-meta">
						<span class="comment-author">
						<b class="fn"><a href="https://wordpress.org/" rel="external nofollow" class="url">A WordPress Commenter</a></b>					</span><!-- .comment-author -->
						<span class="comment-time">,
						<time datetime="2018-02-08T14:52:19+00:00">Nov 21, 2017</time>
						</span><!-- .comment-metadata -->
						<a class="comment-href" href="#">
							<span class="sr-only">Direct link to comment</span>
							<i class="fa fa-link"></i>
						</a>
					</header>
					<!-- .comment-meta -->
					<div class="comment-content">
						<p>Hi, this is a comment.<br>
							To get started with moderating, editing, and deleting comments, please visit the Comments screen in the dashboard.<br>
							Commenter avatars come from <a href="https://gravatar.com">Gravatar</a>.
						</p>
					</div>
					<!-- .comment-content -->
					<footer class="comment-links">
						<span class="edit-link"><a class="comment-edit-link" href="#">Like</a></span>
						<span class="reply-link"><a class="comment-reply-link" href="#" >Reply</a></span>				
					</footer>
					<!-- .comment-links -->
				</div>
			</article>
			<ul class="children">
				<li id="comment-2" class="comment byuser comment-author-igorathemes bypostauthor odd alt depth-2">
					<article id="div-comment-2" class="comment-body comment-entry clearfix">
						<figure class="comment-avatar">
							<img alt="" src="http://2.gravatar.com/avatar/8bd4dfec0b6066af5bb0ab9be40282e2?s=70&amp;d=mm&amp;r=g" srcset="http://2.gravatar.com/avatar/8bd4dfec0b6066af5bb0ab9be40282e2?s=140&amp;d=mm&amp;r=g 2x" class="avatar avatar-70 photo" width="70" height="70">			
						</figure>
						<div class="comment-text">
							<header class="comment-meta">
								<span class="comment-author">
								<b class="fn">Igor</b>					</span><!-- .comment-author -->
								<span class="comment-time">,
								<time datetime="2018-02-08T14:52:54+00:00">Nov 21, 2017</time>
								</span><!-- .comment-metadata -->
								<a class="comment-href" href="#">
									<span class="sr-only">Direct link to comment</span>
									<i class="fa fa-link"></i>
								</a>
							</header>
							<!-- .comment-meta -->
							<div class="comment-content">
								<p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora.</p>
							</div>
							<!-- .comment-content -->
							<footer class="comment-links">
								<span class="edit-link"><a class="comment-edit-link" href="#">Like</a></span>
								<span class="reply-link"><a class="comment-reply-link" href="#" >Reply</a></span>				
							</footer>
							<!-- .comment-links -->
						</div>
					</article>
				</li>
				<!-- #comment-## -->
			</ul>
			<!-- .children -->
		</li>
		<!-- #comment-## -->
		<li id="comment-3" class="comment byuser comment-author-igorathemes bypostauthor even thread-odd thread-alt depth-1">
			<article id="div-comment-3" class="comment-body comment-entry clearfix">
				<figure class="comment-avatar">
					<img alt="" src="http://2.gravatar.com/avatar/8bd4dfec0b6066af5bb0ab9be40282e2?s=70&amp;d=mm&amp;r=g" srcset="http://2.gravatar.com/avatar/8bd4dfec0b6066af5bb0ab9be40282e2?s=140&amp;d=mm&amp;r=g 2x" class="avatar avatar-70 photo" width="70" height="70">			
				</figure>
				<div class="comment-text">
					<header class="comment-meta">
						<span class="comment-author">
						<b class="fn">Igor</b>					</span><!-- .comment-author -->
						<span class="comment-time">,
						<time datetime="2018-02-08T14:53:04+00:00">Nov 21, 2017</time>
						</span><!-- .comment-metadata -->
						<a class="comment-href" href="#">
							<span class="sr-only">Direct link to comment</span>
							<i class="fa fa-link"></i>
						</a>
					</header>
					<!-- .comment-meta -->
					<div class="comment-content">
						<p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora.</p>
					</div>
					<!-- .comment-content -->
					<footer class="comment-links">
						<span class="edit-link"><a class="comment-edit-link" href="#">Like</a></span>
						<span class="reply-link"><a class="comment-reply-link" href="#" >Reply</a></span>				
					</footer>
					<!-- .comment-links -->
				</div>
			</article>
		</li>
		<!-- #comment-## -->
	</ul>
	<!-- .comment-list -->

	<div id="respond" class="comment-respond">
		<h3 id="reply-title" class="comment-reply-title">Leave a comment <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a></small></h3>
		<form action="http://mode-beta.local/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate="">
			<p class="comment-form-author"><input id="author" name="author" placeholder="Name *" value="" size="30" maxlength="245" type="text"></p>
			<p class="comment-form-email"><input id="email" name="email" placeholder="Email *" value="" size="30" maxlength="100" aria-describedby="email-notes" type="text"></p>
			<p class="comment-form-url"><input id="url" name="url" placeholder="Website" value="" size="30" maxlength="200" type="text"></p>
			<p class="comment-form-comment"><textarea id="comment" name="comment" placeholder="Message *" cols="45" rows="3" maxlength="65525" aria-required="true" required="required"></textarea></p>
			<p class="form-submit"><input name="submit" id="submit" class="submit" value="Send Message" type="submit"> <input name="comment_post_ID" value="1" id="comment_post_ID" type="hidden">
				<input name="comment_parent" id="comment_parent" value="0" type="hidden">
			</p>
		</form>
	</div>
</div>


