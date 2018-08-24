<div class="col-xs-12">
	<div class="cart-menu-wrap">
		<ul>
			<li <? if($this->uri->segment(1)=="cart" || $this->uri->segment(1)=="shippingaddress" || $this->uri->segment(1)=="revieworder" || $this->uri->segment(1)=="payment" || $this->uri->segment(1)=="confirmorder"): ?>class="cart-page-on-show"<? endif; ?>><a href="<?= base_url(); ?>cart">Cart</a></li>
			<li <? if($this->uri->segment(1)=="shippingaddress" || $this->uri->segment(1)=="revieworder" || $this->uri->segment(1)=="payment" || $this->uri->segment(1)=="confirmorder"): ?>class="cart-page-on-show"<? endif; ?>><a href="<?= base_url(); ?>shippingaddress">Shipping address</a></li>
			<li <? if($this->uri->segment(1)=="revieworder" || $this->uri->segment(1)=="payment" || $this->uri->segment(1)=="confirmorder"): ?>class="cart-page-on-show"<? endif; ?>><a href="<?= base_url(); ?>revieworder">Review order</a></li>
			<li <? if($this->uri->segment(1)=="payment" || $this->uri->segment(1)=="confirmorder"): ?>class="cart-page-on-show"<? endif; ?>><a href="<?= base_url(); ?>payment">Payment</a></li>
			<li <? if($this->uri->segment(1)=="confirmorder"): ?>class="cart-page-on-show"<? endif; ?>><a href="<?= base_url(); ?>confirmorder">Confirm order</a></li>
		</ul>
	</div>
</div>