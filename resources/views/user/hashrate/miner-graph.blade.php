@extends('layouts.app')

@section('title')
	Hashrate - {{ $miner->short_address }}
@endsection

@section('hero')
	<section class="hero is-primary">
		<div class="hero-body">
			<div class="container">
				<h1 class="title">
					Hashrate chart
				</h1>
				<h2 class="subtitle">
					Your miner's performance
				</h2>
			</div>
		</div>
	</section>
@endsection

@section('content')
	<div class="hashrate-graph-view">
		<div class="columns is-marginless is-centered">
			<div class="column is-7">
				<h4 class="title is-4">Address {{ $miner->address }}</h4>

				<div class="tabs">
					<ul>
						<li{!! $type == 'latest' ? ' class="is-active"' : '' !!}><a href="{{ route('miners.hashrate.graph', [$miner->uuid, 'latest']) }}">Last 3 days</a></li>
						<li{!! $type == 'daily' ? ' class="is-active"' : '' !!}><a href="{{ route('miners.hashrate.graph', [$miner->uuid, 'daily']) }}">All time</a></li>
					</ul>
				</div>

				<div id="graph"></div>

				<h5 class="title is-5 is-pulled-right tooltip" data-tooltip="Averaged over last 4 hours.">Average hashrate: {{ $average_hashrate }}</h5>
				<h5 class="title is-5">Current hashrate: {{ $current_hashrate }}</h5>

				<hr>
				<p><span class="important">Note:</span> Hash rates update every 5 minutes. Hash rate calculation is purely informational, it does not represent 'what the pool sees', or your real mining speed. It is a statistical approximation, displayed for informational purposes only. The reading should start matching your real speed over a longer period of time (usually 6 hours). You are always mining at full speed reported by typing <code>stats</code> into your CPU miner console or by observing the speed that your GPU miner shows. Displayed hash rate does not affect payouts at all.</p>
				<hr>
				<p><span class="important">Note:</span> If you delete your miner or it becomes offline for more than 3 days, it's hashrate data will be permanently lost. Hashrate history is stored only for registered active miners, from the time of registration.</p>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
	<script>
		var hashrateView = new hashrateView('{{ $type }}', '{!! $graph_data !!}');
	</script>
@endsection