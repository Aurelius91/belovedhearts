<div class="col-xs-12">
	<div class="account-pict v-center" style="background-image: url(<?= base_url(); ?>assets/images/main/client-2.jpg);"></div><!--
 --><div class="account-mail v-center">
		<h5><?= $customer->name; ?></h5>
		<h5><?= $customer->email; ?></h5>
	</div>
</div>
<div class="col-xs-12 account-nav-wrap">
	<div class="col-xs-12 account-nav <? if($this->uri->segment(1)=="account"): ?>account-red<? endif; ?>">
		<a href="<?= base_url(); ?>account">
			<h5>Account Details</h5>
		</a>
	</div>
	<div class="col-xs-12 account-nav <? if($this->uri->segment(1)=="address"): ?>account-red<? endif; ?>">
		<a href="<?= base_url(); ?>address">
			<h5>Addresses</h5>
		</a>
	</div>
	<div class="col-xs-12 account-nav <? if($this->uri->segment(1)=="orders"): ?>account-red<? endif; ?>">
		<a href="<?= base_url(); ?>orders">
			<h5>Orders</h5>
		</a>
	</div>
	<div class="col-xs-12 account-nav <? if($this->uri->segment(1)=="donatehistory"): ?>account-red<? endif; ?>">
		<a href="<?= base_url(); ?>donatehistory">
			<h5>Donate</h5>
		</a>
	</div>
	<div class="col-xs-12 account-nav">
		<a href="">
			<h5>Logout</h5>
		</a>
	</div>
</div>