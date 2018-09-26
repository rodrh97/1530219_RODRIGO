<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_category
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
defined('_JEXEC') or die;
$document = JFactory::getDocument();
$document->addScript( JURI::root() . "/templates/jsn_educare_pro/niches/school/js/owl.carousel.min.js" );
$document->addStyleSheet( JURI::root() . "/templates/jsn_educare_pro/niches/school/css/owl.carousel.min.css" );
?>
<div class="jsn-carousel container">
<div class=" category-module<?php echo $moduleclass_sfx; ?>">
	<div class="owl-list owl-carousel">
	<?php if ($grouped) : ?>
		<?php foreach ($list as $group_name => $group) : ?>
		<div>
			<div class="mod-articles-category-group"><?php echo $group_name;?></div>
			<ul>
				<?php foreach ($group as $item) : ?>
					<li>
						<?php if ($params->get('link_titles') == 1) : ?>
							<a class="mod-articles-category-title <?php echo $item->active; ?>" href="<?php echo $item->link; ?>">
								<?php echo $item->title; ?>
							</a>
						<?php else : ?>
							<?php echo $item->title; ?>
						<?php endif; ?>

						<?php if ($item->displayHits) : ?>
							<span class="mod-articles-category-hits">
								(<?php echo $item->displayHits; ?>)
							</span>
						<?php endif; ?>

						<?php if ($params->get('show_author')) : ?>
							<span class="mod-articles-category-writtenby">
								<?php echo $item->displayAuthorName; ?>
							</span>
						<?php endif;?>

						<?php if ($item->displayCategoryTitle) : ?>
							<span class="mod-articles-category-category">
								(<?php echo $item->displayCategoryTitle; ?>)
							</span>
						<?php endif; ?>

						<?php if ($item->displayDate) : ?>
							<span class="mod-articles-category-date"><?php echo $item->displayDate; ?></span>
						<?php endif; ?>

						<?php if ($params->get('show_introtext')) : ?>
							<p class="mod-articles-category-introtext">
								<?php echo $item->displayIntrotext; ?>
							</p>
						<?php endif; ?>

						<?php if ($params->get('show_readmore')) : ?>
							<p class="mod-articles-category-readmore">
								<a class="mod-articles-category-title <?php echo $item->active; ?>" href="<?php echo $item->link; ?>">
									<?php if ($item->params->get('access-view') == false) : ?>
										<?php echo JText::_('MOD_ARTICLES_CATEGORY_REGISTER_TO_READ_MORE'); ?>
									<?php elseif ($readmore = $item->alternative_readmore) : ?>
										<?php echo $readmore; ?>
										<?php echo JHtml::_('string.truncate', $item->title, $params->get('readmore_limit')); ?>
											<?php if ($params->get('show_readmore_title', 0) != 0) : ?>
												<?php echo JHtml::_('string.truncate', ($this->item->title), $params->get('readmore_limit')); ?>
											<?php endif; ?>
									<?php elseif ($params->get('show_readmore_title', 0) == 0) : ?>
										<?php echo JText::sprintf('MOD_ARTICLES_CATEGORY_READ_MORE_TITLE'); ?>
									<?php else : ?>
										<?php echo JText::_('MOD_ARTICLES_CATEGORY_READ_MORE'); ?>
										<?php echo JHtml::_('string.truncate', ($item->title), $params->get('readmore_limit')); ?>
									<?php endif; ?>
								</a>
							</p>
						<?php endif; ?>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<?php endforeach; ?>
	<?php else : ?>
		<?php foreach ($list as $item) : 
		$image_temp = json_decode($item->images); ?>
			<div class="item">
				<img src="<?php echo $image_temp->image_intro; ?>" alt="<?php echo $image_temp->image_intro; ?>" />

				<?php if ($item->displayDate) : ?>
					<span class="mod-articles-category-date">
						<?php echo $item->displayDate; ?>
					</span>
				<?php endif; ?>

				<?php if ($params->get('link_titles') == 1) : ?>
					<a class="mod-articles-category-title <?php echo $item->active; ?>" href="<?php echo $item->link; ?>">
						<?php echo $item->title; ?>
					</a>
				<?php else : ?>
					<?php echo $item->title; ?>
				<?php endif; ?>

				<?php if ($item->displayHits) : ?>
					<span class="mod-articles-category-hits">
						(<?php echo $item->displayHits; ?>)
					</span>
				<?php endif; ?>

				<?php if ($params->get('show_author')) : ?>
					<span class="mod-articles-category-writtenby">
						<?php echo $item->displayAuthorName; ?>
					</span>
				<?php endif;?>

				<?php if ($item->displayCategoryTitle) : ?>
					<span class="mod-articles-category-category">
						(<?php echo $item->displayCategoryTitle; ?>)
					</span>
				<?php endif; ?>

				<?php if ($params->get('show_introtext')) : ?>
					<p class="mod-articles-category-introtext">
						<?php echo $item->displayIntrotext; ?>
					</p>
				<?php endif; ?>

				<?php if ($params->get('show_readmore')) : ?>
					<p class="mod-articles-category-readmore">
						<a class="mod-articles-category-title <?php echo $item->active; ?>" href="<?php echo $item->link; ?>">
							<?php if ($item->params->get('access-view') == false) : ?>
								<?php echo JText::_('MOD_ARTICLES_CATEGORY_REGISTER_TO_READ_MORE'); ?>
							<?php elseif ($readmore = $item->alternative_readmore) : ?>
								<?php echo $readmore; ?>
								<?php echo JHtml::_('string.truncate', $item->title, $params->get('readmore_limit')); ?>
							<?php elseif ($params->get('show_readmore_title', 0) == 0) : ?>
								<?php echo JText::sprintf('MOD_ARTICLES_CATEGORY_READ_MORE_TITLE'); ?>
							<?php else : ?>
								<?php echo JText::_('MOD_ARTICLES_CATEGORY_READ_MORE'); ?>
								<?php echo JHtml::_('string.truncate', $item->title, $params->get('readmore_limit')); ?>
							<?php endif; ?>
						</a>
					</p>
				<?php endif; ?>
			</div>
		<?php endforeach; ?>
	<?php endif; ?>
	<!-- Javascript -->
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			var owl_options = {
				loop: true,
				startPosition: 1,
				nav: true,
				navText: [ '<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>' ],
				pagination : false,
				paginationNumbers : false,
				margin: 30,
				items: 4,
				responsive : {
					// breakpoint from 0 up
					0 : {
						items: 1
					},
					// breakpoint from 480 up
					480 : {
						items: 1
					},
					// breakpoint from 768 up
					768 : {
						items: 3
					},
					// breakpoint from 980 up
					980 : {
						items: 4
					}
				}
			};
			if($("body").hasClass("sunfw-direction-rtl"))
				owl_options.rtl = true;
			else {
				owl_options.rtl = false;
			}
			$('.owl-list').owlCarousel(owl_options);

			$('.navslider .prev').on('click', function(e){
				e.preventDefault();
				$('.owl-list').trigger('owl.prev');
			});
			$('.navslider .next').on('click', function(e){
				e.preventDefault();
				$('.owl-list').trigger('owl.next');
			});

		});
	</script>
	</div>
</div>
	</div>
