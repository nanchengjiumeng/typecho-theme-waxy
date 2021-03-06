<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>


<section class="content-wrap">
        <div class="container">
            <div class="row">


                <main class="col-md-8 main-content">
                
<div class="cover tag-cover">
    <h3 class="tag-name">
        <?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 <code>%s</code> 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?>
    </h3>
</div>

<?php while($this->next()): ?>

<article id="<?php $this->cid() ?>" class="post">

    <?php if (array_key_exists('star',unserialize($this->___fields()))): ?><div class="featured" title="推荐文章">
        <i class="glyphicon glyphicon-star"></i>
    </div><?php endif; ?>

    <div class="post-head">
        <h1 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
        <div class="post-meta">
            <span class="author">作者：<a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></span>
            <time class="post-date" datetime="<?php $this->date('c'); ?>" title="<?php $this->date('Y年m月d日'); ?>">时间：<?php $this->date('Y年m月d日'); ?></time>
            <span class="author">分类：<?php $this->category(','); ?></span>
            <span class="author">字数：<?php echo art_count($this->cid); ?></span>
        </div>
        <div class="post-border"></div>
    </div>
    <?php if (array_key_exists('img',unserialize($this->___fields()))): ?>
    <div class="featured-media">
        <a href="<?php $this->permalink() ?>"><img src="<?php $this->fields->img(); ?>" alt="<?php $this->title() ?>"></a>
    </div>
    <?php endif; ?>
    <div class="post-content">
        <!--?php $this->content(); ?-->
        <?php echo getIndexContent($this->content,$this->permalink); ?>
    </div>
    <footer class="post-footer clearfix">
        <div class="pull-left tag-list">
            <i class="glyphicon glyphicon-folder-open"></i>
            <?php $this->tags(' , ', true, 'none'); ?>
        </div>
        <div class="pull-right post-permalink" >
        	<a href="<?php $this->permalink() ?>" class="btn btn-default">阅读全文</a>
		</div>
    </footer>
</article>

<?php endwhile; ?>

<nav class="pagination" role="navigation">
        
        <?php $this->pageLink('<x aria-label="Previous" class="newer-posts"><i class="glyphicon glyphicon-menu-left"></i></x>'); ?>
    <span class="page-number">第 <?php if($this->_currentPage>1) echo $this->_currentPage;  else echo 1;?> 页 / 共 <?php echo ceil($this->getTotal() / $this->parameter->pageSize); ?> 页</span>
        <?php $this->pageLink('<x aria-label="Next" class="older-posts"><i class="glyphicon glyphicon-menu-right"></i></x>','next'); ?>
</nav>


                </main>


<?php $this->need('sidebar.php'); ?>

            </div class="row">
        </div class="container">
</section>

	<?php $this->need('footer.php'); ?>
