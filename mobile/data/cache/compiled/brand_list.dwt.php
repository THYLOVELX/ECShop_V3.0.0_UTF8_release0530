<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="con">
<div style="height:4.2em;"></div>
  <header>
    <nav class="ect-nav ect-bg icon-write">
      <?php echo $this->fetch('library/page_menu.lbi'); ?>
    </nav>
  </header>
  
  <div class="bran_list" id="J_ItemList" style="opacity:1; overflow: hidden;" >
    <ul class="single_item" style="width: 190px;height: 190px; float: left;margin:5px 7px;">
    </ul>
    <a href="javascript:;" class="get_more"></a> </div>
</div>

<?php echo $this->fetch('library/search.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
<script type="text/javascript">
get_asynclist("<?php echo url('brand/asynclist', array('page'=>$this->_var['page'], 'sort'=>$this->_var['sort'], 'order'=>$this->_var['order']));?>" , '__TPL__/images/loader.gif');
</script> 
</body></html>