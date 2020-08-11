@foreach($session_cart as $cart)
<div class="single-cart-box">
	<div class="cart-img">
	    <a href="#"><img src="{{ URL::asset('product_image/'.$cart->product_image)}}" height="60" width="100" alt="cart-image"></a>
	</div>
	<div class="cart-content">
	    <h6><a href="{{ url('single_product/'.$cart->product_id)}}">{{$cart->product_name}}</a></h6>
	    <span> <input type="number" name="" value="1" style="width: 55px;" min="1" max="{{$cart->quantity}}">  × <i class="fa fa-rupee"></i>{{$cart->product_price}}</span>
	</div>

	<a class="del-icone" href="{{url('delete_cart_product/'.$cart->id)}}"><i class="fa fa-window-close-o"></i></a>
</div>
<!-- <script type="text/javascript">
		
		var a = document.getElementById('quan').value;
		var b = document.getElementById('pr').value;
		document.getElementById('pricevalue').innerHTML = a*b;

		//alert(b);
</script> -->
@endforeach