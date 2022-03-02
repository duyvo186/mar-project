
<div class=""><div class="aHl"></div><div id=":o9" tabindex="-1"></div><div id=":ny" class="ii gt" jslog="20277; u014N:xr6bB; 4:W251bGwsbnVsbCxbXV0."><div id=":nx" class="a3s aiL "><u></u>



	<div marginwidth="0" marginheight="0" style="padding:0">
		<div id="m_-5358690875676784171wrapper" dir="ltr" style="background-color:#f7f7f7;margin:0;padding:70px 0;width:100%">
			<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
				<tbody><tr>
					<td align="center" valign="top">
						<div id="m_-5358690875676784171template_header_image">
													</div>
						<table border="0" cellpadding="0" cellspacing="0" width="600" id="m_-5358690875676784171template_container" style="background-color:#ffffff;border:1px solid #dedede;border-radius:3px">
							<tbody><tr>
								<td align="center" valign="top">

									<table border="0" cellpadding="0" cellspacing="0" width="100%" id="m_-5358690875676784171template_header" style="background-color:#96588a;color:#ffffff;border-bottom:0;font-weight:bold;line-height:100%;vertical-align:middle;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;border-radius:3px 3px 0 0">
										<tbody><tr>
											<td id="m_-5358690875676784171header_wrapper" style="padding:36px 48px;display:block">
												<h1 style="font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:30px;font-weight:300;line-height:150%;margin:0;text-align:left;color:#ffffff;background-color:inherit">Thank you for your order</h1>
											</td>
										</tr>
									</tbody></table>

								</td>
							</tr>
							<tr>
								<td align="center" valign="top">

									<table border="0" cellpadding="0" cellspacing="0" width="600" id="m_-5358690875676784171template_body">
										<tbody><tr>
											<td valign="top" id="m_-5358690875676784171body_content" style="background-color:#ffffff">

												<table border="0" cellpadding="20" cellspacing="0" width="100%">
													<tbody><tr>
														<td valign="top" style="padding:48px 48px 32px">
															<div id="m_-5358690875676784171body_content_inner" style="color:#636363;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:14px;line-height:150%;text-align:left">

<p style="margin:0 0 16px">Chào {{$data1["ten"]}},</p>


<p style="margin:0 0 16px">Hướng dẫn nhập nội dung chuyển khoản:<br>
THANHTOANDONHANG [Mã Đơn Hàng Được Nhận Ở Gmail]<br>
VÍ DỤ: THANHTOANDONHANG [#{{$data1["code"]}}]</p>

<section><h2 style="color:#96588a;display:block;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:18px;font-weight:bold;line-height:130%;margin:0 0 18px;text-align:left">Thông tin chuyển khoản</h2>
<h3 style="color:#96588a;display:block;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:16px;font-weight:bold;line-height:130%;margin:16px 0 8px;text-align:left">Võ Hữu Duy</h3>
<ul>
<li>Bank: <strong>Ngân Hàng ACB Chi Nhánh Tân Bình</strong>
</li>
<li>Account number: <strong>82828388</strong>
</li>
</ul></section>
<h2 style="color:#96588a;display:block;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:18px;font-weight:bold;line-height:130%;margin:0 0 18px;text-align:left">
	[Order #{{$data1["code"]}}] ({{$data1["ngaydat"]}}</h2>

<div style="margin-bottom:40px">
	<table cellspacing="0" cellpadding="6" border="1" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;width:100%;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif">
		<thead>
			<tr>
				<th scope="col" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">Sản Phẩm</th>
				<th scope="col" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">Số Lượng</th>
				<th scope="col" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">Giá</th>
			</tr>
		</thead>
		<tbody>

@php
$cart = session('giohang');
@endphp
            @php $tong = 0; @endphp
            @foreach ($cart as $id=>$item)

            @php $tong+= $item['gia']*$item['soluongmua'];@endphp
				<tr>
		<td style="color:#636363;border:1px solid #e5e5e5;padding:12px;text-align:left;vertical-align:middle;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif;word-wrap:break-word">
		{{$item['ten']}}		</td>
		<td style="color:#636363;border:1px solid #e5e5e5;padding:12px;text-align:left;vertical-align:middle;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif">
			{{$item['soluongmua']}}		</td>
		<td style="color:#636363;border:1px solid #e5e5e5;padding:12px;text-align:left;vertical-align:middle;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif">
			<span>{{$item['gia']}}<span>₫</span></span>		</td>
	</tr>
    @endforeach

		</tbody>
		<tfoot>
								<tr>
						<th scope="row" colspan="2" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left;border-top-width:4px">Tổng</th>
						<td style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left;border-top-width:4px"><span>{{number_format($tong)}}<span>₫</span></span></td>
					</tr>
										<tr>
						<th scope="row" colspan="2" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">Phương thức thanh toán:</th>
						<td style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">Chuyển Khoản Ngân Hàng</td>
					</tr>
										<tr>
						<th scope="row" colspan="2" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">Tổng tiền</th>
						<td style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left"><span>{{number_format($tong)}}<span>₫</span></span></td>
					</tr>
							</tfoot>
	</table>
</div>


<table id="m_-5358690875676784171addresses" cellspacing="0" cellpadding="0" border="0" style="width:100%;vertical-align:top;margin-bottom:40px;padding:0">
	<tbody><tr>
		<td valign="top" width="50%" style="text-align:left;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif;border:0;padding:0">
			<h2 style="color:#96588a;display:block;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:18px;font-weight:bold;line-height:130%;margin:0 0 18px;text-align:left">Billing address</h2>

			<address style="padding:12px;color:#636363;border:1px solid #e5e5e5">
				{{$data1["ten"]}}<br><br>{{$data1["diachi"]}}<br>									<br><a href="tel:+{{$data1["sdt"]}}" style="color:#96588a;font-weight:normal;text-decoration:underline" target="_blank">+{{$data1["sdt"]}}</a>													<br><a href="mailto:huuduy8989@gmail.com" target="_blank">{{$data1["email"]}}</a>							</address>
		</td>
			</tr>
</tbody></table>
{{-- <p style="margin:0 0 16px">We look forward to fulfilling your order soon.</p> --}}
															</div>
														</td>
													</tr>
												</tbody></table>

											</td>
										</tr>
									</tbody></table>

								</td>
							</tr>
						</tbody></table>
					</td>
				</tr>
				<tr>
					<td align="center" valign="top">

						<table border="0" cellpadding="10" cellspacing="0" width="600" id="m_-5358690875676784171template_footer">
							<tbody><tr>
								<td valign="top" style="padding:0;border-radius:6px">
									<table border="0" cellpadding="10" cellspacing="0" width="100%">
										<tbody><tr>
											<td colspan="2" valign="middle" id="m_-5358690875676784171credit" style="border-radius:6px;border:0;color:#8a8a8a;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:12px;line-height:150%;text-align:center;padding:24px 0">
												<p style="margin:0 0 16px">vua cay dep — Built with <a href="https://woocommerce.com" style="color:#96588a;font-weight:normal;text-decoration:underline" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://woocommerce.com&amp;source=gmail&amp;ust=1645212327039000&amp;usg=AOvVaw20Fu_5EFBwFrXb-gExpQYs"></a></p>
											</td>
										</tr>
									</tbody></table>
								</td>
							</tr>
						</tbody></table>

					</td>
				</tr>
			</tbody></table><div class="yj6qo"></div><div class="adL">
		</div></div><div class="adL">
	</div></div><div class="adL">


</div></div></div><div id=":od" class="ii gt" style="display:none"><div id=":oe" class="a3s aiL "></div></div><div class="hi"></div></div>
