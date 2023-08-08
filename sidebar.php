<?php
/* 
  Encyclopedia Wordpress Theme by Scriptol.com (c) 2009 - License GNU GPL 2.0
*/
?>

<div id="leftside">
<ul class="sideul">
	
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar() ) :  // Begin widgets 
/*
  Keep in mind that the content below will become inactive
  when widgets are moved to sidebar from the Admin panel
*/
?>


<?php if ( !is_front_page() || is_paged() ) { ?>
<li class="widget">
  <a href="<?php echo esc_url( home_url() ) ?>"> <?php _e('首页', ''); ?>  </a>
</li>
<?php } ?>


<?php
/* disabled while page are on the nav bar
 echo "<li class='widget'>"; 
 wp_list_pages('title_li=<h3>'.__('Pages').'</h3>&sort_column=menu_order' )
 echo "</li>";
*/  
?>

<?php
/* Disabled on nav bat
echo "<li class='widget'>";
_e('Categories', ''); 
echo "<ul>";"
wp_list_cats('sort_column=name&hierarchical=1')
echo "</ul>";
echo "</li>";
*/
?>


<li class="widget"><?php _e('导航', 'encyclopedia' ); ?>
<ul>
    <!-- 其他导航链接 -->
    <li><a href="https://revealscum.com/jingri/">精日板块</a></li>
	<li><a href="https://revealscum.com/hanjian/">汉奸板块</a></li>
	<li><a href="https://revealscum.com/recentmodified/">新增和修改</a></li>
	<li><a href="https://revealscum.com/forums/">论坛</a></li>
	<li><a href="https://revealscum.com/manhua/">网友创作区</a></li>
	<li><a href="https://revealscum.com/user-videos/">视频</a></li>
</ul>
</li>
<li class="widget"><?php _e('账户', 'encyclopedia' ); ?>
<ul>
    <?php if ( is_user_logged_in() ) { ?>
        <li><a href="<?php echo wp_logout_url(); ?>">注销</a></li>
        <li><a href="https://revealscum.com/profile/">个人主页</a></li>
    <?php } else { ?>
        <li><a href="<?php echo wp_login_url(); ?>">登录</a></li>
        <li><a href="<?php echo wp_registration_url(); ?>">注册</a></li>
    <?php } ?>
</ul>
	</li>
<?php wp_list_bookmarks('title_before=&title_after=') ?>


<li class="widget"><?php _e('搜索', 'encyclopedia') ?>
<form id="searchform" method="get" action="<?php  esc_url( home_url() ) ?>">
		<input id="s" name="s" type="text" value="<?php the_search_query() ?>" size="10" />
		<input id="searchsubmit" name="searchsubmit" type="submit" value="<?php _e('Search', 'encyclopedia') ?>" />
</form>
</li>

<li class="widget"><?php _e('档案', 'encyclopedia' ); ?>
<p id="calendar">
<?php get_calendar(); ?>
</p>
</li>



<?php endif; // End widgets ?>

</ul>
</div>
