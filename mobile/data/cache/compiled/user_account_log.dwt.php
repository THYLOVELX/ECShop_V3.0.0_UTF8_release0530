<?php echo $this->fetch('library/user_header.lbi'); ?>
<ul class="nav nav-tabs" role="tablist">
    <li><a href="<?php echo url('User/account_detail');?>" ><?php echo $this->_var['lang']['add_surplus_log']; ?></a></li>
    <li><a href="<?php echo url('User/account_points');?>" ><?php echo $this->_var['lang']['view_points']; ?></a></li>
    
    <li class="active"><a href="<?php echo url('User/account_log');?>" ><?php echo $this->_var['lang']['view_application']; ?></a></li>

    
	<li><a href="<?php echo url('User/account_raply');?>" ><?php echo $this->_var['lang']['surplus_type_1']; ?></a></li>
	<!--<li><a href="<?php echo url('User/integral_raply');?>" ><?php echo $this->_var['lang']['surplus_type_99']; ?></a></li>-->
	<li><a href="<?php echo url('User/account_change');?>" ><?php echo $this->_var['lang']['surplus_type_6']; ?></a></li>
	<!--<li><a href="<?php echo url('User/account_deposit');?>" ><?php echo $this->_var['lang']['surplus_type_0']; ?></a></li>-->
	<?php if ($this->_var['user_type'] == 2 || $this->_var['user_type'] == 3 || $this->_var['info']['vip_type'] == 2): ?>
	<li><a href="<?php echo url('User/integral_deposit');?>" ><?php echo $this->_var['lang']['surplus_type_3']; ?></a></li>
	<?php endif; ?>
	<li><a href="<?php echo url('User/account_jewel');?>" ><?php echo $this->_var['lang']['surplus_type_4']; ?></a></li>
	<li><a href="<?php echo url('User/transfer');?>" ><?php echo $this->_var['lang']['surplus_type_5']; ?></a></li>
	
  </ul>
 <div class="user-account-detail">
  	<ul class=" ect-bg-colorf">
     <?php $_from = $this->_var['account_log']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
    	<li>
        	<p class="title"><span class="pull-left"><?php echo $this->_var['item']['add_time']; ?></span> <span class="pull-right"><?php echo $this->_var['item']['amount']; ?></span></p>
            <p class="content">
            	<span class="remark pull-left"><?php echo $this->_var['lang']['process_notic']; ?>:<?php echo $this->_var['item']['short_user_note']; ?></span> 
            	<span class="pull-right text-right type"><?php echo $this->_var['item']['type']; ?></span>
			
			</p>
			<p class="content"><span class="remark pull-left"><?php echo $this->_var['lang']['admin_notic']; ?>:<?php if ($this->_var['item']['admin_note']): ?><?php echo $this->_var['item']['admin_note']; ?><?php else: ?>N/A<?php endif; ?></span> <span class="pull-right text-right type"><?php echo $this->_var['lang']['is_paid']; ?>:<?php echo $this->_var['item']['pay_status']; ?></p>
			<p class="content"><?php echo $this->_var['lang']['handle']; ?>：<?php echo $this->_var['item']['handle']; ?>&nbsp;&nbsp;
				
			<?php if (( $this->_var['item']['is_paid'] == 0 && ( $this->_var['item']['process_type'] == 1 || $this->_var['item']['process_type'] == 2 || $this->_var['item']['process_type'] == 3 || $this->_var['item']['process_type'] == 4 ) ) || $this->_var['item']['handle']): ?>
			<a href="<?php echo url('user/cancel',array('id'=>$this->_var['item']['id']));?>" onclick="if (!confirm('<?php echo $this->_var['lang']['confirm_remove_account']; ?>')) return false;" class="btn btn-default"><?php echo $this->_var['lang']['is_cancel']; ?></a>
              <?php endif; ?>
			  </p>
        </li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
    <p class="pull-right count" style="background-color: bisque;"><?php echo $this->_var['lang']['current_surplus']; ?><b class="ect-colory"><?php echo $this->_var['surplus_amount']; ?></b></p>
  </div>
    <?php echo $this->fetch('library/page.lbi'); ?>
</div>
<?php echo $this->fetch('library/search.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
<?php echo $this->fetch('library/nav.lbi'); ?>
</body>
</html>