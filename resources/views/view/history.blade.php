@extends('layouts.front')

@section('content')


	<!-- HISTORY -->

	<section class="history">
		<div class="container">
			<h2 class="buy__title">
				{{__('home.История заказов')}}
			</h2>
			<div class="history-wrap">
				<table class="history-table">
					<tbody>
						<tr class="history-table__head">
							<td>
								№
							</td>
							<td>
								ID
							</td>
							<td>
								{{__('home.Количество')}}
							</td>
							<td>
								{{__('home.Дата')}}
							</td>
							<td>
								{{__('home.Cтатус')}}
							</td>
							<td>
								{{__('home.Общая сумма')}}
							</td>
						</tr>
						@php
							$i = 1;
						@endphp

						
						
						@foreach($orders as $order)
							<tr>
								<td>
									{{$i++}}
								</td>
								<td>
									{{$order->id}}
								</td>
								<td>
									{{collect($order->order_products)->sum('quantity')}}
								</td>
								<td>
									{{$order->created_at}}
								</td>
								<td>
									{{$order->status}}
								</td>
								<td>
									${{$order->total_price}}
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</section>
	
@endsection
