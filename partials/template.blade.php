<!-- This template requires bootstrap and style.css file to properly render. Make sure the parent file of this partial has bootstrap and assets/css/style.css included -->

<div class="col-md-12 ts-top-banner">
<!--
<h1>Hero Image</h1>
<h2>This is a simple hero unit, a simple jumbotron-style component for calling extra 7
attention to featured content or information.</h2>
<p><a class="btn btn-primary btn-large">Learn more</a></p>
-->
</div>

<div class="col-md-12 breathing-space">

	<div class="row">
		<div class="col-md-6">
			<p><strong>Blue Cluster</strong> (Originally known as Orion)</p>
			<!-- Please use img-fluid instead of img-responsive if your bootstrap version if >=4.0 -->
			<img class="center-image img-responsive" src="http://hpcstatsprd01.rs.gsu.edu/ganglia/graph.php?c=ORION&m=load_one&r=hour&s=by%20name&hc=4&mc=2&st=1449157145&g=load_report&z=medium&r=hour">
			<p class="vertical-space"></p>
			<img class="center-image img-responsive" src="/assets/img/Architecture-Orion.png">
			<p class="vertical-space"></p>
			<p><strong>Blue&nbsp;</strong><span>cluster is comprised of six IBM System x3850 X5 Servers,&nbsp; two Dell PowerEdge R720, one Silicon Mechanics SuperServer 8027R-TRF, and two Silicon Mechanics R331.v6 servers.&nbsp;</span><span>Schedule and process Linux jobs rapidly using LSF in batch mode as well as being able to use an interactive queue.</span><span>&nbsp;Specifications are as follows:</span></p>

			<ul>
			    <li>CentOS 7.2 64-bit</li>
			    <li>Slurm Workload Manager</li>
			    <li>
			        <span>6x IBM System x3850 x5</span>
			        <ul>
			            <li>Intel® Xeon® Processor E7-4850</li>
			            <li>4 CPUs (10 cores per CPU), 2.0 GHz processors</li>
			            <li>512 GB RAM</li>
			            <li>2 TB of scratch storage for jobs</li>
			        </ul>
			    </li>
			    <li>
			        1x Silicon Mechanics SuperServer 8027R-TRF+
			        <ul>
			            <li>Intel® Xeon® Processor E7-4850</li>
			            <li>4 CPUs (10 cores per CPU), 2.2 GHz processors</li>
			            <li>512 GB RAM</li>
			            <li>4 TB of scratch storage for jobs</li>
			        </ul>
			    </li>
			    <li>
			        2x Silicon Mechanics R331.v6
			        <ul>
			            <li>Intel® Xeon® Processor E5-2630v4</li>
			            <li>2 CPUs (10 cores per CPU), 2.2 GHz processors</li>
			            <li>256 GB RAM</li>
			            <li>4 TB of scratch storage for jobs</li>
			        </ul>
			    </li>
			    <li>
			        1x Dell PowerEdge R720
			        <ul>
			            <li>Intel® Xeon® Processor E5-2670</li>
			            <li>2 CPUs (10 cores per CPU), 2.5 GHz</li>
			            <li>128 GB RAM</li>
			            <li>2 TB of scratch storage for jobs</li>
			        </ul>
			    </li>
			    <li>
			        1x Dell PowerEdge R720
			        <ul>
			            <li>Intel® Xeon® Processor E5-2670</li>
			            <li>2 CPUs (10 cores per CPU), 2.5 GHz</li>
			            <li>128 GB RAM</li>
			            <li>2x NVidia Tesla K40m (2880 CUDA cores per each card)</li>
			            <li>2 TB of scratch storage for jobs</li>
			        </ul>
			    </li>
			</ul>
		</div>
		<!--
		<div class="col-md-2">
			<a href="{{ URL::to('/') }}/login"><h4>Login</h4></a><hr/>
			<a href="{{ URL::to('/') }}/create"><h4>Register</h4></a><hr/>
		</div>
		-->
		<div class="col-md-6">
			<p><strong>CDER Cluster</strong></p>
			<img class="center-image img-responsive " src="http://hpcstats.rs.gsu.edu/ganglia/graph.php?c=CDER&m=load_one&r=hour&s=by%20name&hc=4&mc=2&st=1485988589&g=load_report&z=medium&r=hour">
			<p class="vertical-space"></p>
			<img class="center-image img-responsive" src="/assets/img/Architecture-CDER.png">
			<p class="vertical-space"></p>
			<p><strong>CDER</strong>&nbsp;cluster is an NSF funded cluster through Award CNS-1205650 "Collaborative Research: CI-ADOO-NEW: Parallel and Distributed Computing Curriculum Development and Educational Resources. &nbsp;This heterogeneous 14 node cluster features 280 cores, 1 TB of RAM, and two GPUs that are able to sustain a mixed user workload that is facilitated by SLURM scheduler. &nbsp;&nbsp;</p>

			<ul>
			    <li>CentOS 7.2 64-bit</li>
			    <li>SLURM Scheduler</li>
			    <li>InfiniBand QDR Interconnect</li>
			    <li>
			        <span>11x Compute Nodes</span>
			        <ul>
			            <li>20 core - 2x Intel Xeon&nbsp;E5-2650 v3</li>
			            <li>64 GB RAM&nbsp;</li>
			        </ul>
			    </li>
			    <li>
			        <span>Large Compute Node</span>
			        <ul>
			            <li>36 core - 2x Intel Xeon&nbsp;E5-2699 v3&nbsp;</li>
			            <li>128 GB RAM</li>
			        </ul>
			    </li>
			    <li>
			        <span>GPU Node</span>
			        <ul>
			            <li>12 core - 2x Intel Xeon&nbsp;E5-2620 v3</li>
			            <li>64 GB RAM</li>
			            <li>GeForce GTX 980</li>
			        </ul>
			    </li>
			    <li>
			        <span>GPU Node</span>
			        <ul>
			            <li>12 core - 2x Intel Xeon&nbsp;E5-2620 v3</li>
			            <li>64 GB RAM</li>
			            <li>GeForce GTX Titan X</li>
			        </ul>
			    </li>
			</ul>
		</div>
	</div>

</div>
