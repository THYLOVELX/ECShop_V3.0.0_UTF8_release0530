<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="con">

  <header class="ect-header ect-margin-tb ect-margin-lr">
		 <a href="javascript:history.go(-1)" class="pull-left ect-icon ect-icon1 ect-icon-history"></a>
		<div class="ect-header-div">
			<button class="btn btn-default ect-text-left ect-btn-search" onClick="javascript:openSearch();"><i class="fa fa-search"></i>&nbsp;双12疯狂抢购中</button>
		</div>
	</header>
  
  <div class="bran_list ppjbox" id="J_ItemList" style="opacity:1;" >
    <ul class="single_item" >
    </ul>
    <a href="javascript:;" class="get_more"></a> </div>
</div>

<?php echo $this->fetch('library/search.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
<script type="text/javascript">
get_asynclist("<?php echo url('brand/asynclist', array('page'=>$this->_var['page'], 'sort'=>$this->_var['sort'], 'order'=>$this->_var['order']));?>" , '__TPL__/images/loader.gif');
</script> 
</body></html>